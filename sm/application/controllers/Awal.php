<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	// public function signin()
	// {
	// 	$this->load->view('pages-signin');
	// }

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
}
