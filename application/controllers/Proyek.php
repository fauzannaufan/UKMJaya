<?php

class Proyek extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->model('proyek_model');
	}

	public function buat()
	{
		if (get_cookie('user_id') == NULL || get_cookie('jenis_user') == 'funder') {
			echo "Anda tidak bisa membuat proyek.<br>";
			echo "Silakan <a href='../masuk'>Masuk</a> atau <a href='../daftar'>Daftar</a> terlebih dahulu.";
		} else {
			$this->load->model('data_model');
			$data_user = $this->data_model->get_user(get_cookie('user_id'));
			$data['user'] = $data_user->result_array()[0]['nama'];
			$this->load->view('header-ukm', $data);
			$this->load->view('buat-proyek');
			$this->load->view('footer');
		}
		
	}

}

?>