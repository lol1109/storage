<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsi extends CI_Controller {

	function  __construct(){
		parent::__construct();
		$this->load->model('Conection');
	}

	public function index()
	{

		$data = [

			'tamu' => $this->Conection->tampil_data_join()->result(),
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'notif' => $this->Conection->data_baru()->result(),
		];

		$this->load->view('bukutamu/side/heading.php');
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/data/data.php', $data);
		$this->load->view('bukutamu/side/footer.php');
		// $this->load->view('bukutamu/data.php', $jumlahproperty);
	}

	public function tambah(){

		$data = [
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
		];

		$this->load->view('bukutamu/side/heading.php');
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/tambah/insert.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_data(){
		$nama = $this->input->post('Nama');
		$Kontak = $this->input->post('Kontak');
		$noWa = $this->input->post('noWa');
		$Bidang = $this->input->post('Bidang');
		$Tujuan = $this->input->post('Tujuan');
		$JenisInformasi = $this->input->post('JenisInformasi');
		$Informasi = $this->input->post('Informasi');
		$cabang = $this->input->post('cabang');
		$petugas = $this->input->post('petugas');
		$Kesimpulan = $this->input->post('Kesimpulan');
		$tanggal = $this->input->post('tanggal');


		$data = array(
			'Nama' => $nama,
			'Kontak' => $Kontak,
			'noWa' => $noWa,
			'Bidang' => $Bidang,
			'Tujuan' => $Tujuan,
			'JenisInformasi' => $JenisInformasi,
			'Informasi' => $Informasi,
			'Kesimpulan' => $Kesimpulan,
			'cabang' => $cabang,
			'petugas' => $petugas,
			'tanggal' => $tanggal,
		);

		$this->Conection->tambah_data($data, 'tamu');
		redirect('index.php/Fungsi/index');
	}   

	public function hapus($id){
		$data = array('id_tamu' => $id);
		$this->Conection->hapus_data($data, 'tamu');
		redirect('index.php/Fungsi/index');
	}

	public function Edit($id){
		$where = array('id_tamu' => $id, );
		$data = array( 
			'tamu' => $this->Conection->Edit_data($where, 'tamu')->result(),
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
		);
		$this->load->view('bukutamu/side/heading.php');
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/ubah/change.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function Ubah(){
		$id = $this->input->post('id_tamu');
		$nama = $this->input->post('Nama');
		$Kontak = $this->input->post('Kontak');
		$noWa = $this->input->post('noWa');
		$Bidang = $this->input->post('Bidang');
		$Tujuan = $this->input->post('Tujuan');
		$JenisInformasi = $this->input->post('JenisInformasi');
		$Informasi = $this->input->post('Informasi');
		$cabang = $this->input->post('cabang');
		$petugas = $this->input->post('petugas');
		$Kesimpulan = $this->input->post('Kesimpulan');

		$data = array(
			'Nama' => $nama,
			'Kontak' => $Kontak,
			'noWa' => $noWa,
			'Bidang' => $Bidang,
			'Tujuan' => $Tujuan,
			'JenisInformasi' => $JenisInformasi,
			'Informasi' => $Informasi,
			'cabang' => $cabang,
			'petugas' => $petugas,
			'Kesimpulan' => $Kesimpulan,
		);

		$where = array(
			'id_tamu' => $id,
		);

		$this->Conection->ubah_data($where, $data, 'tamu');
		redirect('index.php/Fungsi/index');
	}
}