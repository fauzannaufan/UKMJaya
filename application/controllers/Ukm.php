<?php

class Ukm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('ukm_model');
		$this->load->model('data_model');
	}

	public function buat_proposal()
	{
		if (get_cookie('user_id') == NULL || get_cookie('jenis_user') == 'funder') {
			echo "Anda tidak bisa membuat proposal.<br>";
			echo "Silakan <a href='../masuk'>Masuk</a> atau <a href='../daftar'>Daftar</a> terlebih dahulu.";
		} else {
			$this->load->model('data_model');
			$data_user = $this->data_model->get_user(get_cookie('user_id'));
			$data['user'] = $data_user->result_array()[0]['nama'];
			$this->load->view('header-ukm', $data);
			$this->load->view('buat-proposal');
			$this->load->view('footer');
		}
		
	}

	public function daftar()
	{
		if (get_cookie('user_id') == NULL || get_cookie('jenis_user') == 'funder') {
			echo "Anda belum login atau anda tidak mendaftar sebagai UKM.<br>";
			echo "Silakan <a href='../masuk'>Masuk</a> atau <a href='../daftar'>Daftar</a> terlebih dahulu.";
		} else {
			$data_user = $this->data_model->get_user(get_cookie('user_id'));
			$data['user'] = $data_user->result_array()[0]['nama'];
			$data['list_sektor'] = $this->data_model->get_list_sektor();
			$data['list_bentuk_usaha'] = $this->data_model->get_bentuk_usaha();
			$this->load->view('header-ukm', $data);
			$this->load->view('daftar-ukm', $data);
			$this->load->view('footer');
		}
	}

	public function daftar_pemilik()
	{
		if (get_cookie('user_id') == NULL || get_cookie('jenis_user') == 'funder') {
			echo "Anda belum login atau anda tidak mendaftar sebagai UKM.<br>";
			echo "Silakan <a href='../masuk'>Masuk</a> atau <a href='../daftar'>Daftar</a> terlebih dahulu.";
		} else {
			$data_user = $this->data_model->get_user(get_cookie('user_id'));
			$data['user'] = $data_user->result_array()[0]['nama'];
			$data['list_provinsi'] = $this->data_model->get_list_provinsi();
			$this->load->view('header-ukm', $data);
			$this->load->view('daftar-pemilik-ukm', $data);
			$this->load->view('footer');
		}
	}

	public function proses_pendaftaran()
	{
		if (get_cookie('user_id') == NULL || get_cookie('jenis_user') == 'funder') {
			echo "Anda belum login atau anda tidak mendaftar sebagai UKM.<br>";
			echo "Silakan <a href='../masuk'>Masuk</a> atau <a href='../daftar'>Daftar</a> terlebih dahulu.";
		} else {
			$this->ukm_model->proses_pendaftaran();
			redirect('ukm/daftar_pemilik', 'refresh');
		}
	}

	public function proses_pendaftaran_pemilik()
	{
		if (get_cookie('user_id') == NULL || get_cookie('jenis_user') == 'funder') {
			echo "Anda belum login atau anda tidak mendaftar sebagai UKM.<br>";
			echo "Silakan <a href='../masuk'>Masuk</a> atau <a href='../daftar'>Daftar</a> terlebih dahulu.";
		} else {
			$this->ukm_model->proses_pendaftaran_pemilik();
			redirect('index.php', 'refresh');
		}
	}

	public function proses_proposal()
	{
		if (get_cookie('user_id') == NULL || get_cookie('jenis_user') == 'funder') {
			echo "Anda belum login atau anda tidak mendaftar sebagai UKM.<br>";
			echo "Silakan <a href='../masuk'>Masuk</a> atau <a href='../daftar'>Daftar</a> terlebih dahulu.";
		} else {
			$this->ukm_model->proses_proposal();
			redirect('index.php', 'refresh');
		}
	}

}

?>