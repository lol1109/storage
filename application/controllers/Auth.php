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
			$this->load->model('Conection');
			$this->load->model('Rules');
		}

		function index(){
			$data = [ 'title' => 'Log In'];
			$this->load->view('bukutamu/side/heading.php', $data);
			$this->load->view('bukutamu/auth/login.php');
		}

		function login_akun(){
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$akun = $this->db->get_where('petugas', ['username' => $user])->row_array();

			$rules = $this->Rules->rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE){

			if ($akun) {
				if ($akun && password_verify($pass, $akun['password'])) {
					$data_session = array(
					'nama' => $akun['username'], 
					'cabang' => $akun['id_cabang'],
					'akses' => $akun['akses'],
				);
				$this->session->set_userdata($data_session);
				$name = $this->session->userdata('nama');
				$this->load->helper('cookie');
				$cookie = array(
					'name' => 'user',
					'value' => $name,
					'expire' => '30000',
					'secure' => TRUE,
				);
				$this->input->set_cookie($cookie);
				return redirect('Fungsi/index');
				}
				else {
					$this->session->set_flashdata('eror', '<div class="alert alert-danger" role="alert"> Username Atau Password Salah! </div>');
					$data = [ 'title' => 'Log In'];
					$this->load->view('bukutamu/side/heading.php', $data);
					return $this->load->view('bukutamu/auth/login.php');
				
				}	
				}
				else {
					$this->session->set_flashdata('eror', '<div class="alert alert-danger" role="alert"> Username Atau Password Salah! </div>');
					$data = [ 'title' => 'Log In'];
					$this->load->view('bukutamu/side/heading.php', $data);
					return $this->load->view('bukutamu/auth/login.php');
				}

			} else {
				$data = [ 'title' => 'Log In'];
				$this->load->view('bukutamu/side/heading.php', $data);
				return $this->load->view('bukutamu/auth/login.php');
			} 

			redirect('Auth/index');
				
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('Auth/index');
		}

		function registrasi(){
			$data['title'] = 'Registrasi';
			$data['cabang'] = $this->Conection->cabang()->result();
			$this->load->view('bukutamu/auth/registrasi.php', $data);
		}

		function registrasi_akun(){
			$rules = $this->Rules->rules1();
				$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE){

			$email = $this->input->post('nama_petugas');
			$user = $this->input->post('username');
			$password = $this->input->post('password');
			$cabang = $this->input->post('cabang');
			$akun = $this->db->get_where('petugas', ['username' => $user])->row_array();
			if ($akun['username'] == $user) {
				$this->session->set_flashdata('eror', '<div class="alert alert-danger" role="alert"> Username telah ada! </div>');
				$data['title'] = 'Registrasi';
				$data['cabang'] = $this->Conection->cabang()->result();
				return $this->load->view('bukutamu/auth/registrasi.php', $data);
			} 

			$data = array(
				'nama_petugas' => $email ,
				'username' => $user ,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'id_cabang' => $cabang
			);

			$this->Authentication->tambah_akun($data, 'petugas');
			
		} else {
			$data['title'] = 'Registrasi';
			$data['cabang'] = $this->Conection->cabang()->result();
			$this->load->view('bukutamu/auth/registrasi.php', $data);
		}
		}

		function fgpass(){
			$data['title'] = 'Forgot Password';
			$this->load->view('bukutamu/auth/forgotpassword.php', $data);
		}

		function forgotpassword(){
		
		}
}
 ?>