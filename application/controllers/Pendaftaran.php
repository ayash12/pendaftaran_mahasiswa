<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	// public function __construct(){

	// 	parent::__construct();
   
	// 	if(empty($_SESSION['username']) ) {
	// 	   $this->session->set_flashdata('flash_data', 'You don\'t have access!');
	// 	   return redirect('/');
	//    }
   
	// }

	public function __construct()
	{
		parent::__construct(); 
		if(empty($_SESSION['username'])){
			$this->session->set_flashdata('flash_data', 'you don\'t have access!');
			return redirect('/');
		}
		
	}

	 public function index()
	{

		$data = array(
			'page' => 'main',
			'data' => $this->db->get("T_Pendaftaran")->result()
		);
		$this->load->view('welcome_message', $data);
		// $this->load->view('welcome_message');
		
	}

	public function main()
	{

		$data = array(
			'page' => 'main',
			'data' => $this->db->get("T_Pendaftaran")->result()
		);
		$this->load->view('welcome_message', $data);
		
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
	}

	public function update_form($id){
		$data = array(
			'page' => 'update_form',
			'data' => $this->db->where('id', $id)->get('T_Pendaftaran')->row()
		);
			
		$this->load->view('welcome_message', $data);

	}


	public function update(){
		$id = $_POST['id'];
		$data = array(
			'nama' => $_POST['nama'],
			'asalsekolah' => $_POST['asalsekolah'],
			'alamat' => $_POST['alamat'],
			'noHp' => $_POST['no_hp'],
			'jurusanygdipilih' => $_POST['jurusan']
		);
		$this->db->set($data)->where('id',$id)->update('T_Pendaftaran');
		redirect('pendaftar');
	}

	public function delete($id){
	
		$this->db->where('id', $id)->delete('T_Pendaftaran');

		redirect('pendaftar');
	}
}
