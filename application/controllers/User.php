<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class user extends  CI_Controller{
	
	public function index()
    {
       $this->load->view('template/inc/header.php');
       $this->load->view('template/home/home.php',$this->showusers());
       $this->load->view('template/inc/footer.php');
    }

    public function showusers($value='')
    {
		
    	$data['userdata'] =	$this->HomeModel->showusers();
    	return $data;
    }


    public function adduser()
	{
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/adduser.php');
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
			redirect("Home/adduser");
		}else{
			$result = $this->HomeModel->adduser($data);
			redirect("user");
		}
		
		
	}



	 public function userlist($value='')
    {
	
    	$data['userdata'] =	$this->HomeModel->showusers();
    	$this->load->view('template/inc/header.php');
		$this->load->view('template/user/viewuser.php',$data);
		$this->load->view('template/inc/footer.php');
    	
    }



    public function edituser($userid = "")
    {
        $this->load->view('template/inc/header.php');
        $data = array(
            "userdata"	=> $this->HomeModel->getsingleuser($userid)

        );
        $this->load->view("template/home/edituser",$data);
        //$this->HomeModel->getsingleuser($userid);
        $this->HomeModel->edituser($userid);
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


        echo $this->HomeModel->updateuser($id,$new_data);
        redirect("user");
    }

    public function viewuser($userid = "")
    {
       $this->load->view('template/inc/header.php');
	   $data['userdata'] = $this->HomeModel->getsingleuser($userid);
       $this->load->view('template/home/viewuser.php',$data);
       $this->load->view('template/inc/footer.php');
    }
	

     public function deleteuser($userid = "")
    {
        $data['userdata'] =$this->HomeModel->deleteuser($userid);
        redirect('user');
    }
	
	
	
}