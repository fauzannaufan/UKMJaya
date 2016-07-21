<?php

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model');
	}

	public function index() {
	}

	public function get_list_kab_kota($id_provinsi) {
		header('Content-Type: application/x-json; charset=utf-8');
		echo(json_encode($this->data_model->get_list_kab_kota($id_provinsi)));
	}

	public function get_user($id_user) {
		header('Content-Type: application/x-json; charset=utf-8');
		echo(json_encode($this->data_model->get_user($id_user)));
	}

	public function get_sub_sektor($id_sektor) {
		header('Content-Type: application/x-json; charset=utf-8');
		echo(json_encode($this->data_model->get_sub_sektor($id_sektor)));
	}

}

?>