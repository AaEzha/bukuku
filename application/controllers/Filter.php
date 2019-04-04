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
			$data['konten'] = "filter/topikdata";
		}else{
			$data['topik'] = $this->filter->semuaTopik();
			$data['konten'] = "filter/topik";
		}

		$this->load->view('templates/index', $data);
	}

	public function penerbit($key='')
	{
		$data['title'] = "Cari berdasarkan ";
		$data['title'] .= "Nama Penerbit";

		if($key){
			$data['title'] .= " : ";
			$data['title'] .= $this->filter->namaPenerbit($key);
			$data['buku'] = $this->buku->filter('penerbit',$key);
			$data['konten'] = "filter/penerbitdata";
		}else{
			$data['penerbit'] = $this->filter->semuaPenerbit();
			$data['konten'] = "filter/penerbit";
		}

		$this->load->view('templates/index', $data);
	}

	public function penulis($key='')
	{
		$data['title'] = "Cari berdasarkan ";
		$data['title'] .= "Nama Penulis";

		if($key){
			$data['title'] .= " : ";
			$data['title'] .= $this->filter->namaPenulis($key);
			$data['buku'] = $this->buku->filter('penulis',$key);
			$data['konten'] = "filter/penulisdata";
		}else{
			$data['penulis'] = $this->filter->semuaPenulis();
			$data['konten'] = "filter/penulis";
		}

		$this->load->view('templates/index', $data);
	}

	public function tahun($key='')
	{
		$data['title'] = "Cari berdasarkan ";
		$data['title'] .= "Tahun Terbit";

		if($key){
			$data['title'] .= " : ";
			$data['title'] .= $key;
			$data['buku'] = $this->buku->filter('tahun',$key);
			$data['konten'] = "filter/penulisdata";
		}else{
			$data['tahun'] = $this->filter->semuaTahun();
			$data['konten'] = "filter/tahun";
		}

		$this->load->view('templates/index', $data);
	}

}

/* End of file Filter.php */
/* Location: ./application/controllers/Filter.php */