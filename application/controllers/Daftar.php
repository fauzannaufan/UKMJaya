<?php

class Daftar extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header-biasa');
		$this->load->view('daftar');
		$this->load->view('footer');	
	}

}

?>