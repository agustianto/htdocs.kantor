<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ccrude extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mcrude");
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $data["admin"] = $this->crude->getAll();
        $this->load->view("tables-editable", $data);
    }

    public function add()
    {
        $product = $this->crude;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/product/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->crude;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->crude->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}
