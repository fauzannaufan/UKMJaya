<?php

class Masuk_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function proses()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->db->select('id_user');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->from('user');
		$query = $this->db->get();

		$hasil = $query->result_array();
		
		if (count($hasil) > 0) {
			return $hasil[0]['id_user'];
		} else {
			return 0;
		}
	}

}

?>