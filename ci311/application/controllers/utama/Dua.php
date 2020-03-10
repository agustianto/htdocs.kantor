<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dua extends CI_Controller {

	public function index()
	{
		$this->load->view('per_2');
	}

	public function msatu()
	{
		$this->load->view('per_1');
	}

	public function mdua()
	{
		$this->load->view('per_2');
	}
}
