<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Purview {
    
    public function __construct() {
        
    }
    
    public function checkLoginStatus($isLogin = 0, $rurl = '') {
        $CI =& get_instance();
        $userInfo = $CI->session->userdata('userInfo');
        if(!$userInfo && !$isLogin) {
            header("Location: ".base_url());
            exit;
        } 
        else if($userInfo) {
            if($rurl) {
                header("Location: ".base_url()."index.php/$rurl");
                exit;
            }
        }
    }
}   $CI =& get_instance();
     
?>
