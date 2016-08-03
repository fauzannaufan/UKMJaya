<?php	

class Funder_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function proses_pendanaan($id_funder)
	{

		$data_dana = array(
			'id_funder' => $id_funder,
			'id_proposal' => $this->input->post('id_proposal'),
			'jumlah' => $this->input->post('jumlah'),
			'waktu_pendanaan' => date('Y-m-d H:i:s'),
			'id_hadiah' => $this->input->post('pilihan_hadiah')
		);

		$this->db->insert('dana', $data_dana);
	}

}

?>