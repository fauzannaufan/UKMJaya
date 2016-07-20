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

	public function get_user($id_user=NULL)
	{
		if ($id_user == NULL) {
			return $this->db->get('user');
		} else {
			$this->db->where('id_user', $id_user);
			return $this->db->get('user');
		}
	}

	public function check_ukm($id_ukm)
	{
		return $this->db->query("SELECT (SELECT COUNT(*) FROM data_ukm WHERE id_ukm = ".$id_ukm.") AS ada_data_ukm, (SELECT COUNT(*) FROM data_pemilik_ukm WHERE id_ukm = ".$id_ukm.") AS ada_data_pemilik FROM dual");
	}

	public function get_list_sektor()
	{
		return $this->db->get('data_sektor');
	}

	public function get_sub_sektor($id_sektor)
	{
		$this->db->where('id_sektor', $id_sektor);

		$query = $this->db->get('data_sub_sektor');
		$list_sub_sektor = array();

		if ($query->result()) {
			foreach($query->result() as $subsektor) {
				$list_sub_sektor[$subsektor->id] = $subsektor->nama;
			}
			return $list_sub_sektor;
		} else {
			return false;
		}
	}

	public function get_bentuk_usaha()
	{
		return $this->db->get('data_bentuk_usaha');
	}

}

?>