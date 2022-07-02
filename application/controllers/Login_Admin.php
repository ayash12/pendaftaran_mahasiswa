<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Admin extends CI_Controller {

    // function __construct()
    // {
    //     parent::__construct();
      
    // }

	/**
	 *
	 */
	public function index()
	{
		$this->load->view('login_admin');
	}



	public function cek(){
 
		$data = array(
			'username' => $_POST['username'],
			'password' => MD5($_POST['password'])
		);
		$sql = $this->db->where($data)->get('T_Login')->row();

        if($sql->jabatan == 1){
            $data_session =  array(

				'username' => $sql->username
				
			);
		
	
			  $this->session->set_userdata($data_session);
		
			$message = "pendaftar";
        }else{

			$data_session = array(
				'error' => 'error',
			);

			$this->session->set_userdata($data_session);
			$message = "/";
		}
	
		 redirect($message);
	}

	// public function logout(){

	// 	$this->session->sess_destroy();

	// 	redirect('/');
	// }
}