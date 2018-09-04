<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin_model extends CI_Model {

	public function save_category_info(){
		$data= array();
		$data['category_name'] = $this->input->post('category_name',true);
		$data['category_description'] = $this->input->post('category_description',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$this->db->insert('tbl_category',$data);
	}

	public function select_all_published_category(){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$category_info = $query_result->result();
	
		return $category_info;
	}
	public function all_category_info(){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$query_result = $this->db->get();
		$category_info = $query_result->result();
	
		return $category_info;
	}


}


?>