<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class user extends  CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

	
	public function index()
    {
       $this->load->view('template/inc/header.php');
       $this->load->view('template/home/home.php',$this->showusers());
       $this->load->view('template/inc/footer.php');
    }

    public function showusers($value='')
    {
		
    	$data['userdata'] =	$this->UserModel->showusers();
    	return $data;
    }


    public function adduser()
	{
		$this->load->view('template/inc/header.php');
		$this->load->view('template/user/adduser.php');
		$this->load->view('template/inc/footer.php');
	}



	public function saveuser()
	{
		
		$data['name'] 		=  $this->input->post('name');
		$data['email']	 	=  $this->input->post('email');
		$data['address'] 	=  $this->input->post('address');
		$data['sex']		=  $this->input->post('sex');
		$data['mobile']		=  $this->input->post('mobile');
		
		if(empty($data['name']) || empty($data['email']) || empty($data['address']) || empty($data['sex']) || empty($data['mobile'])){
			$this->load->library('session');
			$session_data['message'] = "<p class='alert alert-warning'>Field Must Not be Empty</p>";
			$this->session->set_userdata($session_data);
			redirect("user/adduser");
		}else{
			$result = $this->UserModel->adduser($data);
			redirect("user");
		}
		
		
	}



	 public function userlist($type = 'user')
    {
	
    	if($type == 'user')
        {
            $data['userdata'] = $this->UserModel->showusers();
            $this->load->view('template/inc/header.php');
            $this->load->view('template/user/viewuser.php',$data);
            $this->load->view('template/inc/footer.php');
        }
        if($type == 'admin'){
                echo "I am admin";
        }
    	
    }



    public function edituser($userid = "")
    {
        $this->load->view('template/inc/header.php');
        $data = array(
            "userdata"	=> $this->UserModel->getsingleuser($userid)

        );
        $this->load->view("template/user/edituser",$data);
        //$this->UserModel->getsingleuser($userid);
        $this->UserModel->edituser($userid);
        $this->load->view('template/inc/footer.php');
    }

    public function updateuser()
    {
        $id = $this->input->post("id");
        
        $new_data['name'] 	    = $this->input->post('name');
        $new_data['email']  	= $this->input->post('email');
        $new_data['address'] 	= $this->input->post('address');
        $new_data['mobile'] 	= $this->input->post('mobile');
        $new_data['sex'] 		=  $this->input->post('sex');


        echo $this->UserModel->updateuser($id,$new_data);
        redirect("user");
    }

    public function viewuser($userid = "")
    {
       $this->load->view('template/inc/header.php');
	   $data['userdata'] = $this->UserModel->getsingleuser($userid);
       $this->load->view('template/user/viewsingleuser.php',$data);
       $this->load->view('template/inc/footer.php');
    }
	

     public function deleteuser($userid = "")
    {
        $data['userdata'] =$this->UserModel->deleteuser($userid);
        redirect('user');
    }
	


	
}