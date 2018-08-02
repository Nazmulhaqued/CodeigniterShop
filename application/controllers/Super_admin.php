<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Super_admin extends CI_Controller {

public function index(){
	$this->load->view('admin/admin_master');
}

public function logout(){
	$this->session->unset_userdata('admin_id');
	$this->session->unset_userdata('admin_name');
	$sdata = array();
	$sdata['message']="You asre successfully logout";
	$this->session->set_userdata($sdata);
	redirect('abcd');
}

}