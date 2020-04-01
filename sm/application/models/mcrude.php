<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mcrude extends CI_Model{	
    
    private $_table = "admin";

    public $id;
    public $name;
    public $username;
    public $password;
    
    public function rules(){
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

    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["id" => $id])->row();
    // }

    function delete($where,$table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }
    
    function input_data($data,$table)
    {
		  $this->db->insert($table,$data);
    }
    
    function edit_data($where,$table)
    {		
		  return $this->db->get_where($table,$where)->result();
	  }
 
    function update_data($where,$data,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }	
        
}