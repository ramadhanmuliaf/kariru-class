<?php

class Mo_login_user extends CI_Model{	
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}
