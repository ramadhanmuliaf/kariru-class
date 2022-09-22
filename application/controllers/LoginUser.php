<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class LoginUser extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('Mo_login_user');
		}
		function masuk(){
			$this->load->view("Vi_login_user");

		}
		function login_validation()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
			'username' => $username,
			'password' => $password
			);
			$cek = $this->Mo_login_user->cek_login("tbl_user",$where)->num_rows();
			if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('/user');

			}else{
				echo "<script>alert('Username dan password salah!');history.go(-1);</script>";
			}
		}
		function keluar()
		{
			$this->session->sess_destroy();
			redirect('LoginUser/masuk');
		}
	}
