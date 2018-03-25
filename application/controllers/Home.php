<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends  CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	
	}

	public function index($function = null){

		
		$data['totaluser'] = $this->UserModel->totalUser();
		$data['totaladmin'] = $this->UserModel->totalAdmin();
		$data['singleuser'] = $this->UserModel->lastUser();
		
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/home.php',$data);
		$this->load->view('template/inc/footer.php');
	}

}

?>
