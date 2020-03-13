<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ccrude extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mcrude");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['admin'] = $this->mcrude->getAll();
        $data['user'] = $this->session->userdata('nama');
        $this->load->view("tables-basic", $data);
    }
    
    function hapus($id){
		$where = array('id' => $id);
		$this->mcrude->delete($where,'admin');
		redirect('ccrude');
    }
    
    function tambah(){
        $data['user'] = $this->session->userdata('nama');
        $this->load->view('padd',$data);
	}
 
	function tambah_aksi(){
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$data = array(
			'name' => $name,
			'username' => $username,
			'password' => $password
			);
		$this->mcrude->input_data($data,'admin');
		redirect('ccrude');
    }
    
    function edit(){
        //$id = $this->session->dedit;
        $id = "10";
        $where = array('id' => '10');
        
        $data['user'] = $this->session->userdata('nama');
		$data['usere'] = $this->mcrude->edit_data($where,'admin')->result();
		$this->load->view('pedit',$data);
	}

}
