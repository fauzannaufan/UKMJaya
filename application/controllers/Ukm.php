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

	public function lihat_proposal($id_proposal=NULL)
	{
		if ($id_proposal === NULL) {
			show_404();
		} else {
			$data_user = $this->data_model->get_user(get_cookie('user_id'));
			$data_proposal = $this->data_model->get_proposal($id_proposal);
			$id_ukm = $data_proposal->result_array()[0]['id_ukm'];

			$data['user'] = $data_user->result_array()[0]['nama'];
			$data['proposal'] = $data_proposal;
			$data['ukm'] = $this->data_model->get_user($id_ukm)->result_array()[0]['nama'];
			$data['pendanaan'] = $this->data_model->get_pendanaan($id_proposal)->result_array()[0];
			if (get_cookie('jenis_user') == 'ukm') {
				$this->load->view('header-ukm', $data);
			} else if (get_cookie('jenis_user') == 'funder') {
				$this->load->view('header-funder', $data);
			} else {
				$this->load->view('header');
			}
			$this->load->view('lihat-proposal', $data);
			$this->load->view('footer');
		}
	}

}

?>