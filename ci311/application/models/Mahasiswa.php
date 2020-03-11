<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Model{

	public function get_data(){
		$coba = [["nama" => "A"], ["nama" => "B"]];
		return $coba;
	}

}	