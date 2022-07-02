<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	/**
	 *
	 */
	public function index()
	{
		$this->load->view('login');
	}



	public function cek(){
 
		$data = array(
			'username' => $_POST['username'],
			'password' => MD5($_POST['password'])
		);
		$sql = $this->db->where($data)->get('T_Login')->row();

        if(!empty($sql)){
            $data_session =  array(

				'username' => $sql->username
				
			);
		
	
			  $this->session->set_userdata($data_session);
		
			$message = "pendaftaran";
        }else{

			$data_session = array(
				'error' => 'error',
			);

			$this->session->set_userdata($data_session);
			$message = "/";
		}
	
		 redirect($message);
	}

	public function logout(){

		$this->session->sess_destroy();

		redirect('/');
	}


	public function pendaftar_cek(){

		
		$data = array(
			'username' => $_POST['username'],
			'password' => MD5($_POST['password'])
		);



		$sql = $this->db->where($data)->get('T_Login')->row();


		echo print_r($sql->jabatan);

		if($sql->jabatan == 2){
			$data_session =  array(

				'id' => $sql->id_pendaftar
				
			);
		
	
			  $this->session->set_userdata($data_session);
			redirect('mahasiswa');
		}else{
			redirect('/');
		}

		// redirect('pendaftar');
	

	}
}