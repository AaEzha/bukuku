<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/header');
$this->load->view('templates/sidebar');
$this->load->view('templates/topbar');
$this->load->view($konten);
$this->load->view('templates/footer');