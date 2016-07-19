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
		$this->load->view('header');
		$this->load->view('masuk');
		$this->load->view('footer');	
	}

	public function proses()
	{
		$user = $this->masuk_model->proses();
		if ($user == 0) {
			echo "Gagal masuk ke akun. <a href='../masuk'>Kembali</a>";
		} else {
			if ($user[0]['id_funder'] == NULL) {
				set_cookie('user_id', $user[0]['id_ukm'], 3600, 'localhost');
				set_cookie('jenis_user', 'ukm', 3600, 'localhost');
			} else {
				set_cookie('user_id', $user[0]['id_funder'], 3600, 'localhost');
				set_cookie('jenis_user', 'funder', 3600, 'localhost');
			}
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