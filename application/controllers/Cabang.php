<?php 
	/**
	 * 
	 */
	class Cabang extends CI_Controller
	{
		function  __construct(){
		parent::__construct();
		$this->load->model('Conection');
		$this->load->model('Rules');
		
	}

	public function data(){
		$data = [
			'cabang' => $this->Conection->cabang()->result(),
			'title' => 'Data Cabang',
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/data/data_cabang.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_cabang(){
			$data['title'] = 'Tambah Cabang';
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/tambah/insert_cabang.php');
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_data_cabang(){
		$rules = $this->Rules->rules3();
		$this->form_validation->set_rules($rules);

	if ($this->form_validation->run() === TRUE) {
		$nama = $this->input->post('Nama');
		$Kontak = $this->input->post('Kontak');

		$data = array(
			'nama_cabang' => $nama,
			'kontak' => $Kontak,
		);

		$this->Conection->tambah_data($data, 'cabang');
		redirect('Cabang/data');
	} else {
		$data['title'] = 'Tambah Cabang';
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/tambah/insert_cabang.php');
		$this->load->view('bukutamu/side/footer.php');
	}

	}   

	public function hapus_cabang($id){
		$data = array('id_cabang' => $id);
		$this->Conection->hapus_data($data, 'cabang');
		redirect('Cabang/data');
	}

	public function Edit($id){
		$where = array('id_cabang' => $id, );
		$data = array( 
			'tamu' => $this->Conection->Edit_data($where, 'cabang')->result(),
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
		);
		$data1['title'] = 'Edit Cabang';
		$this->load->view('bukutamu/side/heading.php', $data1);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/ubah/change_cabang.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function Ubah(){
		$id = $this->input->post('id_cabang');
		$nama = $this->input->post('Nama');
		$Kontak = $this->input->post('Kontak');

		$data = array(
			'nama_cabang' => $nama,
			'kontak' => $Kontak,
		);

		$where = array(
			'id_cabang' => $id,
		);

		$this->Conection->ubah_data($where, $data, 'cabang');
		redirect('Cabang/data');
	}

	}
 ?>