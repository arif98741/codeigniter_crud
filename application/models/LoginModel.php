<?php
    class LoginModel extends  CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database("default",TRUE);
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


        public function checkexistance($username)
        {
            $where['username']  = $username;
            $result = $this->db->get_where("usertable",$where);
            return true;
        }


        public function login($username, $password)
        {
            $where['username'] = $username;
            $where['password'] = $password;

           $result =  $this->db->get_where("usertable",$where);
           if($result)
           {
              return $result;
           }else{
               return false;
           }
        }

    }

?>