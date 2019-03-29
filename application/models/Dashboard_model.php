<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function semua()
	{
		$query = "select b.id, b.judul, b.tahun, p.id as penerbit, p.nama from buku b join penerbit p on p.id=b.penerbit where b.aktif='1'";
		return $this->db->query($query)->result_array();
		
		#$this->db->where(['aktif'=>'1']);
		#return $this->db->get('buku')->result_array();
	}

	public function simpan()
	{
		$post = $this->input->post();
		$fullname = htmlspecialchars($post['fullname']);
		$username = $this->session->userdata('username');

		# update tabel anggota
		$data = [
			'fullname' => $fullname
		];
		$where = [
			'username' => $username
		];
		$this->db->update('anggota', $data, $where);

		# update tabel guru
		$data = [
			'nama_guru' => $fullname
		];
		$where = [
			'id' => $this->session->userdata('idguru')
		];
		$this->db->update('guru', $data, $where);
	}

}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */