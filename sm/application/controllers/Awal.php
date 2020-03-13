<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('mcrude');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->session->userdata('nama');
		$this->load->view('home',$data);
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
		$data['user'] = $this->session->userdata('nama');
		$data['admin'] = $this->mcrude->getAll();
		$this->load->view('tables-basic',$data);
	}

	public function add()
    {
		$data['user'] = $this->session->userdata('nama');
		$uji = $this->mcrude;
        $validation = $this->form_validation;
        $validation->set_rules($uji->rules());

        if ($validation->run()) {
            $uji->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view('tables-add',$data);
    }

	public function tabeledit()
	{
		$data['user'] = $this->session->userdata('nama');
		// $this->load->view('tables-edit',$data);


		if (!isset($username)) redirect('tabel');
       
        $uji = $this->mcrude;
        $validation = $this->form_validation;
        $validation->set_rules($uji->rules());

        if ($validation->run()) {
            $uji->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["uji"] = $uji->getById($username);
        if (!$data["uji"]) show_404();
        
		$this->load->view("tabels-edit", $data);
		
	}
}
