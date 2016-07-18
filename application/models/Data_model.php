<?php	

class Data_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_list_provinsi()
	{
		return $this->db->get('data_provinsi');
	}

	public function get_list_kab_kota($id_provinsi=NULL)
	{
		if ($id_provinsi === NULL) {
			return $this->db->get('data_kab_kota');
		} else {
			$this->db->where('id_provinsi', $id_provinsi);

			$query = $this->db->get('data_kab_kota');
			$list_kota = array();

			if ($query->result()) {
				foreach($query->result() as $kota) {
					$list_kota[$kota->id] = $kota->nama;
				}
				return $list_kota;
			} else {
				return false;
			}
		}
	}

	public function get_user($id_user=NULL) {
		if ($id_user == NULL) {
			return $this->db->get('user');
		} else {
			$this->db->where('id_user', $id_user);
			return $this->db->get('user');
		}
	}

}

?>