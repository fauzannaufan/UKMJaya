<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->model('data_model');

		if (get_cookie('user_id') == NULL) {
			$this->load->view('header');
			$this->load->view('index');
		} else {
			$data_user = $this->data_model->get_user(get_cookie('user_id'));
			$data['user'] = $data_user->result_array()[0]['nama'];
			if (get_cookie('jenis_user') == 'ukm') {
				$this->load->view('header-ukm', $data);
				$check_user = $this->data_model->check_ukm(get_cookie('user_id'));
				if ($check_user->result_array()[0]['ada_data_ukm'] == 0 && $check_user->result_array()[0]['ada_data_pemilik'] == 0 ) {
					$this->load->view('index-ukm-baru');
				} else {
					$this->load->view('index-ukm');
				}
			} else {
				$this->load->view('header-funder', $data);
				$this->load->view('index');
			}
		}
		$this->load->view('footer');
	}

}
