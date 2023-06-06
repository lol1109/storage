<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH. "/vendor/autoload.php";
use Dompdf\Dompdf;
	/**
	 * 
	 */
	class Rekap extends CI_Controller
	{
		
		function  __construct(){
		parent::__construct();
		$this->load->model('Conection');
		}

		function grafik(){
			$akses = $this->session->userdata('akses');

			if ($akses == "admin") {
				$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'ALL time',
			'active_p' => 'ALL time',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);

			} else {

			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_c($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_c($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan_c($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'ALL time',
			'active_p' => 'ALL time',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
		}
	}


		//======================== TAMPIL DATA TAMU  =========================
		//============================== MOTOR =====================================
		function motor_perminggu(){
			$akses = $this->session->userdata('akses');

			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_mingguA()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'last 7 days',
			'active_p' => 'ALL time',
			'active_s' => 'ALL time',
			];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);

			} else {

			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_c($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_minggu($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan_c($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'last 7 days',
			'active_p' => 'ALL time',
			'active_s' => 'ALL time',
			];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
		}

		function motor_perbulan(){
			$akses = $this->session->userdata('akses');

			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_bulanA()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'last 1 months',
			'active_p' => 'ALL time',
			'active_s' => 'ALL time',
			];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);

			} else {
			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_c($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_bulan($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan_c($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'last 1 months',
			'active_p' => 'ALL time',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
		}

		function motor_pertahun(){
			$akses = $this->session->userdata('akses');

			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_tahunA()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'last 1 years',
			'active_p' => 'ALL time',
			'active_s' => 'ALL time',
			];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);

			} else {
			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_c($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_tahun($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan_c($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'last 1 years',
			'active_p' => 'ALL time',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
		}

		//=================================================
		//============================== PROPERTY =====================================

		function property_perminggu(){
			$akses = $this->session->userdata('akses');
			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_mingguA()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'ALL time',
			'active_p' => 'last 7 days',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			} else {
			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_minggu($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_c($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan_c($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'ALL time',
			'active_p' => 'last 7 days',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
			
		}

		function property_perbulan(){
			$akses = $this->session->userdata('akses');
			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_bulanA()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'ALL time',
			'active_p' => 'last 1 months',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			} else {
			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_bulan($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_c($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan_c($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'ALL time',
			'active_p' => 'last 1 months',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
			
		}

		function property_pertahun(){
			$akses = $this->session->userdata('akses');
			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_tahunA()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'ALL time',
			'active_p' => 'last 1 years',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			} else {
			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_tahun($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_c($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_data_perbulan_c($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'ALL time',
			'active_p' => 'last 1 years',
			'active_s' => 'ALL time',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
			
		}

		//=================================================
		//============================== semua =====================================

		function semua_perminggu(){
			$akses = $this->session->userdata('akses');
			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_jumlah_semua_mingguA()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'ALL time',
			'active_p' => 'ALL time',
			'active_s' => 'last 7 days',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			} else {
			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_c($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_c($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_jumlah_semua_minggu($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'ALL time',
			'active_p' => 'ALL time',
			'active_s' => 'last 7 days',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
		}

		function semua_perbulan(){
			$akses = $this->session->userdata('akses');
			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_jumlah_semua_bulanA()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'ALL time',
			'active_p' => 'ALL time',
			'active_s' => 'last 1 months',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			} else {
			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_c($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_c($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_jumlah_semua_bulan($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'ALL time',
			'active_p' => 'ALL time',
			'active_s' => 'last 1 months',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
		}

		function semua_pertahun(){
		 $akses = $this->session->userdata('akses');
			if ($akses == "admin") {
			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property()->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor()->num_rows(),
			'hasil2' => $this->Conection->tampil_jumlah_semua_tahunA()->num_rows(),
			'tamu' => $this->Conection->InformasiAdmin()->result(),
			'active_m' => 'ALL time',
			'active_p' => 'ALL time',
			'active_s' => 'last 1 months',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			} else {
			$cabang = $this->session->userdata('cabang');

			$data = [
			'title' => 'Data Tamu',
			'hasil' =>  $this->Conection->tampil_jumlah_property_c($cabang)->num_rows(),
			'hasil1' => $this->Conection->tampil_jumlah_motor_c($cabang)->num_rows(),
			'hasil2' => $this->Conection->tampil_jumlah_semua_tahun($cabang)->num_rows(),
			'tamu' => $this->Conection->Informasi($cabang)->result(),
			'active_m' => 'ALL time',
			'active_p' => 'ALL time',
			'active_s' => 'last 1 months',
		];

			$this->load->view('bukutamu/rekapdata/grafik.php', $data);
			}
		}

		//=================================================
		//============================== print =====================================

		function cetak_grafik_pdf(){
		$this->load->library('Pdf');
		
		$cabang = $this->session->userdata('cabang');

		$data = [
			'title' => 'Data Tamu',
			'tamu' => $this->Conection->Informasi($cabang)->result(),
		];
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->load_view('bukutamu/rekapdata/grafik_pdf.php', $data);
	}
	}
 ?>