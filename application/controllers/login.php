<?php

class Login extends CI_Controller {

    private $session_var = 'sessionnum';

    public function __construct() {
        parent::__construct();
    }

    public function index($page = 'login') {
        $helperArr = array('url');
        $this->load->helper($helperArr);
        $data['img'] = $this->getCaptha();
        $this->load->view('login', $data);
    }

    public function doLogin() {
        checkPost();
        $this->load->library('err_message');
        $userName = trim($this->input->post('user'));
        $userPass = md5(trim($this->input->post('pass')));
        $captcha = trim($this->input->post('captcha'));
        $capcthaSession = $this->session->userdata($this->session_var);
        if(!$userName) 
            return $this->err_message->_output(151);
        
        if(!$userPass) 
            return $this->err_message->_output(152);
         
        if(!$captcha) 
            return $this->err_message->_output(154);
        
        if(strtoupper($captcha) != strtoupper($capcthaSession)) 
            return $this->err_message->_output(155);
        
        
        $this->load->model('user_model');
        $userInfo = $this->user_model->getUserByNameAndPass($userName, $userPass);
        if(!$userInfo) {
            return $this->err_message->_output(156);
        }
        else if(!$userInfo['user_status']) {
            return $this->err_message->_output(158);
        } else {
            return $this->err_message->_output(200);
        }
    }

    public function getCaptha($show = 0) {
        $helperArr = array('url', 'captcha');
        $this->load->helper($helperArr);
        $vals = array(
            'word' => rand(1000, 9999),
            'img_path' => './temp/',
            'img_url' => base_url() . 'temp/',
            'img_width' => 100,
            'img_height' => 30,
            'expiration' => 7200
        );
        $cap = create_captcha($vals);
        $img = $cap['image'];
        $text = $cap['word'];
        $this->session->set_userdata($this->session_var, $text);
        if($show) {
            echo $img;
        } else {
            return $img;
        }
        
    }

}
