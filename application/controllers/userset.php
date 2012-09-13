<?php
    class Userset extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->purview->checkLoginStatus();
            checkPost();
        }
        
        public function index() {
            $data = $this->comm_data->appendSystemData();
            $this->load->view('comm/header');
            $this->load->view('userset', $data);
            $this->load->view('comm/footer');
        }
        
        public function updateBasicInfo() {
            $this->load->library('err_message');
            $user_id = $this->session->userdata('session_use_id');
            $userRname = trim($this->input->post('user_rname'));
            $userPhone = trim($this->input->post('user_phone'));
            $userEmail = trim($this->input->post('user_email'));
            $userSex = trim($this->input->post('user_sex'));
            $updateData = array('user_rname' => $userRname, 'user_phone' => $userPhone, 'user_email' => $userEmail, 'user_sex' => $userSex);
            $cond = array('user_id' => $user_id);
            $return = $this->_updateUserInfo($updateData, $cond);
            if($return) {
                $this->comm_data->updateUserSession();
                $this->err_message->_output(200);
                exit;
            }
            $this->err_message->_output(201);
        }
        public function uploadavatar() {
            $user_id = $this->session->userdata('session_use_id');
            if($user_id) {
                    $config['upload_path'] = './upload/avatar/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '100';
                    $config['max_width'] = '0';
                    $config['max_height'] = '0';
                    $config['overwrite'] = true;
                    $config['file_name'] = $user_id;
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('avatar')) {
                        $data['code'] = 100;
                        $data['message'] =  $this->upload->display_errors('',''); 
                        echo json_encode($data); 
                    } 
                    else {
                        $updateInfo = $this->upload->data();
                        $updateData = array('user_avatar' => $updateInfo['file_name']);
                        $cond = array('user_id' => $user_id);
                        $this->_updateUserInfo($updateData, $cond);
                        $data['code'] = 200;
                        $data['message'] = $updateInfo['file_name'];
                        $this->comm_data->updateUserSession();
                        echo json_encode($data);
                    } 
            }
        }
        
        public function _updateUserInfo($data, $cond) {
            if($data && is_array($data)) {
                $this->load->model('user_model');
                return $this->user_model->updateUser($data, $cond);
            }
        }
    }
