<?php

class Addressbook extends CI_Controller {
    private $pageType = 'address_book';
    private $book_type = array( array('title' => '全部通讯录' , 'show' => 'all'),array('title' => '公司通讯录' , 'show' => 'company'), array('title' => '私人通讯录' , 'show' => 'private'));
    private $csv_order = array('user_rname' => 0, 'user_ename' => 1, 'user_phone' => 2, 'user_email' => 3);
    public function __construct() {
        parent::__construct();
        $this->purview->checkLoginStatus();
        checkPost();
    }

    public function index($type = '0') {
        $data = $this->comm_data->appendSystemData();
        $data['title'] = $this->book_type[0]['title'];
        $data['show'] = $this->book_type[0]['show'];
        $data['pageType'] = $this->pageType;
        if ($type == 1 || $type == 2) {
            $data['title'] = $this->book_type[$type]['title'];
            $data['show'] = $this->book_type[$type]['show'];
        }
        $this->load->view('comm/header');
        $this->load->view('addressbook', $data);
        $this->load->view('comm/footer');
    }

    public function uploadCsv() {
        //加载上传解析文件类
        $this->load->library('file');
        
        $userInfo = $this->session->userdata('userInfo');
        $company_id = $userInfo['company_id'];
        
        //获得上传CSV的配置信息
        $config['upload_path'] = CDN_CSV;
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '2000';
        $config['overwrite'] = true;
        $config['file_name'] = $company_id;
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('address_book')) {
            $data['code'] = 100;
            $data['message'] = $this->upload->display_errors('', '');
            echo json_encode($data);
        } else {
            $updateInfo = $this->upload->data();
            $filePath = $updateInfo['full_path'];
            $fileCon = $this->file->getCsv($filePath);
            $fileCon = $this->_checkCsvData($fileCon);
            $data['code'] = 200;
            $meggage = '一共'.$fileCon['all_num'].'条数据，成功录入'.$fileCon['sql_num'].',错误'.$fileCon['err_num'];
            $data['message'] = $meggage;
            echo json_encode($data);
        }
    }
    
    private function _checkCsvData($data) {
        $return = array('err_num' => 0, 'err_data', 'all_num' => 0, 'sql_num' => 0, 'sql_data');
        if($data) {
            unset($data[0]); //去除标题
            $return['all_num'] = count($data); 
            foreach ($data as $key => $val) {
                if($val[$this->csv_order['user_email']] && preg_match("/^[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+([a-z]{2}|aero|arpa|biz|com|coop|edu|gov|info|int|jobs|mil|museum|name|nato|net|org|pro|travel)$/", $val[$this->csv_order['user_email']])) {
                    $return['sql_num'] ++;
                    $temp = array();
                    foreach ($this->csv_order as $okey => $oval) {
                        $temp[$okey] = $val[$oval];
                    }
                    $return['sql_data'] = $temp;
                } else {
                    $return['err_num'] ++;
                    $return['err_data'][] = $val;
                }
            }
        }
        return $return;
    }

}