<?php

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('data_model');
		$this->load->helper('cookie');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function daftar()
	{
		$this->load->helper('url');
		$data['list_provinsi'] = $this->data_model->get_list_provinsi();
		$this->load->view('header');
		$this->load->view('daftar', $data);
		$this->load->view('footer');
	}

	public function masuk()
	{
		$this->load->view('header');
		$this->load->view('masuk');
		$this->load->view('footer');	
	}

	public function keluar()
	{
		delete_cookie('user_id');
		delete_cookie('jenis_user');
		redirect('index.php', 'refresh');
	}

	public function proses_daftar()
	{
		$proses_sukses = $this->user_model->proses_daftar();
		if ($proses_sukses == '1') {
			echo "Akun berhasil dibuat. Silakan gunakan akun untuk <a href='../masuk'>masuk</a> ke UKMJaya";
		} else {
			echo "Gagal membuat akun. <a href='../daftar'>Kembali</a>";
		}
	}

	public function proses_masuk()
	{
		$user = $this->user_model->proses_masuk();
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

	public function danai_proposal()
	{
		
	}

}

?>