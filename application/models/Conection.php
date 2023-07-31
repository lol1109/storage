<?php 
	class Conection extends CI_Model
	{	
		function  __construct(){
		parent::__construct();
		// waktu
		$wk = strtotime("-1 week");
		$bl = strtotime("-1 month");
		$th = strtotime("-1 years");
		$now = strtotime(time());
		

		// cek waktu 
		$week = $wk + $now;
		$month = $bl + $now;
		$year = $th + $now;

		// tampilkan waktu
		$GLOBALS['tm'] = date("Y-m-d", $week);
		$GLOBALS['tb'] = date("Y-m-d", $month);
		$GLOBALS['ty'] = date("Y-m-d", $year);
		$GLOBALS['sekarang'] = date("Y-m-d");
		}
		
		// ========== TAMPIL DATA ============
		function tampil_data_tamu(){
			return $this->db->get('tamu');
		}

		function tampil_data_join(){
			return $this->db->query("SELECT tamu.id_tamu, tamu.Nama, tamu.Kontak, tamu.noWa, tamu.Bidang, tamu.Tujuan, tamu.JenisInformasi,tamu.Informasi, tamu.Kesimpulan, tamu.tanggal, petugas.nama_petugas, cabang.nama_cabang FROM ((tamu INNER JOIN petugas ON petugas.id_petugas = tamu.petugas)INNER JOIN cabang ON cabang.id_cabang = tamu.cabang) WHERE tamu.deleted = 'no' ORDER BY tamu.id_tamu DESC");
		}

		function tampil_data_join_petugas($cabang){
			return $this->db->query("SELECT tamu.id_tamu, tamu.Nama, tamu.Kontak, tamu.noWa, tamu.Bidang, tamu.Tujuan, tamu.JenisInformasi,tamu.Informasi, tamu.Kesimpulan, tamu.tanggal, petugas.nama_petugas, cabang.nama_cabang FROM ((tamu INNER JOIN petugas ON petugas.id_petugas = tamu.petugas)INNER JOIN cabang ON cabang.id_cabang = tamu.cabang) WHERE tamu.cabang = '$cabang' ORDER BY tamu.id_tamu DESC ");
		}


		// ============= ALL ===============
		function tampil_data_perbulan(){
			return $this->db->query("SELECT * FROM tamu ");
		}

		function tampil_akad(){
			return $this->db->query("SELECT akad.id, tamu.Nama, cabang.nama_cabang,  akad.merek, akad.tanggal, akad.gambar FROM ((akad INNER JOIN tamu ON tamu.id_tamu = akad.nama) INNER JOIN cabang ON cabang.id_cabang = tamu.cabang)  ORDER BY akad.tanggal desc limit 3");
		}


		function tampil_akad_l(){
			return $this->db->query("SELECT akad.id, tamu.Nama, cabang.nama_cabang,  akad.merek, akad.tanggal, akad.gambar FROM ((akad INNER JOIN tamu ON tamu.id_tamu = akad.nama) INNER JOIN cabang ON cabang.id_cabang = tamu.cabang)  ORDER BY akad.tanggal desc");
		}

		function tampil_home(){
			return $this->db->query("SELECT * FROM home");
		}

		function tampil_tahapan(){
			return $this->db->query("SELECT * FROM tahapan limit 4");
		}

		function tampil_home1(){
			return $this->db->get('home', 1);
		}

		function tampil_syarat(){
			return $this->db->query("SELECT * FROM persyaratan");
		}

		function tampil_syarat1(){
			return $this->db->get('persyaratan', 1);
		}

		function tampil_tanya(){
			return $this->db->get('tanya', 1);
		}

		function tampil_jumlah_property(){
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Property' ");
		}

		function tampil_jumlah_motor(){
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Motor' ");
		}
		// ====================================

		// ============= CABANG ===============
		function cabang()
		{
			return $this->db->query("SELECT * FROM cabang");
		}

		function tampil_data_perbulan_c($cabang){
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang'");
		}

		function tampil_jumlah_property_c($cabang){
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Property' ");
		}

		function tampil_jumlah_motor_c($cabang){
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Motor' ");
		}

		// ====================================

		// ============= AKSI DATA ===============

		function tambah_data($data, $table){
			$this->db->insert($table, $data);
		}

		function tambah_data_akad($nama, $merek, $tanggal, $gambar){
			$g = $gambar['file_name'];
			$this->db->query("INSERT INTO `akad`(`id`, `nama`, `tanggal`, `merek`, `gambar`) VALUES (NULL,'$nama','$tanggal','$merek','$g')");
		}

		function ubah_data_akad($id ,$nama, $tanggal,$merek, $gambar){
			$g = $gambar['file_name'];
			$this->db->query("UPDATE `akad` SET `nama`='$nama',`tanggal`='$tanggal',`merek`='$merek',`gambar`='$g' WHERE akad.id = '$id'");
		}

		function tambah_data_home($judul, $desc, $action, $gambar){
			$g = $gambar['file_name'];
			$this->db->query("INSERT INTO `home`(`id`, `judul_besar`, `desc`, `action`, `image`) VALUES (NULL,'$judul','$desc','$action','$g')");
		}

		function ubah_data_home($id, $judul, $desc, $action, $gambar){
			$g = $gambar['file_name'];
			$this->db->query("UPDATE `home` SET `judul_besar`='$judul',`desc`='$desc',`action`='$action',`image`='$g' WHERE home.id = '$id'");
		}

		function tambah_data_syarat($judul, $desc, $gambar){
			$g = $gambar['file_name'];
			$this->db->query("INSERT INTO `persyaratan`(`id`, `judul_besar`, `desc`, `image`) VALUES (NULL,'$judul','$desc','$g')");
		}

		function ubah_data_syarat($id, $judul, $desc){
			$this->db->query("UPDATE `persyaratan` SET `judul_besar`='$judul',`desc`='$desc' WHERE persyaratan.id = '$id'");
		}

		function tambah_data_tahapan( $judul, $desc, $gambar){
			$g = $gambar['file_name'];
			$this->db->query("INSERT INTO `tahapan`(`id`, `icon`, `judul`, `desc`) VALUES (NULL,'$g','$judul','$desc')");
		}

		function ubah_data_tahapan($id ,$judul, $desc, $gambar){
			$g = $gambar['file_name'];
			$this->db->query("UPDATE `tahapan` SET `icon`='$g',`judul`='$judul',`desc`='$desc' WHERE tahapan.id = '$id'");
		}

		function ubah_data_tanya($id ,$judul, $button){
			$g = $gambar['file_name'];
			$this->db->query("UPDATE `tanya` SET `judul`='$judul',`button`='$button' WHERE tanya.id = '$id'");
		}


		function hapus_data($data, $table){
			$this->db->where_in('id', $data);
			$this->db->delete($table);
		}

		function deleted($id){
			$this->db->query("UPDATE tamu SET deleted = 'yes' WHERE id_tamu = '$id'");
		}

		function Edit_data($where, $table){
			return $this->db->get_where($table, $where);
		}

		function ubah_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		// ====================================

		// ============= informasi tentang rekap tamu ===============

		function informasi($cabang){
			return $this->db->query("SELECT Informasi, COUNT(*) as 'total' FROM tamu WHERE cabang = '$cabang' GROUP BY Informasi ORDER BY total Desc ");
		}

		function informasiAdmin(){
			return $this->db->query("SELECT Informasi, COUNT(*) as 'total' FROM tamu GROUP BY Informasi ORDER BY total Desc ");
		}

		function InformasiCabang(){
			return $this->db->query("SELECT cabang.nama_cabang, id_tamu, COUNT(*) as 'total' FROM tamu INNER JOIN cabang ON cabang.id_cabang = tamu.cabang GROUP BY cabang ORDER BY total Desc ");
		}

		// ====================================

		// ============= Tampil admin ===============

		// ============= MOTOR ===============


		function tampil_jumlah_motor_mingguA(){
			global $tm, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Motor' and tanggal >= '$tm' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_motor_bulanA(){
			global $tb, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Motor' and tanggal >= '$tb' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_motor_tahunA(){
			global $ty, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Motor' and tanggal >= '$ty' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_motorA_All($tanggal1, $tanggal2){
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Motor' and tanggal >= '$tanggal1' and tanggal <= '$tanggal2' ");
		}

		// ============= PROPERTY ===============
		function tampil_jumlah_property_mingguA(){
			global $tm, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Property' and tanggal >= '$tm' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_property_bulanA(){
			global $tb, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Property' and tanggal >= '$tb' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_property_tahunA(){
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Property' and tanggal >= '$ty' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_propertyA_All($tanggal1, $tanggal2){
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Property' and tanggal >= '$tanggal1' and tanggal <= '$tanggal2' ");
		}
		// ============= SEMUA ===============

		function tampil_jumlah_semua_mingguA(){
			global $tm, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE tanggal >= '$tm' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_semua_bulanA(){
			global $tb, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE tanggal >= '$tb' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_semua_tahunA(){
			global $ty, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE tanggal >= '$ty' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_semuaA_All($tanggal1, $tanggal2){
			return $this->db->query("SELECT * FROM tamu WHERE tanggal >= '$tanggal1' and tanggal <= '$tanggal2' ");
		}

		// ====================================


		// =============  TAMPIL DATA PETUGAS ===============
		function petugas()
		{
			return $this->db->query("SELECT petugas.id_petugas, petugas.nama_petugas, petugas.username , cabang.nama_cabang FROM petugas INNER JOIN cabang ON cabang.id_cabang = petugas.id_cabang");
		}

		// MOTOR

		function tampil_jumlah_motor_minggu($cabang){
			global $tm, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Motor' and tanggal >= '$tm' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_motor_bulan($cabang){
			global $tb, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Motor' and tanggal >= '$tb' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_motor_tahun($cabang){
			global $ty, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Motor' and tanggal >= '$ty' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_motor_All($cabang, $tanggal1, $tanggal2){
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Motor' and tanggal >= '$tanggal1' and tanggal <= '$tanggal2' ");
		}

		// Property

		function tampil_jumlah_property_minggu($cabang){
			global $tm, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Property' and tanggal >= '$tm' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_property_bulan($cabang){
			global $tb, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Property' and tanggal >= '$tb' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_property_tahun($cabang){
			global $ty, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Property' and tanggal >= '$ty' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_property_All($cabang, $tanggal1, $tanggal2){
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and Bidang = 'Elang Property' and tanggal >= '$tanggal1' and tanggal <= '$tanggal2' ");
		}

		// Semua

		function tampil_jumlah_semua_minggu($cabang){
			global $tm, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and tanggal >= '$tm' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_semua_bulan($cabang){
			global $tb, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and tanggal >= '$tb' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_semua_tahun($cabang){
			global $ty, $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and tanggal >= '$ty' and tanggal <= '$sekarang' ");
		}

		function tampil_jumlah_semua_All($cabang, $tanggal1, $tanggal2){
			global $sekarang;
			return $this->db->query("SELECT * FROM tamu WHERE cabang = '$cabang' and tanggal >= '$tanggal1' and tanggal <= '$tanggal2' ");
		}

	}
 ?>