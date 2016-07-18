<?php

class Daftar_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('string');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function proses()
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

}

?>