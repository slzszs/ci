<?php
class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->purview->checkLoginStatus();
    }
     public function index() {
        $this->load->model('user_model');
        $data = $this->comm_data->appendSystemData();
        $data['date'] = $this->_getUserLasterLog();
        $this->load->view('comm/header');   
        $this->load->view('home', $data);
        $this->load->view('comm/footer');
     }
     private function _getUserLasterLog() {
         $return = array();
         $user_id = $this->session->userdata('session_use_id');       
         $userLog = $this->user_model->getUserLoginLog($user_id);
         if(count($userLog) > 1) {
             $return['date'] = date("Y/m/d G:i:s", $userLog[1]['login_date']);
             $return['ip'] = $userLog[1]['login_ip'];
             $return['week'] = date("l", $userLog[1]['login_date']);
         }
         return $return;
     }
}