<?php

class Admin_model extends CI_Model{
	public function check_admin_login_info($email_address, $password){
		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('email_address',$email_address);
		$this->db->where('password',md5($password));
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
}

?>