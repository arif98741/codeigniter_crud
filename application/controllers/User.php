<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !--------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
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
        $this->load->view('template/home/home.php', $this->showusers());
        $this->load->view('template/inc/footer.php');
    }


    /*
    !--------------------------------------------------------
    !       Show user details in page
    !--------------------------------------------------------
    */
    public function showusers($value = '')
    {

        $data['userdata'] = $this->UserModel->showusers();
        return $data;
    }


    /*
    !--------------------------------------------------------
    !       Add User Page
    !--------------------------------------------------------
    */
    public function adduser()
    {
        if ($this->session->has_userdata('login') && $this->session->designation == 'admin') {
            $this->load->view('template/inc/header.php');
            $this->load->view('template/user/adduser.php');
            $this->load->view('template/inc/footer.php');
        } else {
            redirect('home');
        }

    }


    /*
    !--------------------------------------------------------
    !       Save User Data from Add User
    !--------------------------------------------------------
    */
    public function saveuser()
    {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'sex' => $this->input->post('sex'),
            'mobile' => $this->input->post('mobile'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))

        );

        $this->security->xss_clean($data);

        $this->form_validation->set_rules('name', 'Name', 'min_length[3]|max_length[25]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('sex', 'Sex', 'required');
        $this->form_validation->set_rules('mobile', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[20]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/inc/header.php');
            $this->load->view('template/user/adduser.php', array('error' => $this->form_validation));
            $this->load->view('template/inc/footer.php');
            //redirect('user/adduser'); //redirect to userlist

        } else {
            $result = $this->UserModel->adduser($data);
            if ($result == TRUE) {
                $status = $this->do_upload();

                if ($status == true) {
                    //get response after photo upload and manage it 

                    $file_name = $status['upload_data']['file_name'];
                    $db = $this->load->database("default", TRUE);

                    $db->select("*");
                    $db->order_by('id', 'DESC');
                    $db->limit(1);
                    $query = $db->get('usertable')->result_array();


                    $db->set('image', $file_name);
                    $db->where('id', $query[0]['id']);
                    $db->update('usertable');

                }
                $this->session->set_flashdata('success', 'User Added Successfully');
                redirect("user");

            } else {
                redirect('user/adduser');
            }

        }

    }


    /*
    !--------------------------------------------------------------------
    !   User Photo Upload Function
    !--------------------------------------------------------------------
    !*/
    public function do_upload()
    {
        $config['upload_path'] = './uploads/userphoto/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userphoto')) {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }


    /*
    !--------------------------------------------------------
    !       Show users
    !--------------------------------------------------------
    */
    public function userlist($type = 'user')
    {

        if ($type == 'user') {
            $data['users'] = $this->UserModel->showusers();
            $this->load->view('template/inc/header.php');
            $this->load->view('template/user/viewuser.php', $data);
            $this->load->view('template/inc/footer.php');
        }
        if ($type == 'admin') {
            echo "I am admin";
        }

    }

    /*
    !--------------------------------------------------------
    !       Edit User
    !--------------------------------------------------------
    */
    public function edituser($userid = null)
    {
        // if not logged in, return home
        if (!$this->session->has_userdata('login')) {
            redirect('home');
        }

        if ($userid == $this->session->id || $this->session->designation == 'admin') {

            $data = [
                "userdata" => $this->UserModel->getsingleuser($userid)
            ];

            $this->load->view('template/inc/header.php');
            $this->load->view("template/user/edituser", $data);
            $this->load->view('template/inc/footer.php');

        } else {
            redirect('home');
        }

    }

    /*
    !--------------------------------------------------------
    !       Update User Data to Database
    !--------------------------------------------------------
    */
    public function updateuser()
    {

        $data = [
            'id' => $this->input->post("id"),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'sex' => $this->input->post('sex'),
            'mobile' => $this->input->post('mobile')
        ];

        $this->security->xss_clean($data);

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('sex', 'Sex', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Email', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'User Update Failed');
            redirect("user/userlist");

        } else {
            $this->UserModel->updateuser($data['id'], $data);
            $this->session->set_flashdata('success', 'User Updated Successfully');
            redirect("user/userlist");

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
        $this->load->view('template/user/viewsingleuser.php', $data);
        $this->load->view('template/inc/footer.php');
    }


    /*
    !--------------------------------------------------------
    !      Delete Single User
    !--------------------------------------------------------
    */
    public function deleteuser($userid = "")
    {
        if ($this->session->has_userdata('login') && $this->session->designation == 'admin') {
            $data['userdata'] = $this->UserModel->deleteuser($userid);
            $this->session->set_flashdata('success', 'User Deleted Successfully');
            redirect('user');
        } else {
            redirect('user');
        }

    }


    /*
   !--------------------------------------------------------
   !      Delete Single User
   !--------------------------------------------------------
   */
    public function profile($userid = "")
    {

        $status = $this->UserModel->profile($userid);
        if (count($status) > 0) {


            $data['userdata'] = $this->UserModel->profile($userid);
            $this->load->view('template/inc/header.php');
            $this->load->view('template/user/profile', $data);
            $this->load->view('template/inc/footer.php');


        } else {
            $data['pagenotfound'] = 'Page You are searcing is not found';

            $this->load->view('template/inc/header.php');
            $this->load->view('template/error/error_404', $data);
            $this->load->view('template/inc/footer.php');

        }


    }


}