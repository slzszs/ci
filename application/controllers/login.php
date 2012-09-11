<?php

class Login extends CI_Controller {

    private $session_var = 'sessionnum';

    public function __construct() {
        parent::__construct();
    }

    public function show($page = 'login') {
        $this->session->userdata($this->session_var);
        $helperArr = array('url');
        $this->load->helper($helperArr);
        $data['img'] = $this->getCaptha();
        $this->load->view('login', $data);
    }

    public function doLogin() {
        $this->load->model('user_model');
        $userName = $this->input->post('username');
        $userPass = md5($this->input->post('password'));
        $return = $this->user_model->getUserByNameAndPass($userName, $userPass);
    }

    public function getCaptha() {
        $this->load->helper('captcha');
        $vals = array(
            'word' => rand(1000, 9999),
            'img_path' => './temp/',
            'img_url' => base_url() . 'temp/',
            'img_width' => 60,
            'img_height' => 30,
            'expiration' => 7200
        );
        $cap = create_captcha($vals);
        $img = $cap['image'];
        $text = $cap['word'];
        $this->session->set_userdata($this->session_var, $text);
        return $img;
    }

}
