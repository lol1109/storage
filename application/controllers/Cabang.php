<?php 
	/**
	 * 
	 */
	class Cabang extends CI_Controller
	{
		function  __construct(){
		parent::__construct();
		$this->load->model('Conection');
	}

	public function data(){
			$data = [
			'cabang' => $this->Conection->cabang()->result(),
		];

		$this->load->view('bukutamu/side/heading.php');
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/data/data_cabang.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_cabang(){

		$this->load->view('bukutamu/side/heading.php');
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/tambah/insert_cabang.php');
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_data_cabang(){
		$nama = $this->input->post('Nama');
		$Kontak = $this->input->post('Kontak');

		$data = array(
			'nama_cabang' => $nama,
			'kontak' => $Kontak,
		);

		$this->Conection->tambah_data($data, 'cabang');
		redirect('index.php/Cabang/data');
	}   

	public function hapus_cabang($id){
		$data = array('id_cabang' => $id);
		$this->Conection->hapus_data($data, 'cabang');
		redirect('index.php/Cabang/data');
	}

	}
 ?>