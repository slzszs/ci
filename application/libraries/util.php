<?php
class Util {

	static function get_client_ip(){
		if ( getenv("HTTP_X-Real-IP") )
		{
			$ip = getenv("HTTP_X-Real-IP");
		}
		elseif ( getenv("HTTP_X_FORWARDED_FOR") )
		{
			$ip_arr = explode( ',' , getenv("HTTP_X_FORWARDED_FOR") );
			$ip = $ip_arr[0];
		}
		elseif ($_SERVER['REMOTE_ADDR']) {
			return $_SERVER['REMOTE_ADDR'];
		}
		else
		{
			$ip = "unknown";
		}
		return $ip;
	}



    static function ip_limit($client_ip){        
        if(in_array($client_ip, Const_Main::$allow_ips)){
            return true;
        }
        return false;
    }
    
    static function getDataByCache($key){
        $ret=mc_get($key);
        if(!is_array($ret) || empty($ret['data']))
            return false;
        return $ret['data'];        
    }
    
    static function setCache($key,$data,$expire){
        if(!empty($data)){
            $rs['data']=$data;
            $rs['last_upd_time']=date('Y-m-d H:i:s',time());
            mc_set($key,$rs,$expire);                 
        }
        //return true;   
    }
    
    

	static function cut_str($string, $sublen, $start = 0, $code = 'UTF-8'){
	    if($code == 'UTF-8'){
	        $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
	        preg_match_all($pa, $string, $t_string);
	 
	        if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";
	        return join('', array_slice($t_string[0], $start, $sublen));
	    }else{
	        $start = $start*2;
	        $sublen = $sublen*2;
	        $strlen = strlen($string);
	        $tmpstr = '';
	 
	        for($i=0; $i< $strlen; $i++){
	            if($i>=$start && $i< ($start+$sublen)){
	                if(ord(substr($string, $i, 1))>129){
	                    $tmpstr.= substr($string, $i, 2);
	                }else{
	                    $tmpstr.= substr($string, $i, 1);
	                }
	            }
	            if(ord(substr($string, $i, 1))>129) $i++;
	        }
	        if(strlen($tmpstr)< $strlen ) $tmpstr.= "...";
	        return $tmpstr;
	    }
	}
	
}

?>