<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mdrssevents extends CI_Model {

    var $id   	= 0;
    var $email 	= '';
    var $date  = '';

    function __construct(){
        parent::__construct();
    }
	
	function insert_record($data){
			
		$this->email 	= $data['email'];
		$this->date		= date("Y-m-d");
		
		$this->db->insert('rssevents',$this);
		return $this->db->insert_id();
	}
	
	function read_record($id){
		
		$this->db->where('id',$id);
		$query = $this->db->get('rssevents',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function read_records(){
		
		$query = $this->db->get('rssevents');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_field($id,$field){
			
		$this->db->where('id',$id);
		$query = $this->db->get('rssevents',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0][$field];
		return FALSE;
	}
	
	function delete_record($id){
	
		$this->db->where('id',$id);
		$this->db->delete('rssevents');
		return $this->db->affected_rows();
	}	
}