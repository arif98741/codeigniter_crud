<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function users()
    {	
    	/*$this->load->library('session');
        $this->set_userdata('something','Hello');
        $this->session->set_userdata('about',"About SOmething");
        $this->session->set_userdata([
        	'login' => true,
        	'name'  => $data['username'],
        	'email' => $data['email'];
        ]);

        $this->form_validation->set_rules(array(
        	'username' => $this->input->post['username'],
        	'username' => $this->input->post['username'],
        	'username' => $this->input->post['username'],
        	'username' => $this->input->post['username'],
        ));

        redirect('Home/index','refresh');*/

	}
}
