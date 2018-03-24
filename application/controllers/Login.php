<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		
	}
	
    public function index()
    {
       $this->load->view('template/inc/header.php');
       $this->load->view('template/auth/login.php');
       $this->load->view('template/inc/footer.php');
    }
	
	
	public function registration()
    {
		
		$this->load->view('template/inc/header.php');
		$this->load->view('template/auth/registration.php');
		$this->load->view('template/inc/footer.php');
		
		$data['name'] 		=  $this->input->post('name');
		$data['email']	 	=  $this->input->post('email');
		$data['address'] 	=  $this->input->post('address');
		$data['sex']		=  $this->input->post('sex');
		$data['mobile']		=  $this->input->post('mobile');
		$data['username']	=  $this->input->post('username');
		$data['password']	=  $this->input->post('password');
		$session_data['message'] = "";
		
		if(empty($data['name']) || empty($data['email']) || empty($data['address']) || empty($data['sex']) || empty($data['mobile']) || empty($data['username'])|| empty($data['password'])){
			$this->load->library('session');
			$session_data['message'] = "<p class='alert alert-warning'>Field Must Not be Empty</p>";
			$this->session->set_userdata($session_data);
			
		}else if($this->LoginModel->checkexistance($data['username']) != false){
			$session_data['message'] = "<p class='alert alert-warning'>Username Already Exist</p>";
			$this->session->set_userdata($session_data);
			
		}else{
			//$result = $this->HomeModel->adduser($data);
			redirect("Login/login");
			
		}
		
      
    }
	
	
	public function login()
    {

       $this->load->view('template/inc/header.php');
       $this->load->view('template/auth/login.php');
       $this->load->view('template/inc/footer.php');

       $username = $this->input->post("username");
       $password = $this->input->post("password");
       $status = $this->LoginModel->login($username,$password);


    }
	
	
	
}

?>