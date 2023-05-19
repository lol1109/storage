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
		}

		public function data(){
			$data = [
			'petugas' => $this->Conection->petugas()->result(),
		];

		$this->load->view('bukutamu/side/heading.php');
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/data/data_petugas.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_petugas(){
		$data = [
			'cabang' => $this->Conection->cabang()->result(),
		];

		$this->load->view('bukutamu/side/heading.php');
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/tambah/insert_petugas.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_data_petugas(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$id_cabang = $this->input->post('id_cabang');

		$data = array(
			'nama_petugas' => $nama,
			'username' => $username,
			'password' => $pass,
			'id_cabang' => $id_cabang,
		);

		$this->Conection->tambah_data($data, 'petugas');
		redirect('index.php/Petugas/data');
	}

	public function hapus_petugas($id){
		$data = array('id_petugas' => $id);
		$this->Conection->hapus_data($data, 'petugas');
		redirect('index.php/Petugas/data');
	}

	public function Edit($id){
		$where = array('id_petugas' => $id, );
		$data = array( 
			'tamu' => $this->Conection->Edit_data($where, 'petugas')->result(),
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
		);
		$this->load->view('bukutamu/side/heading.php');
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
			'password' => $pass,
			'id_cabang' => $id_cabang,
		);

		$where = array(
			'id_petugas' => $id,
		);

		$this->Conection->ubah_data($where, $data, 'petugas');
		redirect('index.php/Petugas/data');
	}

	}
 ?>