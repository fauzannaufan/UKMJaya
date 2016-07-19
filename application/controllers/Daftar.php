<?php

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
		$this->load->model('data_model');
		$this->load->helper('cookie');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->helper('url');
		$data['list_provinsi'] = $this->data_model->get_list_provinsi();
		$this->load->view('header');
		$this->load->view('daftar', $data);
		$this->load->view('footer');
	}

	public function proses()
	{
		$proses_sukses = $this->daftar_model->proses();
		if ($proses_sukses == '1') {
			echo "Akun berhasil dibuat. Silakan gunakan akun untuk <a href='../masuk'>masuk</a> ke UKMJaya";
		} else {
			echo "Gagal membuat akun. <a href='../daftar'>Kembali</a>";
		}
	}

}

?>