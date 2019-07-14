<?php

class UserModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database("default", TRUE);
    }


    public function showusers()
    {
        $this->db->order_by('name', 'ASC');
        //$result_set = $this->db->query("select * from usertable order by id desc");
        $result_set = $this->db->get('usertable');
        return $result_set->result_array();
    }


    public function adduser($data)
    {
        return $this->db->insert("usertable", $data);
        //$result_set = $this->db->query("select * from usertable");
        // return $result_set->result_array();
    }


    public function edituser($userid)
    {
        $where['id'] = $userid;

    }


    public function getsingleuser($userid)
    {
        $where['id'] = $userid;
        $result = $this->db->get_where("usertable", $where);
        return $result->result_array();
    }


    public function updateuser($id, $new_data)
    {
        return $this->db->where('id', $id)->update('usertable', $new_data);
    }


    public function deleteuser($userid)
    {
        $where['id'] = $userid;
        $result = $this->db->query("delete from usertable WHERE id ='$userid'");
        return $result;
    }


    public function totalUser()
    {
        $result = $this->db->query("select * from usertable");
        //return $result->result_array();
        return $result->result_id->num_rows;
    }


    public function totalAdmin()
    {
        $result = $this->db->query("select * from usertable where designation='admin'");
        return $result->result_id->num_rows;
    }


    public function lastUser()
    {
        $result = $this->db->query("select * from usertable order by id desc limit 1");
        //return $result->result_array();
        return $result->result_object();
    }

    public function profile($id)
    {
        $result = $this->db->query("select * from usertable where id='$id' limit 1");
        return $result->result_object();
    }

}

?>