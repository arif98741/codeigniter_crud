<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends  CI_Controller{
	
	/*
	!--------------------------------------------
	!  Constructor Load During Creation of Object
	!--------------------------------------------
	*/	
	public function __construct()
	{
		parent::__construct();
	
	}

	/*
	!----------------------------------------------
	! 	Default Method for (./)
	!   Define Default in config/route.php
	!----------------------------------------------
	*/
	public function index($function = null){
		
		$data['totaluser'] = $this->UserModel->totalUser();
		$data['totaladmin'] = $this->UserModel->totalAdmin();
		$data['singleuser'] = $this->UserModel->lastUser();
		$data['users'] 		= $this->UserModel->showusers();
		$this->load->view('template/inc/header');
		$this->load->view('template/home/home',$data);
		$this->load->view('template/inc/footer');
	}

}

?>
