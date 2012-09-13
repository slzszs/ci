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
    
    public function getUserByUserId($user_id)
    {
        $return = array();
        if((int)$user_id) {
            $query = $this->db->get_where('user', array('user_id' => $user_id));
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
    
    public function getUserLoginLog($user_id) {
         $return = array();
        if((int)$user_id) {
            $this->db->select('*');
            $this->db->where('user_id', $user_id);
            $this->db->from('user_login_log');
            $this->db->order_by('log_id', 'desc');
            $query = $this->db->get();
            $return = $query->result_array();
        }
        return $return;
    }
    
    public function updateUser($data, $cond) {
        if($cond && is_array($cond)) {
            foreach($cond as $key => $val) {
               $this->db->where($key, $val); 
            }
            return $this->db->update('user', $data);
        }
          return false;
    }
}