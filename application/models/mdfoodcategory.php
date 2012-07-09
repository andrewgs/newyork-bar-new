<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mdfoodcategory extends CI_Model{

	var $id		= 0;
	var $uri	= 0;
	var $title 	= '';
	var $image  = '';
	var $date 	= '';
	
	function __construct(){
		parent::__construct();
	}
	
	function insert_record($data){
			
		$this->title 	= htmlspecialchars($data['title']);
		$this->uri 		= $data['uri'];
		$this->image	= "";
		$this->date		= date("Y-m-d");
		
		$this->db->insert('foodcategory',$this);
		return $this->db->insert_id();
	}
	
	function read_record($id){
		
		$this->db->where('id',$id);
		$query = $this->db->get('foodcategory',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function read_records(){

		$query = $this->db->get('foodcategory');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_field($id,$field){
			
		$this->db->where('id',$id);
		$query = $this->db->get('foodcategory',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0][$field];
		return FALSE;
	}
	
	function delete_record($id){
	
		$this->db->where('id',$id);
		$this->db->delete('foodcategory');
		return $this->db->affected_rows();
	}
	
	function search_category($field,$value){
		
		$this->db->where($field,$value);
		$query = $this->db->get('foodcategory',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
}