<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User extends  CI_Controller{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !--------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->helper('security');
    }

	/*
    !--------------------------------------------------------
    !       Default Function for user Model
    !--------------------------------------------------------
    */
	public function index()
    {
       $this->load->view('template/inc/header.php');
       $this->load->view('template/home/home.php',$this->showusers());
       $this->load->view('template/inc/footer.php');
    }


    /*
    !--------------------------------------------------------
    !       Show user details in page
    !--------------------------------------------------------
    */
    public function showusers($value='')
    {
		
    	$data['userdata'] =	$this->UserModel->showusers();
    	return $data;
    }


    /*
    !--------------------------------------------------------
    !       Add User Page
    !--------------------------------------------------------
    */
    public function adduser()
	{
		$this->load->view('template/inc/header.php');
		$this->load->view('template/user/adduser.php');
		$this->load->view('template/inc/footer.php');
	}


    /*
    !--------------------------------------------------------
    !       Save User Data from Add User
    !--------------------------------------------------------
    */
	public function saveuser()
	{
		
        $data = array(
            'name'    => $this->input->post('name'),
            'email'   => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'sex'     => $this->input->post('sex'),
            'mobile'  => $this->input->post('mobile'),
            'username'  => $this->input->post('username'),
        );

        $this->security->xss_clean($data);

        $this->form_validation->set_rules('name', 'Name', 'min_length[3]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('sex', 'Sex', 'required');
        $this->form_validation->set_rules('mobile', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[12]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/inc/header.php');
            $this->load->view('template/user/adduser.php',array('error' => $this->form_validation));
            $this->load->view('template/inc/footer.php');
            //redirect('user/adduser'); //redirect to userlist
             
        }else
        {  
            $result = $this->UserModel->adduser($data);
            redirect('user/userlist'); //redirect to userlist 
        }

	}


    /*
    !--------------------------------------------------------
    !       Show users
    !--------------------------------------------------------
    */
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


    /*
    !--------------------------------------------------------
    !       Edit User
    !--------------------------------------------------------
    */
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


    /*
    !--------------------------------------------------------
    !       Update User Data to Database
    !--------------------------------------------------------
    */
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


    /*
    !--------------------------------------------------------
    !       View Single User in Viewuser
    !--------------------------------------------------------
    */
    public function viewuser($userid = "")
    {
       $this->load->view('template/inc/header.php');
	   $data['userdata'] = $this->UserModel->getsingleuser($userid);
       $this->load->view('template/user/viewsingleuser.php',$data);
       $this->load->view('template/inc/footer.php');
    }
	


    /*
    !--------------------------------------------------------
    !      Delete Single User
    !--------------------------------------------------------
    */
    public function deleteuser($userid = "")
    {
        $data['userdata'] =$this->UserModel->deleteuser($userid);
        redirect('user');
    }
	


	
}