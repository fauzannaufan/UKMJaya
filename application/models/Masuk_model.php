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

		$query = $this->db->query("SELECT funder.id_user AS id_funder, ukm.id_user AS id_ukm FROM user LEFT JOIN ukm ON user.id_user = ukm.id_user LEFT JOIN funder ON user.id_user = funder.id_user WHERE email = '".$email."' AND password = '".$password."'");

		$hasil = $query->result_array();
		
		if (count($hasil) > 0) {
			return $hasil;
		} else {
			return 0;
		}
	}

}

?>