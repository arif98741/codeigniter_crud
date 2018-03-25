<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends  CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->helper('security');
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
		
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'sex' => $this->input->post('sex'),
            'mobile' => $this->input->post('mobile'),
        );

        $this->security->xss_clean($data);

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('sex', 'Sex', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Email', 'trim|required');


         if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/inc/header.php');
            $this->load->view('template/user/adduser.php');
            $this->load->view('template/inc/footer.php');
             
        }else
        {  
            $result = $this->UserModel->adduser($data);
            redirect('user/userlist');
          
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

        $data = array(
            'id' => $this->input->post("id"),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'sex' => $this->input->post('sex'),
            'mobile' => $this->input->post('mobile'),
        );

        $this->security->xss_clean($data);

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('sex', 'Sex', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Email', 'trim|required');


         if ($this->form_validation->run() == FALSE)
        {
          redirect()->back('');
             
        }else
        {  
            echo $this->UserModel->updateuser($data['id'],$data);
            redirect("user");
          
        }


        
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