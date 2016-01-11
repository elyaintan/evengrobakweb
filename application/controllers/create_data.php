<?php

class Create_data extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

	} 

	public function index(){
		$data = $this->mymodel->Getkue(); 
		$this->load->view('tables',array('data' => $data));
	}

	public function tambah_data(){
		echo "tambah data bos";
	}
}

?>