<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data = array();
		$data['main_content'] = $this->load->view('pages/home_content','',true);
		$this->load->view('master',$data);
	}

	public function checkout(){
		$data = array();
		$data['main_content']= $this->load->view('pages/checkout','',true);

		$this->load->view('master',$data);
	}

}