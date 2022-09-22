<?php

class Crudbarang extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('mo_barang');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login/masuk"));}
	}
	function kebarang(){
		$data['tb_barang'] = $this->mo_barang->tampil_data();
		$this->load->view('Vi_daftarbarang', $data);
	}

    function add(){
        $this->load->view('Vi_addbarang');
    }


    function save(){
            if($this->input->post('save')){
                $this->mo_barang->simpan();
                redirect('crudbarang/kebarang','refresh');
            }else{
            redirect('crudbarang/add','refresh');
        }
    }

    //function updatebarang ($id_barang)
   // {
    //    $data['tb_barang'] = $this->mo_barang->getbarang($id_barang);
    //    $this->load->view('Vi_editbarang',$data);
   // }

    function edit($id){
        $where = array('id_barang' => $id);
        $data['tb_barang'] = $this->mo_barang->edit_barang($where,'tb_barang')->result();
        $this->load->view('Vi_editbarang',$data);
    }

    function updatebarangDb()
    {
			$config['upload_path'] = './assets/gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '10000';
			$config['max_width']  = '102400';
			$config['max_height']  = '76800';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar')){
					$this->session->set_flashdata('pesan', $this->upload->display_errors());
					return false;
			}
			else {
				$id_barang = $this->input->post('id');
				$nb = $this->input->post('nb');
				$gb = $this->upload->data('file_name');
				$db = $this->input->post('db');
				$kb = $this->input->post('kb');
				$data = array(
						'nama_barang' => $nb,
						'gambar' => $gb,
						'deskripsi' => $db,
						'kondisi_barang' => $kb
						);
						$where = array (
		                    'id_barang'=>$id_barang
		                        );
						$this->mo_barang->updatebarang($where, $data, 'tb_barang');
						redirect('crudbarang/kebarang');
			}


    }

    function hapus($id)
    {
        $where = array ('id_barang'=>$id);
        $this->mo_barang->hapus_barang($where,'tb_barang');
        redirect('crudbarang/kebarang');
    }
}
