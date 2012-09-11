<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Err_message {

    public static $_err_message_code = array(
		'0' => '未知错误',
		'200' => '成功',
		'400' => '请求参数错误',
                '151' => '用户名不能为空',
                '152' => '密码不能为空',
                '153' => '用户名不存在',
                '154' => '验证码不能为空',
                '155' => '验证码输入错误',
                '156' => '密码与用户名不匹配请重新填写',
		'158' => '帐号已删除',
		'159' => '登录错误次数过多，IP被禁止5分钟',
                '170' => '没有此邮箱注册的用户',
                '171' => '您填写的邮箱不能为空',
                '172' => '邮件发送不成功',
                '173' => '邮件发送成功，但是未知错误导致邮件内链接不可用',
                '174' => '此链接已超过有效期',
                '175' => '此链接已使用过',
                '176' => '此链接不合法',
                '179' => '邮件发送成功',
                '189' => '密码重置成功',
                '199' => '登陆成功'
		
	);
    
    public function __construct()
    {
        
    }
    
    public function _output($code) {
		$arrArgs = func_get_args();	
		$response = array();
		$response['code'] = $code;
		$message = isset(self::$_err_message_code[$code]) ? self::$_err_message_code[$code] : self::$_err_message_code['0'];
		if (count($arrArgs) == 2) {
			$message = sprintf($message, $arrArgs[1]);
		} else if (count($arrArgs) == 3) {
			$message = sprintf($message, $arrArgs[1], $arrArgs[2]);
		}
		$response['message'] = $message;
		echo json_encode($response);
	}
   
}