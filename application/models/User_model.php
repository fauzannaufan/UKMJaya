<?php

class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('string');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function proses_daftar()
	{
		$password = $this->input->post('password');
		$c_password = $this->input->post('c_password');
		$jenis_user = $this->input->post('jenis_user');
		$id_user = random_string('numeric', 7);

		if ($password == $c_password) {
			
			$data_user = array(
				'id_user' => $id_user,
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'password'=> $password,
				'kab_kota' => $this->input->post('kab_kota'),
				'provinsi' => $this->input->post('provinsi'),
				'waktu_join' => date('Y-m-d H:i:s'),
				'is_banned' => 0
			);

			$this->db->insert('user', $data_user);

			$data_jenis_user = array(
				'id_user' => $id_user
			);

			if ($jenis_user == 'ukm') {
				$this->db->insert('ukm', $data_jenis_user);
			} else {
				$this->db->insert('funder', $data_jenis_user);
			}

			return true;
		} else {
			return false;
		}
	}

	public function proses_masuk()
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