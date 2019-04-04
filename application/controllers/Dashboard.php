<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model','dashboard');
	}

	public function index()
	{
		$data['title'] = 'Rak Buku';
		$data['buku'] = $this->dashboard->semua();
		$data['konten'] = "dashboard/index";
		$this->load->view('templates/index', $data);
		
		
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */