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

		function index(){
			$data = [ 'title' => 'Log In'];
			$this->load->view('bukutamu/side/heading.php', $data);
			$this->load->view('bukutamu/auth/login.php');
		}

		function login_akun(){
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$akun = $this->db->get_where('user', ['username' => $user])->row_array();

			
				$rules = $this->Authentication->rules();
				$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE){

			if ($akun) {
				if ($akun['username'] === $user && password_verify($pass, $akun['password'])) {
					$data_session = array(
					'nama' => $akun['username'], 
				);
				$this->session->set_userdata($data_session);
				$name = $this->session->userdata('nama');
				$this->load->helper('cookie');
				$cookie = array(
					'name' => 'user',
					'value' => $name,
					'expire' => '1300',
					'secure' => TRUE,
				);
				$this->input->set_cookie($cookie);
				return redirect('index.php/Fungsi/index');
				}else {
					$this->session->set_flashdata('eror', '<div class="alert alert-danger" role="alert"> Username Atau Password Salah! </div>');
					return $this->load->view('bukutamu/auth/login.php');
				
				}	
				}	

			} else {
				return $this->load->view('bukutamu/auth/login.php');
			} 

			redirect('index.php/Auth/index');
				
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('index.php/Auth/index');
		}

		function registrasi(){
			$this->load->view('bukutamu/auth/registrasi.php');
		}

		function registrasi_akun(){
			$rules = $this->Authentication->rules1();
				$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE){
			$email = $this->input->post('email');
			$user = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'gmail' => $email ,
				'username' => $user ,
				'password' => password_hash($password, PASSWORD_DEFAULT), 
			);

			$this->Authentication->tambah_akun($data, 'user');
			redirect("index.php/Auth/index");
		} else {
			$this->load->view('bukutamu/auth/registrasi.php');
		}
		}
	}
 ?>