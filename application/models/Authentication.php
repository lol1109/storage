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

		function rules(){
			return[
				[
					'field' => 'username',
					'label' => 'username',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'password',
					'label' => 'password',
					'rules' => 'required|max_length[255]|min_length[3]',
				],
			];
		}

		function rules1(){
			return[
				[
					'field' => 'email',
					'label' => 'email',
					'rules' => 'required|max_length[100]|min_length[5]|valid_email',
				],
				[
					'field' => 'username',
					'label' => 'username',
					'rules' => 'required|max_length[100]|min_length[4]',
				],
				[
					'field' => 'password',
					'label' => 'password',
					'rules' => 'required|max_length[255]|min_length[3]',
				],
			];
		}
	}
 ?>