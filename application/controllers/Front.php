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

			];
			$this->load->view('bukutamu/front/index.php', $data);
		}
}
