<?php

class Login extends CI_Controller {
    
  public function index($page = 'login')
  {   
      $this->load->helper('url');
      $this->load->view('login');
  }
  
  public function doLogin() {
      echo 1;
  }
}
