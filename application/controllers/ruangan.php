<?php

class ruangan extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('mo_ruangan');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("LoginUser/masuk"));}
	}
	function keruang(){
		$data['tb_barang'] = $this->mo_ruangan->tampil_data();
		$this->load->view('daftarbarang', $data);
	}

}
