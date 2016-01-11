<?php

class API extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

	} 

	public function searchkue($kue){
		$data = $this->db->like('nama',$kue)->get('kue')->result_array();
		echo json_encode($data);
	}

	public function listkue(){
		$data=$this->db->get('kue')->result_array();
		echo json_encode($data);
	}

	public function listjenis(){
		$data=$this->db->get('jenis')->result_array();
		echo json_encode($data);
	}

	public function listbahan($idkue){
		$data['bahan']=$this->db
		->where('kue',$idkue)
		->from('bahan__kue')	
		->join('bahan','bahan.id = bahan__kue.bahan')
		->get()
		->result_array();

		echo json_encode($data);
	}

}

?>