<?php

class Masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('masuk_model');
		$this->load->helper('cookie');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('header-biasa');
		$this->load->view('masuk');
		$this->load->view('footer');	
	}

	public function proses()
	{
		$user_id = $this->masuk_model->proses();
		if ($user_id == 0) {
			echo "Gagal masuk ke akun. <a href='../masuk'>Kembali</a>";
		} else {
			set_cookie('user_id', $user_id, 3600, 'localhost');
			redirect('index.php', 'refresh');
		}
	}

	public function logout()
	{
		delete_cookie('user_id');
		redirect('index.php', 'refresh');
	}

}

?>