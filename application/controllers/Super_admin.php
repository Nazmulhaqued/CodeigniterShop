<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Super_admin extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('Super_admin_model');
}


public function index(){
	$data = array();
	$data['admin_main_content'] = $this->load->view('admin/pages/dashboard','',true);
	$this->load->view('admin/admin_master', $data);
}

public function add_category(){
	$data = array();
	$data['admin_main_content'] = $this->load->view('admin/pages/add_category','',true);
	$this->load->view('admin/admin_master',$data);
}

public function save_category(){
	$this->Super_admin_model->save_category_info();
	$sdata = array();
	$sdata['message'] = "Save Category Information successfully !";
	$this->session->set_userdata($sdata);
	redirect('/add-category');
}

public function manage_category(){
	$data = array();
	$data['all_category_info'] = $this->Super_admin_model->all_category_info();
	$data['admin_main_content'] = $this->load->view('admin/pages/manage_category', $data,true);
	$this->load->view('admin/admin_master',$data);
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