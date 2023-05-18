<?php 
	/**
	 * 
	 */
	class Conection extends CI_Model
	{
		function tampil_data_tamu(){
			return $this->db->get('tamu', 10);
		}

		function tampil_data_join(){
			return $this->db->query("SELECT tamu.id_tamu, tamu.Nama, tamu.Kontak, tamu.noWa, tamu.Bidang, tamu.Tujuan, tamu.JenisInformasi,tamu.Informasi, tamu.Kesimpulan, tamu.tanggal, petugas.nama_petugas, cabang.nama_cabang FROM ((tamu INNER JOIN petugas ON petugas.id_petugas = tamu.petugas)INNER JOIN cabang ON cabang.id_cabang = tamu.cabang);");
		}

		function tampil_data_perbulan(){
			return $this->db->query("SELECT * FROM tamu");
		}

		function tampil_jumlah_property(){
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Property' ");
		}

		function tampil_jumlah_motor(){
			return $this->db->query("SELECT * FROM tamu WHERE Bidang = 'Elang Motor' ");
		}

		function tambah_data($data, $table){
			$this->db->insert($table, $data);
		}

		function hapus_data($data, $table){
			$this->db->where($data);
			$this->db->delete($table);
		}

		function Edit_data($where, $table){
			return $this->db->get_where($table, $where);
		}

		function ubah_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		function data_baru(){
			return $this->db->query("SELECT Nama FROM tamu ORDER BY id_tamu DESC LIMIT 1");
		}

		function cabang()
		{
			return $this->db->query("SELECT * FROM cabang");
		}

		function petugas()
		{
			return $this->db->query("SELECT * FROM petugas");
		}
	}
 ?>