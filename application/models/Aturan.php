<?php 
/**
 * 
 */
class Aturan extends CI_Model
{
	function rules(){
			//for login
			return[
				[
					'field' => 'username',
					'label' => 'username',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'password',
					'label' => 'password',
					'rules' => 'required|max_length[255]|min_length[3]',
				],
			];
		}

		function rules1(){
			//for registrasion
			return[
				[
					'field' => 'nama_petugas',
					'label' => 'Nama Petugas',
					'rules' => 'required|max_length[100]|min_length[5]|alpha|trim',
				],
				[
					'field' => 'username',
					'label' => 'username',
					'rules' => 'required|max_length[100]|min_length[4]|trim|strtolower',
				],
				[
					'field' => 'password',
					'label' => 'password',
					'rules' => 'required|max_length[255]|min_length[3]',
				],
			];
		}

		function rules2(){
			//for tamu
			return[
				[
					'field' => 'Nama',
					'label' => 'Nama',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'Kontak',
					'label' => 'Kontak',
					'rules' => 'required|max_length[15]|min_length[10]|integer',
				],
				[
					'field' => 'noWa',
					'label' => 'Kontak Whatsapp',
					'rules' => 'required|max_length[15]|min_length[10]|integer',
				],
				[
					'field' => 'JenisInformasi',
					'label' => 'Jenis Infromasi',
					'rules' => 'required|max_length[255]|min_length[3]',
				],

			];
		}

		function rules3(){
			//for cabang
			return[
				[
					'field' => 'Nama',
					'label' => 'Nama',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'Kontak',
					'label' => 'Kontak',
					'rules' => 'required|max_length[15]|min_length[10]|integer',
				]
			];
		}

		function rules4(){
			//for petugas
			return[
				[
					'field' => 'Nama',
					'label' => 'Nama',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'username',
					'label' => 'username',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'password',
					'label' => 'password',
					'rules' => 'required|max_length[255]|min_length[3]',
				],
			];
		}

		function rules5(){
			//for tamu
			return[
				[
					'field' => 'Nama',
					'label' => 'Nama',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'Kontak',
					'label' => 'Kontak',
					'rules' => 'required|max_length[15]|min_length[10]|integer|is_unique[tamu.Kontak]',
					'errors' => array(
                        'required' => 'kamu harus mengisi form ini',
                        'is_unique' => 'nomor ini sudah terdaftar di database kami.'

                ),
				],
				[
					'field' => 'noWa',
					'label' => 'Kontak Whatsapp',
					'rules' => 'required|max_length[15]|min_length[10]|integer|is_unique[tamu.noWa]',
					'errors' => array(
                        'required' => 'kamu harus mengisi form ini',
                        'is_unique' => 'nomor ini sudah terdaftar di database kami.'

                ),
				],
				[
					'field' => 'JenisInformasi',
					'label' => 'Jenis Infromasi',
					'rules' => 'required|max_length[255]|min_length[3]',
				],

			];
		}

		function rules6(){
			//for cabang
			return[
				[
					'field' => 'merek',
					'label' => 'Merek',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'tanggal',
					'label' => 'tanggal',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
			];
		}

		function rules7(){
			//for cabang
			return[
				[
					'field' => 'judul',
					'label' => 'judul',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'desc',
					'label' => 'deskripsi',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'action',
					'label' => 'action',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
			];
		}

		function rules8(){
			//for cabang
			return[
				[
					'field' => 'judul',
					'label' => 'judul',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
				[
					'field' => 'desc',
					'label' => 'deskripsi',
					'rules' => 'required|max_length[64]|min_length[4]',
				],
			];
		}

}
 ?>