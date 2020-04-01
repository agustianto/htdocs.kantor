<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mcrude");
        $this->load->library('form_validation');
    }

    public function index()
    {
        //$where = array('id' => $id);
            
        $data['user'] = $this->session->userdata('nama');
		//$data['admin'] = $this->mcrude->delete($where,'admin')->result();
		$this->load->view('pedit',$data);
    }

    
    public function edit($id)
    {
        $where = array('id' => $id);
            
        $data['user'] = $this->session->userdata('nama');
		$data['admin'] = $this->mcrude->delete($where,'admin');
		$this->load->view('pedit',$data);
    }
    
    function update(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
     
        $data = array(
            'name' => $name,
            'username' => $username,
            'password' => $password
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->m_data->update_data($where,$data,'admin');
        redirect('ccrude');
    }

}
