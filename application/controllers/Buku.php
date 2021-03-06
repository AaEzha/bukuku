<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_model','buku');
	}

	public function semua()
	{
		$this->load->model('Dashboard_model', 'dashboard');
		$data['buku'] = $this->dashboard->semua();
	}

	public function index()
	{
		$data['title'] = 'Tambah Buku';

		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('judul', 'Judul Buku', 'trim|required');
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
		$this->form_validation->set_rules('tahun', 'Tahun Terbit', 'trim|required|min_length[4]|max_length[4]');
		$this->form_validation->set_rules('isbn', 'ISBN', 'trim|required|is_unique[buku.isbn]');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');

		if($this->form_validation->run() == true){
			$query = $this->buku->tambah();
			if($query){
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah!</div>');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambah!</div>');
			}
			redirect('buku','refresh');	
		}else{
			$data['konten'] = "buku/index";
			$this->load->view('templates/index', $data);
		}
	}

	public function data()
	{
		$data['title'] = "Manajemen Data Buku";
		$this->load->model('Dashboard_model', 'dashboard');
		$data['buku'] = $this->dashboard->semua();
		$data['konten'] = "buku/data";
		$this->load->view('templates/index', $data);
	}

	public function hapus()
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('id', 'ID', 'trim|required');

		if($this->form_validation->run() == true){
			$query = $this->buku->hapus();

			if($query){
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal dihapus!</div>');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal dihapus!</div>');
		}
		redirect('buku/data');
	}

	public function edit($id=null)
	{
		if($id){
			$data['title'] = "Ubah Data Buku";
			$data['buku'] = $this->buku->ambil($id);
			$data['konten'] = "buku/edit";
			$this->load->view('templates/index', $data);
		}else{
			$this->form_validation->set_rules('id', 'ID', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('judul', 'Judul Buku', 'trim|required');
			$this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
			$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
			$this->form_validation->set_rules('tahun', 'Tahun Terbit', 'trim|required|min_length[4]|max_length[4]');
			$this->form_validation->set_rules('isbn', 'ISBN', 'trim|required');
			$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');

			if($this->form_validation->run() == true){
				$query = $this->buku->ubah();
				if($query){
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
			}

			redirect('buku/data','refresh');	
		}
	}

	public function topik_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->buku->get_autocomplete($_GET['term'], 'topik');
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama;
                echo json_encode($arr_result);
            }
        }
    }

	public function penerbit_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->buku->get_autocomplete($_GET['term'], 'penerbit');
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama;
                echo json_encode($arr_result);
            }
        }
    }

	public function penulis_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->buku->get_autocomplete($_GET['term'], 'penulis');
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama;
                echo json_encode($arr_result);
            }
        }
    }

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */