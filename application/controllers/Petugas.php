<?php 
	/**
	 * 
	 */
	class Petugas extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Conection');
			$this->load->model('Aturan');
		}

		public function data(){
			$akses = $this->session->userdata('akses');

			
			$data = [
			'petugas' => $this->Conection->petugas()->result(),
			'title' => 'Data Petugas',
		];

		if ($akses == "admin") {
			$this->load->view('bukutamu/side/heading.php', $data);
			$this->load->view('bukutamu/side/navbar.php');
			$this->load->view('bukutamu/data/data_petugas.php', $data);
			$this->load->view('bukutamu/side/footer.php');
			} else {
				$this->load->view('bukutamu/side/akses.php');
			}
	}

	public function tambah_petugas(){
		$data = [
			'cabang' => $this->Conection->cabang()->result(),
			'title' => 'Tambah Petugas',
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/tambah/insert_petugas.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_data_petugas(){
		$rules = $this->Aturan->rules4();
		$this->form_validation->set_rules($rules);

	if ($this->form_validation->run() === TRUE) {
		$nama = $this->input->post('Nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$id_cabang = $this->input->post('id_cabang');

		$data = array(
			'nama_petugas' => $nama,
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'id_cabang' => $id_cabang,
		);

		$this->Conection->tambah_data($data, 'petugas');
		redirect('index.php/Petugas/data');
	} else {
		$data = [
			'cabang' => $this->Conection->cabang()->result(),
			'title' => 'Tambah Petugas',
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/tambah/insert_petugas.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}
	}

	public function hapus_petugas($id){
		$data = array('id_petugas' => $id);
		$this->Conection->hapus_data($data, 'petugas');
		redirect('Petugas/data');
	}

	public function Edit($id){
		$where = array('id_petugas' => $id, );
		$data = array( 
			'tamu' => $this->Conection->Edit_data($where, 'petugas')->result(),
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
			'title' => 'Edit Petugas',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/ubah/change_petugas.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function Ubah(){
		$id = $this->input->post('id_petugas');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$id_cabang = $this->input->post('id_cabang');

		$data = array(
			'nama_petugas' => $nama,
			'username' => $username,
			'password' => password_hash($pass, PASSWORD_DEFAULT),
			'id_cabang' => $id_cabang,
		);

		$where = array(
			'id_petugas' => $id,
		);

		$this->Conection->ubah_data($where, $data, 'petugas');
		redirect('Petugas/data');
	}

	}
 ?>