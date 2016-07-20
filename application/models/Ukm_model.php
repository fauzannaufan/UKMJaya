<?php	

class Ukm_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('cookie');
	}

	public function proses_pendaftaran()
	{
		$data_ukm = array(
			'id_ukm' => get_cookie('user_id'),
			'sektor' => $this->input->post('sektor_usaha'),
			'subsektor' => $this->input->post('sub_sektor_usaha'),
			'jenis' => $this->input->post('jenis_usaha'),
			'bentuk' => $this->input->post('bentuk_usaha'),
			'jumlah_aset' => $this->input->post('jumlah_aset'),
			'jumlah_omzet' => $this->input->post('jumlah_omzet'),
			'alamat' => $this->input->post('alamat_usaha'),
			'desa_kel' => $this->input->post('desa_kel_usaha'),
			'kecamatan' => $this->input->post('kecamatan_usaha'),
			'kode_pos' => $this->input->post('kode_pos')
		);

		$this->db->insert('data_ukm', $data_ukm);
	}

	public function proses_pendaftaran_pemilik()
	{
		$data_pemilik = array(
			'id_ukm' => get_cookie('user_id'),
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'alamat_rt_rw' => $this->input->post('alamat'),
			'desa_kel' => $this->input->post('desa_kel'),
			'kecamatan' => $this->input->post('kecamatan'),
			'provinsi' => $this->input->post('provinsi'),
			'kab_kota' => $this->input->post('kab_kota'),
			'kode_pos' => $this->input->post('kode_pos'),
			'no_telepon' => $this->input->post('no_tlp'),
			'no_hp' => $this->input->post('no_hp')
		);

		$this->db->insert('data_pemilik_ukm', $data_pemilik);
	}


}

?>