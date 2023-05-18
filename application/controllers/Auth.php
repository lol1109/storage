<?php 
	/**
	 * 
	 */
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parrent::__construct();
			$this->load->model('Authentication');
		}
	}
 ?>