<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Crude extends CI_Model{	
    
    private $_table = "admin";
    public $id;
    public $name;
    public $username;
    public $pass;
    
    public function rule(){
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($username)
    {
        return $this->db->get_where($this->_table, ["username" => $username])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = $post[""];
        $this->name = $post["name"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post[""];
        $this->name = $post["name"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        return $this->db->update($this->_table, $this, array('username' => $post['username']));
    }

    public function delete($username)
    {
        return $this->db->delete($this->_table, array("username" => $username));
    }
}
}