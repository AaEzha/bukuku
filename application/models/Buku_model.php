<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	// UBAH PASSWORD ANDA
	protected $pwd = "123456";

	public function hapus()
	{
		$d = $this->input->post();
		$id = htmlspecialchars($d['id']);
		$password = htmlspecialchars($d['password']);

		$where = [
			'id'=>$id
		];

		if($password==$this->pwd){
			return $this->db->delete('buku', $where);
		}else{
			return false;
		}
	}

	public function tambah()
	{
		$d = $this->input->post();
		$judul = htmlspecialchars($d['judul']);
		$topik = htmlspecialchars($d['topik']);
		$penulis = htmlspecialchars($d['penulis']);
		$penerbit = htmlspecialchars($d['penerbit']);
		$tahun = htmlspecialchars($d['tahun']);
		$isbn = htmlspecialchars($d['isbn']);
		$password = htmlspecialchars($d['password']);

		$penulis = $this->cekpenulis($penulis);
		$penerbit = $this->cekpenerbit($penerbit);
		$topik = $this->cektopik($topik);

		$data = [
			'judul' => $judul,
			'penulis' => $penulis,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'topik' => $topik,
			'isbn' => $isbn
		];

		if($password == $this->pwd){
			return $this->db->insert('buku', $data);
		}else{
			return false;
		}
		
	}

	public function ubah()
	{
		$d = $this->input->post();
		$id = htmlspecialchars($d['id']);
		$judul = htmlspecialchars($d['judul']);
		$topik = htmlspecialchars($d['topik']);
		$penulis = htmlspecialchars($d['penulis']);
		$penerbit = htmlspecialchars($d['penerbit']);
		$tahun = htmlspecialchars($d['tahun']);
		$isbn = htmlspecialchars($d['isbn']);
		$password = htmlspecialchars($d['password']);

		$penulis = $this->cekpenulis($penulis);
		$penerbit = $this->cekpenerbit($penerbit);
		$topik = $this->cektopik($topik);

		$data = [
			'judul' => $judul,
			'penulis' => $penulis,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'topik' => $topik,
			'isbn' => $isbn
		];

		$where = ['id'=>$id];

		if($password == $this->pwd){
			return $this->db->update('buku', $data, $where);
		}else{
			return false;
		}
		
	}

	public function ambil($id)
	{
		if($id){
			$query = "
						select b.id, b.judul, b.tahun, b.isbn,
							   p.nama as penerbit,
							   t.nama as penulis,
							   k.nama as topik
						from buku b 
						join penerbit p on p.id=b.penerbit
						join penulis t on t.id=b.penulis
						join topik k on k.id=b.topik
					 ";
			$this->db->where('id', $id);
			return $this->db->query($query)->row_array();
		}else{
			return false;
		}
	}

	public function filter($tabel,$id)
	{
		if($id){
			$query = "
						select b.id, b.judul, b.tahun, b.isbn,
							   p.id as idpenerbit, p.nama as penerbit, 
							   t.id as idpenulis, t.nama as penulis,
							   k.id as idtopik, k.nama as topik
						from buku b 
						join penerbit p on p.id=b.penerbit
						join penulis t on t.id=b.penulis
						join topik k on k.id=b.topik
						where $tabel = '$id'
					 ";
			#$this->db->where($tabel, $id);
			return $this->db->query($query)->result_array();
		}else{
			return false;
		}
	}

	public function cekpenulis($s)
	{
		$this->db->where('nama', $s);
		$query =  $this->db->get('penulis')->row_array();
		if($query){
			$s = $query['id'];
		}else{
			$this->db->insert('penulis', ['nama'=>$s]);
			$s = $this->db->insert_id();
		}
		return $s;
	}

	public function cekpenerbit($s)
	{
		$this->db->where('nama', $s);
		$query =  $this->db->get('penerbit')->row_array();
		if($query){
			$s = $query['id'];
		}else{
			$this->db->insert('penerbit', ['nama'=>$s]);
			$s = $this->db->insert_id();
		}
		return $s;
	}

	public function cektopik($s)
	{
		$this->db->where('nama', $s);
		$query =  $this->db->get('topik')->row_array();
		if($query){
			$s = $query['id'];
		}else{
			$this->db->insert('topik', ['nama'=>$s]);
			$s = $this->db->insert_id();
		}
		return $s;
	}

}

/* End of file Buku_model.php */
/* Location: ./application/models/Buku_model.php */