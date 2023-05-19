<?php 
	/**
	 * 
	 */
	class Authentication extends CI_Model
	{	
		function password($user){
			return $this->db->query("SELECT password FROM user WHERE username = '$user' ");
		}

		function cek_login($data, $table){
			return $this->db->get_where($table, $data);
		}

		function tambah_akun($data, $table){
			$this->db->insert($table, $data);
		}
	}
 ?>