<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}


    public function json()
    {
        $this->load->database();
        $status = $this->db->query("select * from usertable");
        $data = $status->result_array();
        $userdata['first'] = $data;
        $userdata['second'] = $data;
        echo json_encode($userdata);
        
    }
}
