<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct(); 
		// if(empty($_SESSION['username'])){
		// 	$this->session->set_flashdata('flash_data', 'you don\'t have access!');
		// 	return redirect('/');
		// }
		
	}

	 public function index()
	{
		$id = $_SESSION['id'];
		$data = array(
			'page' => 'mahasiswa',
			'data' => $this->db->where('id', $id)->get("T_Pendaftaran")->row()
		);
		$this->load->view('welcome_message', $data);
		// $this->load->view('welcome_message');
		
	}

}
