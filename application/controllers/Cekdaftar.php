<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekdaftar extends CI_Controller {

    // function __construct()
    // {
    //     parent::__construct();
      
    // }

	/**
	 *
	 */
	public function index()
	{
		$this->load->view('cekstatusdaftar');
	}

	public function hasil()
	{
		$no = $_POST['no'];
		$data = array(
			'data' => $this->db->query("SELECT * FROM T_Pendaftaran a LEFT JOIN T_Login b ON a.id = b.id_pendaftar where a.noHp='$no'")->row()
		);

		
		$this->load->view('cekstatusdaftars', $data);
	}
	
}