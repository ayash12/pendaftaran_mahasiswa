<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    // function __construct()
    // {
    //     parent::__construct();
      
    // }

	/**
	 *
	 */
	public function index()
	{
		$this->load->view('daftar');
	}

    public function save(){
		$data = array(
			'nama' => $_POST['nama'],
			'asalsekolah' => $_POST['asalsekolah'],
			'alamat' => $_POST['alamat'],
			'noHp' => $_POST['noHp'],
			'jurusanygdipilih' => $_POST['jurusanygdipilih'],
			'username' => $_POST['username'],
			'password' => MD5($_POST['password'])
		);
		$this->db->insert('T_Pendaftaran', $data);

		$sql = $this->db->where($data)->get("T_Pendaftaran")->row();



		$data_login = array(
		
			'username' => $_POST['username'],
			'password' => MD5($_POST['password']),
			'jabatan'  => '2',
			'status' => '1',
			'id_pendaftar' => $sql->id
		);
		$this->db->insert('T_Login', $data_login);

		redirect('/status');

	}
}