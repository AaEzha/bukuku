<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter_model extends CI_Model {

	public function semuaTopik()
	{
		return $this->db->get('topik')->result_array();
	}

	public function namaTopik($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('topik')->row_array();
		return $query['nama'];
	}

	public function semuaPenerbit()
	{
		return $this->db->get('penerbit')->result_array();
	}

	public function namaPenerbit($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('penerbit')->row_array();
		return $query['nama'];
	}

	public function semuaPenulis()
	{
		return $this->db->get('penulis')->result_array();
	}

	public function namaPenulis($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('penulis')->row_array();
		return $query['nama'];
	}

	public function semuaTahun()
	{
		$query = "select distinct tahun from buku";
		return $this->db->query($query)->result_array();
	}

	public function namaTahun($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('penulis')->row_array();
		return $query['nama'];
	}

}

/* End of file Filter_model.php */
/* Location: ./application/models/Filter_model.php */