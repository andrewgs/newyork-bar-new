<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mdtextblock extends CI_Model {

    var $id   		= 0;
    var $textblock	= '';
    var $date  		= '';

    function __construct(){
        parent::__construct();
    }
	
	function insert_record($data){
			
		$this->textblock 	= $data['textblock'];
		$this->date			= date("Y-m-d");
		
		$this->db->insert('textblock',$this);
		return $this->db->insert_id();
	}

	function update_record($id,$data){
			
		$this->db->set('textblock',$data['textblock']);
		$this->db->where('id',$id);
		$this->db->update('textblock');
		return $this->db->affected_rows();
	}
	
	function read_record($id){
		
		$this->db->where('id',$id);
		$query = $this->db->get('textblock',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function read_field($id,$field){
			
		$this->db->where('id',$id);
		$query = $this->db->get('textblock',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0][$field];
		return FALSE;
	}
	
	function delete_record($id){
	
		$this->db->where('id',$id);
		$this->db->delete('textblock');
		return $this->db->affected_rows();
	}	
}