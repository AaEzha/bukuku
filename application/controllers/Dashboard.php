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

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer', $data);
		
		
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */