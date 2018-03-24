<?php
    class HomeModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
        }


        public function showusers()
        {
            $result_set = $this->db->query("select * from usertable order by id desc");
            return $result_set->result_array();
        }
		
		
		 public function adduser($data)
        {
			return $this->db->insert("usertable",$data);
            //$result_set = $this->db->query("select * from usertable");
           // return $result_set->result_array();
        }
		

        public function edituser($userid)
        {
            $where['id']  = $userid;

        }


        public function getsingleuser($userid)
        {
            $where['id']  = $userid;
            $result = $this->db->get_where("usertable",$where);
            return $result->result_array();
        }


        public function updateuser($id,$new_data)
        {
            $where['id'] = $id;
			return $this->db->update('usertable',$new_data,$where);
        }
		

        public function deleteuser($userid)
        {
            $where['id']  = $userid;
            $result = $this->db->query("delete from usertable WHERE id ='$userid'");
            return $result;
        }






    }

?>