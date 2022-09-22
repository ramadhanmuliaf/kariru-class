<?php

class mo_ruangan extends CI_Model{

    private $_table = "tb_barang";

	function tampil_data()
    {
		return $this->db->get($this->_table)->result();
	}

}
