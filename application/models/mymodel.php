<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function Getkue(){
		$data = $this->db->query('select * from kue');
		return $data->result_array();
	}
	
	public function Insertdata($tabelname, $data){
		$res = $this->db->insert($tabelname, $data);
		return $res;
	}
}
