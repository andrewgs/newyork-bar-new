<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mdfoods extends CI_Model{

	var $id   			= 0;
	var $title 			= '';
	var $weight  		= '';
	var $composition 	= '';
	var $price  		= 0;
	var $date 			= '';
	var $category 		= 0;
	
	function __construct(){
		parent::__construct();
	}
	
	function insert_record($data,$category){
			
		$this->title 		= htmlspecialchars($data['title']);
		$this->weight		= htmlspecialchars($data['weight']);
		$this->composition	= $data['composition'];
		$this->price		= $data['price'];
		$this->date			= date("Y-m-d");
		$this->category		= $category;
		
		$this->db->insert('foods',$this);
		return $this->db->insert_id();
	}

	function update_record($data){
			
		$this->db->set('title',htmlspecialchars($data['title']));
		$this->db->set('weight',htmlspecialchars($data['weight']));
		$this->db->set('composition',$data['composition']);
		$this->db->set('price',$data['price']);
		$this->db->where('id',$data['idf']);
		$this->db->update('foods');
		return $this->db->affected_rows();
	}
	
	function read_record($id){
		
		$this->db->where('id',$id);
		$query = $this->db->get('foods',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function read_records($cid){
		
		$this->db->where('category',$cid);
		$this->db->order_by('title','ASC');
		$query = $this->db->get('foods');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_all_records(){
		
		$this->db->order_by('title','ASC');
		$query = $this->db->get('foods');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_field($id,$field){
			
		$this->db->where('id',$id);
		$query = $this->db->get('foods',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0][$field];
		return FALSE;
	}
	
	function delete_record($id){
	
		$this->db->where('id',$id);
		$this->db->delete('foods');
		return $this->db->affected_rows();
	}	
	
	function delete_records($category){
	
		$this->db->where('category',$category);
		$this->db->delete('foods');
		return $this->db->affected_rows();
	}	
}