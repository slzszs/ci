<?php
class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
     public function index() {
        $data = $this->comm_data->appendSystemData();
        $this->load->view('comm/header');
        
        $this->load->view('home', $data);
        $this->load->view('comm/footer');
     }
}