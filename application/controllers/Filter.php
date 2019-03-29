<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Filter_model','filter');
		$this->load->model('Buku_model','buku');
	}

	public function index()
	{
		redirect('dashboard','refresh');
	}

	public function topik($key='')
	{
		$data['title'] = "Cari berdasarkan ";
		$data['title'] .= "Topik Buku";

		if($key){
			$data['title'] .= " : ";
			$data['title'] .= $this->filter->namaTopik($key);
			$data['buku'] = $this->buku->filter('topik',$key);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('filter/topikdata', $data);
			$this->load->view('templates/footer', $data);
		}else{
			$data['topik'] = $this->filter->semuaTopik();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('filter/topik', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function penerbit($key='')
	{
		$data['title'] = "Cari berdasarkan ";
		$data['title'] .= "Nama Penerbit";

		if($key){
			$data['title'] .= " : ";
			$data['title'] .= $this->filter->namaPenerbit($key);
			$data['buku'] = $this->buku->filter('penerbit',$key);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('filter/penerbitdata', $data);
			$this->load->view('templates/footer', $data);
		}else{
			$data['penerbit'] = $this->filter->semuaPenerbit();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('filter/penerbit', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function penulis($key='')
	{
		$data['title'] = "Cari berdasarkan ";
		$data['title'] .= "Nama Penulis";

		if($key){
			$data['title'] .= " : ";
			$data['title'] .= $this->filter->namaPenulis($key);
			$data['buku'] = $this->buku->filter('penulis',$key);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('filter/penulisdata', $data);
			$this->load->view('templates/footer', $data);
		}else{
			$data['penulis'] = $this->filter->semuaPenulis();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('filter/penulis', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function tahun($key='')
	{
		$data['title'] = "Cari berdasarkan ";
		$data['title'] .= "Tahun Terbit";

		if($key){
			$data['title'] .= " : ";
			$data['title'] .= $key;
			$data['buku'] = $this->buku->filter('tahun',$key);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('filter/penulisdata', $data);
			$this->load->view('templates/footer', $data);
		}else{
			$data['tahun'] = $this->filter->semuaTahun();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('filter/tahun', $data);
			$this->load->view('templates/footer', $data);
		}
	}

}

/* End of file Filter.php */
/* Location: ./application/controllers/Filter.php */