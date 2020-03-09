<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function signin()
	{
		$this->load->view('pages-signin');
	}

	public function signup()
	{
		$this->load->view('pages-signup');
	}

	public function calendar()
	{
		$this->load->view('pages-calendar');
	}

	public function invoice()
	{
		$this->load->view('pages-invoice');
	}

	public function locscreen()
	{
		$this->load->view('pages-loack-screen');
	}

	public function profile()
	{
		$this->load->view('pages-user-profile');
	}

	public function tabel()
	{
		$this->load->view('tables-editable');
	}
}
