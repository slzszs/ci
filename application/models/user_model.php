<?php
class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getUserByNameAndPass($user_name, $user_pass)
    {
        $return = array();
        if($user_name && $user_pass) {
            $query = $this->db->get_where('user', array('user_name' => $user_name, 'user_pass' => $user_pass));
            $return = $query->row_array();
        }
        return $return;
    }
    
    public function insertUserLoginLog($loginLog) {
        if($loginLog) {
            return $this->db->insert('user_login_log', $loginLog);
        }
        return false;
    }
}