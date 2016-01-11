<?php

class Site extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

	} 

	public function index(){
		$this->load->view('index');
	}
	public function charts(){
		$this->load->view('charts');
	}
	public function bootstrap_elements(){
		$this->load->view('bootstrap-elements');
	}
	public function formtambahdata(){
		$this->load->view('formtambahdata');
	}

}

?>