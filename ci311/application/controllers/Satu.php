<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satu extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Mahasiswa");
    }

	public function index()
	{
		$data['nama'] = "Khafid";
		$data['alamat'] = "Ponorogo";

		$coba['data'] = [["nama" => "A"], ["nama" => "B"]];

		$coba2['data'] = $this->Mahasiswa->get_data();

		$this->load->view('per_1',$coba2);
	}

	public function msatu()
	{
		$this->load->view('per_2');
	}

	public function mdua()
	{
		$this->load->view('per_2');
	}
}
