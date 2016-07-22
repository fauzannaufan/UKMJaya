<?php

class Funder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('url');
		//$this->load->helper('form');
		$this->load->model('data_model');
		$this->load->model('ukm_model');
	}

	public function danai_proposal($id_proposal=NULL)
	{
		if ($id_proposal === NULL) {
			show_404();
		} else {
			if (get_cookie('jenis_user') == 'ukm' || get_cookie('user_id') == NULL) {
				echo "Anda belum login atau anda tidak mendaftar sebagai Funder.<br>";
				echo "Silakan <a href='../../masuk'>Masuk</a> atau <a href='../../daftar'>Daftar</a> terlebih dahulu.";
			} else {
				$data_user = $this->data_model->get_user(get_cookie('user_id'));
				$data_proposal = $this->data_model->get_proposal($id_proposal);
				$id_ukm = $data_proposal->result_array()[0]['id_ukm'];

				$data['proposal'] = $data_proposal;
				$data['jenis_user'] = get_cookie('jenis_user');
				$data['ukm'] = $this->data_model->get_user($id_ukm)->result_array()[0]['nama'];
				$data['user'] = $data_user->result_array()[0]['nama'];
				$this->load->view('header-funder', $data);
				$this->load->view('danai-proposal', $data);
				$this->load->view('footer');
			}
		}
	}


}

?>