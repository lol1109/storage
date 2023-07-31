<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function  __construct(){
		parent::__construct();
		$this->load->model('Conection');
		}

		function index(){
			$data = [
				'cabang' => 'Elang Motor Pekanbaru',
				'home' => $this->Conection->tampil_home1()->result(),
				'akad' => $this->Conection->tampil_akad()->result(),
				'syarat' => $this->Conection->tampil_syarat1()->result(),
				'tanya' => $this->Conection->tampil_tanya()->result(),

			];
			$this->load->view('bukutamu/front/index.php', $data);
		}

		function motor(){
			$data = [
				'cabang' => 'Elang Motor Pekanbaru',
				'home' => $this->Conection->tampil_home1()->result(),
				'akad' => $this->Conection->tampil_akad()->result(),
				'syarat' => $this->Conection->tampil_syarat1()->result(),

			];
			$this->load->view('bukutamu/front/motor.php', $data);
		}

		function cabang(){
			$data = [
				'cabang' => 'Elang Motor Pekanbaru',
				'home' => $this->Conection->tampil_home1()->result(),
				'akad' => $this->Conection->tampil_akad()->result(),
				'syarat' => $this->Conection->tampil_syarat1()->result(),

			];
			$this->load->view('bukutamu/front/cabang.php', $data);
		}

		function test(){
			$akad =  $this->Conection->tampil_akad()->result();
            $this->load->library('image_lib');
        	foreach($akad as $row) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'upload/akad/'.$row->gambar.'.jpg';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']     = 75;
            $config['height']   = 50;

            $this->image_lib->clear();
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            }
		}
}
