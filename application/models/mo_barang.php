<?php

class Mo_barang extends CI_Model{

    private $_table = "tb_barang";

	function tampil_data()
    {
		return $this->db->get($this->_table)->result();
	}

    function simpan()
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
              $sql_masuk=$this->db->insert('tb_barang',$data);
              return $sql_masuk;
        }
    }

   // function getBarang($id)
    //{
    //    $this->db->where('id_barang',$id);
    //    $this->db->select("*");
    //    $this->db->from("tb_barang");
    //    return $this->db->get();
    //}

    function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }
    function updatebarang($where,$data,$table)
    {
       $this->db->where($where);
       $this->db->update ('tb_barang',$data);
    }

    function hapus_barang($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }


}
