<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

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
	!--------------------------------------------
	!  Default Method for login
	!--------------------------------------------
	*/	
	public function index()
	{
		if($this->session->has_userdata('login')){
			redirect('home');
		}else{
			$this->load->view('template/auth/login.php');
		}

	}
	
	/*
	!--------------------------------------------
	!  Save Registration Data
	!--------------------------------------------
	*/

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
		$data['password']	=  md5($this->input->post('password'));
		$session_data['message'] = "";
		
		if(empty($data['name']) || empty($data['email']) || empty($data['address']) || empty($data['sex']) || empty($data['mobile']) || empty($data['username'])|| empty($data['password'])){
			$this->load->library('session');
			$session_data['message'] = "<p class='alert alert-warning'>Field Must Not be Empty</p>";
			$this->session->set_userdata($session_data);
			
		}else if($this->LoginModel->checkexistance($data['username']) != false){
			$session_data['message'] = "<p class='alert alert-warning'>Username Already Exist</p>";
			$this->session->set_userdata($session_data);
			
		}else{
			redirect("Login/login");
			
		}
		
	}
	
	/*
	!--------------------------------------------
	!   Login Layout Page
	!--------------------------------------------
	*/	
	public function login()
	{

		$username = $this->input->post("username");
		$password = md5($this->input->post("password"));

		$status 	 = $this->LoginModel->login($username,$password);
		
		if ($status->result_id->num_rows > 0) {

			$data 	 = $status->result_object();
			$session  = array(
				'login'  => true,
				'designation'     => $data[0]->designation,
				'id' => $data[0]->id
			);

			$this->session->set_userdata($session);
			$this->session->set_flashdata('success', 'Login Successful');
			redirect('home');
		}else{
			$this->session->set_flashdata('error', 'Username or Password Not Matched');
			redirect("login");
		}

	}

    /*
	!--------------------------------------------
	!     User Logout
	!--------------------------------------------
	*/	
	public function logout()
	{
		$this->session->set_flashdata('success', 'Logout Successful');
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('designation');
		redirect('login');
	}
}

?>