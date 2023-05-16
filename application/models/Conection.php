<?php 
	/**
	 * 
	 */
	class Conection extends CI_Model
	{
		function tampil_data_tamu(){
			return $this->db->get('tamu');
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

		function cari_data($keyword){
			$sql = "SELECT * FROM tamu WHERE Nama LIKE '%" . $this->db->escape_like_str($keyword). "%' ESCAPE '!'";
		}
	}
 ?>