<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsi extends CI_Controller {

	function  __construct(){
		parent::__construct();
		$this->load->model('Conection');
		$this->load->model('Rules');
		$this->load->library('encryption');
		$key = $this->encryption->initialize(
			array(
				'chiper' => 'aes-128',
				'mode' => 'ctr',
				'key' => 'qw43ertyuiopl52mnbvcxzasdfghjk19',
			)
		);
	}

	public function index()
		{
		$akses = $this->session->userdata('akses');
		

		if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'tamu' => $this->Conection->tampil_data_join()->result(),
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'hasil3' => $this->Conection->tampil_jumlah_semua_bulanA()->num_rows(),
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/data/data.php', $data);
		$this->load->view('bukutamu/side/footer.php');    
		} else {

		$cabang = $this->session->userdata('cabang');
		$data = [
			'title' => 'Data Tamu',
			'tamu' => $this->Conection->tampil_data_join_petugas($cabang)->result(),
			'hasil' =>  $this->Conection->tampil_jumlah_property_c($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_c($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan_c($cabang)->num_rows(),
			'hasil3' => $this->Conection->tampil_jumlah_semua_bulan($cabang)->num_rows(),
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/data/data.php', $data);
		$this->load->view('bukutamu/side/footer.php');                                                                             
		// $this->load->view('bukutamu/data.php', $jumlahproperty);
		}
	}

	public function tambah(){

		$data = [
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
			'title' => 'Tambah Data',
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/tambah/insert.php', $data);
		$this->load->view('bukutamu/side/footer.php');
	}

	public function tambah_data(){

		$rules = $this->Rules->rules5();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() === TRUE) {
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
		redirect('Fungsi/index');
		} 

		else {
			$data = [
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
			'title' => 'Tambah Data',
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		return $this->load->view('bukutamu/tambah/insert.php', $data);
		$this->load->view('bukutamu/side/footer.php');
		}
		redirect('Fungsi/index');
		
	}   

	public function hapus($id){
		$decrypt = $this->encryption->decrypt($id);
		$data = array('id_tamu' => $decrypt);
		$this->Conection->hapus_data($data, 'tamu');
		redirect('Fungsi/index');
	}

	public function Edit($id){
		$decrypt = $this->encryption->decrypt($id);
		$where = array('id_tamu' => $decrypt);
		$data = array( 
			'tamu' => $this->Conection->Edit_data($where, 'tamu')->result(),
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
			'title' => 'Edit Data',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/ubah/change.php', $data);
		$this->load->view('bukutamu/side/footer.php');
		}

	public function Ubah($tamu){

		$rules = $this->Rules->rules2();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() === TRUE) {
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
		redirect('Fungsi/index');
		} else {
			$where = array('id_tamu' => $tamu, );
			$data = array( 
			'tamu' => $this->Conection->Edit_data($where, 'tamu')->result(),
			'cabang' => $this->Conection->cabang()->result(),
			'petugas' => $this->Conection->petugas()->result(),
			'title' => 'Ubah Data',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/ubah/change.php', $data);
		$this->load->view('bukutamu/side/footer.php');
		}
	}

	function error(){
			$this->load->view('bukutamu/side/error.php');
		}

	function cetak_pdf(){
		$cabang = $this->session->userdata('cabang');

		$data = array(
			'tamu' => $this->Conection->tampil_data_join_petugas($cabang)->result(),
		);

		$this->load->library('Pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->load_view('bukutamu/delete', $data);
	}

		function test1(){
			$this->load->view('bukutamu/test.php');
		}

		function test() {
        	$nama = $this->input->post("Nama");
        	$kontak = $this->input->post("Kontak");

        	$this->form_validation->set_rules('Nama', 'Nama', 'required|max_length[25]|min_length[5]');
        	$this->form_validation->set_rules('Kontak', 'Kontak', 'required|max_length[15]|min_length[10]|is_unique[tamu.Kontak]' ,array(
                'required'      => 'kamu harus mengisi ini',
                'is_unique'     => 'nomor ini sudah terdaftar di database kami.'
        ));

        	if ($this->form_validation->run() == FALSE) {
        		$this->load->view('bukutamu/test.php');
        	} else {
        		$data = array(
				'tamu' => "berhasil",
				);
        		$this->load->view('bukutamu/test.php', $data);
        	}
    	}
}

?>