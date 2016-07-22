<?php	

class Ukm_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('cookie');
		$this->load->helper('string');
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

	public function proses_proposal()
	{

		$id_proposal = random_string('numeric', 15);

		$data_proposal = array(
			'id_proposal' => $id_proposal,
			'id_ukm' => get_cookie('user_id'),
			'kebutuhan_dana' => $this->input->post('kebutuhan_dana'),
			'konten' => $this->input->post('alasan'),
			'batas_waktu' => $this->input->post('batas_waktu')
		);

		$this->db->insert('proposal', $data_proposal);

		$jenis = $this->input->post('jenis');
		foreach ($this->input->post('jumlah') as $key => $j) {
			$data_hadiah = array(
				'id_hadiah' => random_string('numeric', 17),
				'id_proposal' => $id_proposal,
				'hadiah' => $jenis[$key],
				'minimal_pinjaman' => $j
			);

			$this->db->insert('hadiah_proposal', $data_hadiah);
		}
	}


}

?>