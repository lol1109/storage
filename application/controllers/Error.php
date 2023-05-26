<?php
class Error extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->view('bukutamu/side/error.php');
		}

		function index(){
			$this->load->view('bukutamu/side/error.php');
		}
}
