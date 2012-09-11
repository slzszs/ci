<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Purview {
    
    public function __construct() {
        $this->checkLoginStatus();
    }
    
    public function checkLoginStatus() {
        $CI =& get_instance();
        $userInfo = $CI->session->userdata('userInfo');
        if(!$userInfo) {
            header('Location : ./index.php/login');
        }
    }
}
?>
