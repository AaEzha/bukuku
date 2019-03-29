<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fullname
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function cek()
	{
		$cek = $this->ci->db->get_where('anggota', ['username'=>$this->ci->session->userdata('username')])->row_array();
		if( (is_null($cek['fullname'])) or (!$cek['fullname']) ){
			redirect('dashboard/fullname');
		}
	}

	

}

/* End of file fullname.php */
/* Location: ./application/libraries/fullname.php */
