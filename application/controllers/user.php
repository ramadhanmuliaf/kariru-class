<?php

class User extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(site_url("LoginUser/masuk")); //jika tidak login dan diback dari browser akan tetap pada vi_login
		}
	}

	function index(){
		$this->load->view('pinjambarang');
	}
}
