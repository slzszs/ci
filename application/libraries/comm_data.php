<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Comm_data {
    private static $_key = array('userInfo' => 'getUserInfo');
    public function __construct() {
        $this->CI =& get_instance();
    }
    
    public function appendSystemData($data = array()) {
        if($data) {
            foreach($data as $key => $val) {  
                if(self::$_key[$key]) {
                    $data[$key] = $this->$Datakey[$key]();
                }
            }
        } else {
           foreach(self::$_key as $key => $val) {
               $data[$key] = $this->$val();
           }
        }
        return $data;
    }
    private  function getUserInfo() {
        if($this->CI->session->userdata('userInfo')) {
            return $this->CI->session->userdata('userInfo');
        }
        return array();
    }
}
?>
