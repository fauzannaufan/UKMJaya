<?php

class Masuk extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header-biasa');
		$this->load->view('masuk');
		$this->load->view('footer');	
	}

}

?>