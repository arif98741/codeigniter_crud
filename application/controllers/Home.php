<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends  CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	
	}

	public function index($function = null){
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/home.php');
		$this->load->view('template/inc/footer.php');
	}

}

?>
