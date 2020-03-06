<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			//redirect(base_url("pages-signin"));
			$this->load->view('signin');
		}
	}

	function load(){
		$this->load->view('home');
	}
}