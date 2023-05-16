<?php 
	/**
	 * 
	 */
	class Crud extends CI_Controller
	{
		function index(){
			$this->load->view('patrial/head');
			$this->load->view('patrial/navbar');
			$this->load->view('patrial/fotter');
		}
	}
 ?>