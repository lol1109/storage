<?php 
	/**
	 * 
	 */
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Authentication');
		}

		function login(){
			$this->load->view('bukutamu/auth/login.php');
		}

		function login_akun(){
			$user = $this->input->post('username');
			$pass = $this->input->post('password');

			$akun = $this->db->get_where('user', ['username' => $user])->row_array();

			if ($akun) {
				if (password_verify($pass, $akun['password'])) {
					$data_session = array(
					'nama' => $akun['username'], 
				);
				$this->session->set_userdata($data_session);
				redirect('index.php/Fungsi/index');
				}
				
			}	
				if ($this->input->post('login')) {
					$this->session->set_flashdata('masage', ' <div class="alert alert-danger">Username Atau Password Salah!</div>');
					redirect('index.php/Auth');
				}
				redirect('index.php/Auth/login');
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('index.php/Auth/login');
		}

		function registrasi(){
			$this->load->view('bukutamu/auth/registrasi.php');
		}

		function registrasi_akun(){
			$gmail = $this->input->post('gmail');
			$user = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'gmail' => $gmail ,
				'username' => $user ,
				'password' => password_hash($password, PASSWORD_DEFAULT), 
			);

			$this->Authentication->tambah_akun($data, 'user');
			redirect("index.php/Auth/login");
		}
	}
 ?>