<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsi extends CI_Controller {

	function  __construct(){
		parent::__construct();
		if ($this->session->userdata('nama') === NULL) {
				redirect('Auth');
			}
		$this->load->model('Conection');
		$this->load->model('Aturan');
		$this->load->helper('url');
		$this->load->model('Aturan');
		$this->load->library('form_validation');
		$this->load->library('image_lib');
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

		$rules = $this->Aturan->rules5();
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
		redirect('admin');
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
		redirect('admin');
		
	}   

	public function hapus($id){
		$decrypt = base64_decode($id);
		$data = array('id_tamu' => $decrypt);
		$this->Conection->hapus_data($data, 'tamu');
		redirect('admin');
	}

	public function delate($id){
		$decrypt = base64_decode($id);
		$id = array('id_tamu' => $decrypt);
		$this->Conection->deleted($id['id_tamu']);
		redirect('admin');
	}

	public function Edit($id){
			$decrypt =  base64_decode($id);
    try {
      $cek = $this->db->get_where('tamu', ['id_tamu' => $decrypt])->row();
      if (!$cek || is_numeric($id)) {
        throw new Exception("ID Tidak Ditemukan");
      }
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
    } catch (Exception $e) {
      $error_message = 'Terjadi kesalahan: ' . $e->getMessage();
          $data = [
            'error' => $error_message,
          ];
          $this->load->view('bukutamu/side/errorA.php', $data);
    } 
		}

		

	public function Ubah($tamu){

		$rules = $this->Aturan->rules2();
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
		redirect('admin');
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

		function back(){
			$data = [
				'title' => 'Data Landing Page',
				'home' => $this->Conection->tampil_home1()->result(),
				'akad' => $this->Conection->tampil_akad_l()->result(),
				'syarat' => $this->Conection->tampil_syarat1()->result(),
				'tahapan' => $this->Conection->tampil_tahapan()->result(),
				'tanya' => $this->Conection->tampil_tanya()->result(),
			];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/back.php', $data);
		$this->load->view('bukutamu/side/footer.php');
			
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

    	function uploadImage(){
    		$data = [
			'title' => 'Upload Image',
			'tamu' => $this->Conection->tampil_data_tamu()->result(),
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/index.php', $data);
		$this->load->view('bukutamu/side/footer.php');
    	}

    	function upload(){
    		$nama = $this->input->post('Nama');
    		$merek = $this->input->post('merek');
 			$tanggal = $this->input->post('tanggal');

    		$rules = $this->Aturan->rules6();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {

    		
    		$config['upload_path'] = FCPATH.'upload/akad/';
        	$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = 2000;
        	$config['overwrite'] = TRUE;

    		$this->load->library('upload', $config);

    		if (!$this->upload->do_upload('gambar')) {
    			$data = [
				'title' => 'Upload Image',
				'eror' => $this->upload->display_errors(),
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/index.php', $data);
				$this->load->view('bukutamu/side/footer.php');

    		}
    		else 
        {	
        	
        	$where = array(
        		'nama' => $nama, 
        		'merek' => $merek, 
        		'tanggal' => $tanggal,
        		'gambar' => $this->upload->data(), 
        	);

    			$this->Conection->tambah_data_akad($where['nama'], $where['merek'], $where['tanggal'], $where['gambar']);
    			redirect('landing-page');
        }
    		} else {
    			$data = [
				'title' => 'Upload Image',
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/index.php', $data);
				$this->load->view('bukutamu/side/footer.php');
    		}
    	}

    	function akad(){
    			$data = [
				'title' => 'Data Akad',
				'akad' => $this->Conection->tampil_akad_l()->result(),
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

			$this->load->view('bukutamu/side/heading.php', $data);
			$this->load->view('bukutamu/side/navbar.php');
			$this->load->view('bukutamu/back/hasil.php', $data);
			$this->load->view('bukutamu/side/footer.php');
    	}

    	public function hapus_akad($id){
		$data = array('id' => $id);
		$this->Conection->hapus_data($data, 'akad');
		redirect('landing-page');
		}

		public function edit_akad($id){
		$decrypt =  base64_decode($id);
    		try {
      			$cek = $this->db->get_where('akad', ['id' => $decrypt])->row();
      		if (!$cek || is_numeric($id)) {
        		throw new Exception("ID Tidak Ditemukan");
      		}

		$where = array('id' => $decrypt);
		$data = array( 
			'akad' =>$this->Conection->Edit_data($where, 'akad')->result(),
			'tamu' => $this->Conection->tampil_data_tamu()->result(),
			'title' => 'Edit Data Akad',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/update.php', $data);
		$this->load->view('bukutamu/side/footer.php');
			} catch (Exception $e) {
				$error_message = 'Terjadi kesalahan: ' . $e->getMessage();
        	$data = [
        		'error' => $error_message,
        	];
        	$this->load->view('bukutamu/side/errorA.php', $data);
			}
		$decrypt =  base64_decode($id);
		$where = array('id' => $decrypt);
		$data = array( 
			'akad' =>$this->Conection->Edit_data($where, 'akad')->result(),
			'tamu' => $this->Conection->tampil_data_tamu()->result(),
			'title' => 'Edit Data Akad',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/update.php', $data);
		$this->load->view('bukutamu/side/footer.php');
		}


		public function ubah_akad($ubah){
		$decrypt =  base64_decode($ubah);
		$where = array('id' => $decrypt);
		$id = $this->input->post('id');
		$nama = $this->input->post('Nama');
    	$merek = $this->input->post('merek');
 		$tanggal = $this->input->post('tanggal');

 			$rules = $this->Aturan->rules6();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {

			$config['upload_path'] = FCPATH.'upload/akad/';
        	$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = 2000;
        	$config['overwrite'] = TRUE;

    		$this->load->library('upload', $config);

    		if (!$this->upload->do_upload('gambar')) {
    			$data = [
				'akad' =>$this->Conection->Edit_data($where, 'akad')->result(),
				'title' => 'Edit Data Akad',
				'eror' => $this->upload->display_errors(),
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/update.php', $data);
				$this->load->view('bukutamu/side/footer.php');

    		} else {

		$data = array(	
			'id' => $id,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'merek' => $merek,
			'gambar' => $this->upload->data(),
		);


		$this->Conection->ubah_data_akad($data['id'], $data['nama'], $data['tanggal'], $data['merek'],$data['gambar']);
		redirect('landing-page');
		}
		} else {
			$data = [
				'akad' =>$this->Conection->Edit_data($where, 'akad')->result(),
				'title' => 'Edit Data Akad',
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/update.php', $data);
				$this->load->view('bukutamu/side/footer.php');
		}

	}

	function datahome(){
    			$data = [
				'title' => 'Data Home',
				'home' => $this->Conection->tampil_home()->result(),
			];

			$this->load->view('bukutamu/side/heading.php', $data);
			$this->load->view('bukutamu/side/navbar.php');
			$this->load->view('bukutamu/back/h_home.php', $data);
			$this->load->view('bukutamu/side/footer.php');
    	}

    	function tm_home(){
    		$data = [
			'title' => 'Tambah Data Home',
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/t_home.php', $data);
		$this->load->view('bukutamu/side/footer.php');
    	}

    function tambah_home(){

    		$judul = $this->input->post('judul');
    		$desc = $this->input->post('desc');
 			$action = $this->input->post('action');

 			$rules = $this->Aturan->rules7();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {

    		
    		$config['upload_path'] = FCPATH.'upload/home/';
        	$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = 2000;

    		$this->load->library('upload', $config);

    		if (!$this->upload->do_upload('gambar')) {
    			$data = [
				'title' => 'Upload Image',
				'eror' => $this->upload->display_errors(),
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/t_home.php', $data);
				$this->load->view('bukutamu/side/footer.php');

    		} else 
        {	
        	
        	$data1 = array(
        		'judul_besar' => $judul, 
        		'desc' => $desc, 
        		'action' => $action,
        		'gambar' => $this->upload->data(), 
        	);

    			$this->Conection->tambah_data_home($data1['judul_besar'], $data1['desc'], $data1['action'], $data1['gambar']);
    			redirect('landing-page');
        }
    	} else {
    		$data = [
				'title' => 'Upload Image',
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/t_home.php', $data);
				$this->load->view('bukutamu/side/footer.php');
    	}
    	}

    	public function hapus_home($id){
		$data = array('id' => $id);
		$this->Conection->hapus_data($data, 'home');
		redirect('landing-page');
		}

		public function edit_home($id){
			$decrypt =  base64_decode($id);
    try {
      $cek = $this->db->get_where('home', ['id' => $decrypt])->row();
      if (!$cek || is_numeric($id)) {
        throw new Exception("ID Tidak Ditemukan");
      }
      $where = array('id' => $decrypt);
		$data = array( 
			'home' =>$this->Conection->Edit_data($where, 'home')->result(),
			'title' => 'Edit Data home',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/u_home.php', $data);
		$this->load->view('bukutamu/side/footer.php');
      
    } catch (Exception $e) {
      $error_message = 'Terjadi kesalahan: ' . $e->getMessage();
          $data = [
            'error' => $error_message,
          ];
          $this->load->view('bukutamu/side/errorA.php', $data);
    }
		
		}

    	public function ubah_home($ubah){
		$decrypt =  base64_decode($ubah);
		$where = array('id' => $decrypt);
		$id = $this->input->post('id');
			$judul = $this->input->post('judul');
    		$desc = $this->input->post('desc');
 			$action = $this->input->post('action');

 			$rules = $this->Aturan->rules7();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {

			$config['upload_path'] = FCPATH.'upload/home/';
        	$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = 2000;

    		$this->load->library('upload', $config);

    		if (!$this->upload->do_upload('gambar')) {
    			$data = [
				'home' =>$this->Conection->Edit_data($where, 'home')->result(),
				'title' => 'Edit Data home',
				'eror' => $this->upload->display_errors(),
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/u_home.php', $data);
				$this->load->view('bukutamu/side/footer.php');

    		} else {

		$data1 = array(
				'id' => $id,
        		'judul_besar' => $judul, 
        		'desc' => $desc, 
        		'action' => $action,
        		'gambar' => $this->upload->data(), 
        	);



		$this->Conection->ubah_data_home($data1['id'], $data1['judul_besar'], $data1['desc'], $data1['action'], $data1['gambar']);
		redirect('landing-page');
	}
	} else {
		    	$data = [
				'home' =>$this->Conection->Edit_data($where, 'home')->result(),
				'title' => 'Edit Data home',
				'tamu' => $this->Conection->tampil_data_tamu()->result(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/u_home.php', $data);
				$this->load->view('bukutamu/side/footer.php');
	}

	}

	function datasyarat(){
    			$data = [
				'title' => 'Data Syarat',
				'syarat' => $this->Conection->tampil_syarat()->result(),
			];

			$this->load->view('bukutamu/side/heading.php', $data);
			$this->load->view('bukutamu/side/navbar.php');
			$this->load->view('bukutamu/back/h_syarat.php', $data);
			$this->load->view('bukutamu/side/footer.php');
    	}

    	function tm_syarat(){
    		$data = [
			'title' => 'Tambah Data syarat',
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/t_syarat.php', $data);
		$this->load->view('bukutamu/side/footer.php');
    	}

    	function tambah_syarat(){

    		$judul = $this->input->post('judul');
    		$desc = $this->input->post('desc');

    		$rules = $this->Aturan->rules8();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {
    		
    		$config['upload_path'] = FCPATH.'upload/syarat/';
        	$config['allowed_types'] = 'jpeg|jpg|png';
        	$config['max_size'] = 2000;

    		$this->load->library('upload', $config);

    		if (!$this->upload->do_upload('gambar')) {
    			$data = [
				'title' => 'Upload Image',
				'eror' => $this->upload->display_errors(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/t_syarat.php', $data);
				$this->load->view('bukutamu/side/footer.php');

    		} else 
        {	
        	
        	$data1 = array(
        		'judul_besar' => $judul, 
        		'desc' => $desc, 
        		'gambar' => $this->upload->data(), 
        	);

    			$this->Conection->tambah_data_syarat($data1['judul_besar'], $data1['desc'], $data1['gambar']);
    			redirect('landing-page');
        } 
    	} else {
    		$data = [
				'title' => 'Upload Image',
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/t_syarat.php', $data);
				$this->load->view('bukutamu/side/footer.php');
    	}
    	}

    	public function hapus_syarat($id){
		$data = array('id' => $id);
		$this->Conection->hapus_data($data, 'persyaratan');
		redirect('landing-page');
		}

		public function edit_syarat($id){
			$decrypt =  base64_decode($id);
    try {
      $cek = $this->db->get_where('persyaratan', ['id' => $decrypt])->row();
      if (!$cek || is_numeric($id)) {
        throw new Exception("ID Tidak Ditemukan");
      }
		$where = array('id' => $decrypt);
		$data = array( 
			'syarat' =>$this->Conection->Edit_data($where, 'persyaratan')->result(),
			'title' => 'Edit Data syarat',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/u_syarat.php', $data);
		$this->load->view('bukutamu/side/footer.php');
      
    } catch (Exception $e) {
      $error_message = 'Terjadi kesalahan: ' . $e->getMessage();
          $data = [
            'error' => $error_message,
          ];
          $this->load->view('bukutamu/side/errorA.php', $data);
    } 
		}

		public function ubah_syarat($ubah){
		$decrypt =  base64_decode($ubah);
		$where = array('id' => $decrypt);
		$id = $this->input->post('id');
			$judul = $this->input->post('judul');
    		$desc = $this->input->post('desc');

    		$rules = $this->Aturan->rules8();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {

			// $config['upload_path'] = FCPATH.'upload/syarat/';
      //   	$config['allowed_types'] = 'jpeg|jpg|png';
      //   	$config['max_size'] = 2000;

    	// 	$this->load->library('upload', $config);

    	// 	if (!$this->upload->do_upload('gambar')) {
    	// 		$data = [
			// 	'syarat' =>$this->Conection->Edit_data($where, 'persyaratan')->result(),
			// 	'title' => 'Edit Data syarat',
			// 	'eror' => $this->upload->display_errors(),
			// ];

    	// 		$this->load->view('bukutamu/side/heading.php', $data);
			// 	$this->load->view('bukutamu/side/navbar.php');
			// 	$this->load->view('bukutamu/back/u_syarat.php', $data);
			// 	$this->load->view('bukutamu/side/footer.php');

    	// 	} else {

		$data1 = array(
				'id' => $id,
        		'judul_besar' => $judul, 
        		'desc' => $desc, 
        		// 'gambar' => $this->upload->data(), 
        	);



		$this->Conection->ubah_data_syarat($data1['id'], $data1['judul_besar'], $data1['desc']);
		redirect('landing-page');
	} else {
		$data = [
				'syarat' =>$this->Conection->Edit_data($where, 'persyaratan')->result(),
				'title' => 'Edit Data syarat',
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/u_syarat.php', $data);
				$this->load->view('bukutamu/side/footer.php');
	}
	}

	function datatahapan(){
    			$data = [
				'title' => 'Data tahapan',
				'tahapan' => $this->Conection->tampil_tahapan()->result(),
			];

			$this->load->view('bukutamu/side/heading.php', $data);
			$this->load->view('bukutamu/side/navbar.php');
			$this->load->view('bukutamu/back/h_tahapan.php', $data);
			$this->load->view('bukutamu/side/footer.php');
    	}

    	function tm_tahapan(){
    		$data = [
			'title' => 'Tambah Data tahapan',
		];

		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/t_tahapan.php', $data);
		$this->load->view('bukutamu/side/footer.php');
    	}

    	function tambah_tahapan(){

    		$judul = $this->input->post('judul');
    		$desc = $this->input->post('desc');

    		$rules = $this->Aturan->rules8();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {
    		
    		$config['upload_path'] = FCPATH.'upload/icon/';
        	$config['allowed_types'] = 'jpeg|jpg|png';
        	$config['max_size'] = 2000;

    		$this->load->library('upload', $config);

    		if (!$this->upload->do_upload('gambar')) {
    			$data = [
				'title' => 'Upload Image',
				'eror' => $this->upload->display_errors(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/t_tahapan.php', $data);
				$this->load->view('bukutamu/side/footer.php');

    		} else 
        {	
        	
        	$data1 = array(
        		'judul' => $judul, 
        		'desc' => $desc, 
        		'gambar' => $this->upload->data(), 
        	);

    			$this->Conection->tambah_data_tahapan($data1['judul'], $data1['desc'], $data1['gambar']);
    			redirect('landing-page');
        } 
    	} else {
    		$data = [
				'title' => 'Upload Image',
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/t_tahapan.php', $data);
				$this->load->view('bukutamu/side/footer.php');
    	}
    	}

    	public function hapus_tahapan($id){
		$data = array('id' => $id);
		$this->Conection->hapus_data($data, 'tahapan');
		redirect('landing-page');
		}

		public function edit_tahapan($id){
			$decrypt =  base64_decode($id);
    try {
      $cek = $this->db->get_where('tahapan', ['id' => $decrypt])->row();
      if (!$cek || is_numeric($id)) {
        throw new Exception("ID Tidak Ditemukan");
      }
      $decrypt =  base64_decode($id);
		$where = array('id' => $decrypt);
		$data = array( 
			'tahapan' =>$this->Conection->Edit_data($where, 'tahapan')->result(),
			'title' => 'Edit Data tahapan',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/u_tahapan.php', $data);
		$this->load->view('bukutamu/side/footer.php');
      
    } catch (Exception $e) {
      $error_message = 'Terjadi kesalahan: ' . $e->getMessage();
          $data = [
            'error' => $error_message,
          ];
          $this->load->view('bukutamu/side/errorA.php', $data);
    } 
		}

		public function ubah_tahapan($ubah){
		$decrypt =  base64_decode($ubah);
		$where = array('id' => $decrypt);
		$id = $this->input->post('id');
			$judul = $this->input->post('judul');
    		$desc = $this->input->post('desc');

    		$rules = $this->Aturan->rules8();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {

			$config['upload_path'] = FCPATH.'upload/icon/';
        	$config['allowed_types'] = 'jpeg|jpg|png';
        	$config['max_size'] = 2000;

    		$this->load->library('upload', $config);

    		if (!$this->upload->do_upload('gambar')) {
    			$data = [
				'tahapan' =>$this->Conection->Edit_data($where, 'tahapan')->result(),
				'title' => 'Edit Data tahapan',
				'eror' => $this->upload->display_errors(),
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/u_tahapan.php', $data);
				$this->load->view('bukutamu/side/footer.php');

    		} else {

		$data1 = array(
				'id' => $id,
        		'judul' => $judul, 
        		'desc' => $desc, 
        		'gambar' => $this->upload->data(), 
        	);



		$this->Conection->ubah_data_tahapan($data1['id'], $data1['judul'], $data1['desc'], $data1['gambar']);
		redirect('landing-page');
	}
	} else {
		$data = [
				'tahapan' =>$this->Conection->Edit_data($where, 'tahapan')->result(),
				'title' => 'Edit Data tahapan',
			];

    			$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/u_tahapan.php', $data);
				$this->load->view('bukutamu/side/footer.php');
	}
	}

	function resizeImg($source){

        // Set the source image path
        $source_image = 'upload/icon/'.$source;

        // Set the new image path
        $new_image = FCPATH.'upload/icon/resize/';

        // Set the image resize configuration
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_image;
        $config['new_image'] = $new_image;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 50;
        $config['height'] = 50;

        // Initialize the image library with the configuration
        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        } else {
            redirect('landing-page');
        }
        
	}

	function resizeImg1($source){

        // Set the source image path
        $source_image = 'upload/akad/'.$source;

        // Set the new image path
        $new_image = FCPATH.'upload/akad/resize/';

        // Set the image resize configuration
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_image;
        $config['new_image'] = $new_image;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 512;
        $config['height'] = 512;

        // Initialize the image library with the configuration
        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        } else {
            redirect('landing-page');
        }
        
	}

	function deleteAll(){
		$items = $this->input->post('hapus');

		if (!empty($items)) {
			$this->Conection->hapus_data($items, 'akad');
		}

		redirect('landing-page');
	}

	public function edit_tanya($id){
			$decrypt =  base64_decode($id);
    try {
      $cek = $this->db->get_where('tanya', ['id' => $decrypt])->row();
      if (!$cek || is_numeric($id)) {
        throw new Exception("ID Tidak Ditemukan");
      }
      $decrypt =  base64_decode($id);
		$where = array('id' => $decrypt);
		$data = array( 
			'tanya' =>$this->Conection->Edit_data($where, 'tanya')->result(),
			'title' => 'Edit Data tahapan',
		);
		$this->load->view('bukutamu/side/heading.php', $data);
		$this->load->view('bukutamu/side/navbar.php');
		$this->load->view('bukutamu/back/u_tanya.php', $data);
		$this->load->view('bukutamu/side/footer.php');
      
    } catch (Exception $e) {
      $error_message = 'Terjadi kesalahan: ' . $e->getMessage();
          $data = [
            'error' => $error_message,
          ];
          $this->load->view('bukutamu/side/errorA.php', $data);
    } 
		}

		public function ubah_tanya($ubah){
			$decrypt =  base64_decode($ubah);
			$where = array('id' => $decrypt);
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
    	$button = $this->input->post('button');

    	$rules = $this->Aturan->rules9();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === TRUE) {

		$data1 = array(
				'id' => $id,
        		'judul' => $judul, 
        		'button' => $button, 
        	);



		$this->Conection->ubah_data_tanya($data1['id'], $data1['judul'], $data1['button']);
		redirect('landing-page');
	} else {
		$data = [
				'tanya' =>$this->Conection->Edit_data($where, 'tanya')->result(),
				'title' => 'Edit Data tanya',
			];

    		$this->load->view('bukutamu/side/heading.php', $data);
				$this->load->view('bukutamu/side/navbar.php');
				$this->load->view('bukutamu/back/u_tanya.php', $data);
				$this->load->view('bukutamu/side/footer.php');
	}
	}

}

?>