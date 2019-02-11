<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){
        $this->load->view('pages-signin');
    }

    public function process(){
        $user = $this->input->post('user');
        $password = $this->input->post('password');

        if ($user = "Khafid" && $password = "123"){
            $this->session->set_userdata(array('user'=>$user));
            $this->load->view('index');
        }
    }
}

?>