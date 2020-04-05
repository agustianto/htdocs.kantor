<?php 
class Covid_model extends CI_Model {
    function getAll(){
		$this->db->select('*');
        $this->db->from('data');
        $query = $this->db->get();
        return $query;
    }

    function history($id,$table){
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        return $query;
    }

    function get($id,$table)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        return $query->result_array();
    }
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}
?>