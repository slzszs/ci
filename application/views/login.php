<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>后台</title>
<meta name="description" content="admin" />
<meta name="keywords" content="Admin,后台" />
<!-- Favicons --> 
<link rel="shortcut icon" type="image/png" HREF="<?= base_url().CDN_IMG?>favicons/favicon.png"/>
<link rel="icon" type="image/png" HREF="<?= base_url().CDN_IMG?>favicons/favicon.png"/>
<link rel="apple-touch-icon" HREF="<?= base_url().CDN_IMG?>favicons/apple.png" />
<!-- Main Stylesheet --> 
<link rel="stylesheet" href="<?= base_url().CDN_CSS?>style.css" type="text/css" />
<!-- Colour Schemes
Default colour scheme is blue. Uncomment prefered stylesheet to use it.
<link rel="stylesheet" href="css/brown.css" type="text/css" media="screen" />  
<link rel="stylesheet" href="css/gray.css" type="text/css" media="screen" />  
<link rel="stylesheet" href="css/green.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/pink.css" type="text/css" media="screen" />  
<link rel="stylesheet" href="css/red.css" type="text/css" media="screen" />
-->
<!-- Your Custom Stylesheet --> 
<link rel="stylesheet" href="<?= base_url().CDN_CSS?>custom.css" type="text/css" />
<!--swfobject - needed only if you require <video> tag support for older browsers -->
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>swfobject.js"></script>
<!-- jQuery with plugins -->
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery-1.4.2.min.js"></script>
<!-- Could be loaded remotely from Google CDN : <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.ui.core.min.js"></script>
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.ui.widget.min.js"></script>
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.ui.tabs.min.js"></script>
<!-- jQuery tooltips -->
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.tipTip.min.js"></script>
<!-- Superfish navigation -->
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.superfish.min.js"></script>
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.supersubs.min.js"></script>
<!-- jQuery form validation -->
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.validate_pack.js"></script>
<!-- jQuery popup box -->
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.nyroModal.pack.js"></script>
<!-- Internet Explorer Fixes --> 
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>comm.js"></script>
<!--[if IE]>
<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
<script src="js/html5.js"></script>
<![endif]-->
<!--Upgrade MSIE5.5-7 to be compatible with MSIE8: http://ie7-js.googlecode.com/svn/version/2.1(beta3)/IE8.js -->
<!--[if lt IE 8]>
<script src="js/IE8.js"></script>
<![endif]-->

</head>
<body>
	<!-- Header -->
	<header id="top">
		<div class="wrapper-login">
			<!-- Title/Logo - can use text instead of image -->
			<div id="title"><img SRC="<?= base_url().CDN_IMG?>logo.png" alt="Administry" /><!--<span>Administry</span> demo--></div>
			<!-- Main navigation -->
			<nav id="menu">
				<ul class="sf-menu">
					<li class="current"><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
				</ul>
			</nav>
			<!-- End of Main navigation -->
			<!-- Aside links -->
			
			<!-- End of Aside links -->
		</div>
	</header>
	<!-- End of Header -->
	<!-- Page title -->
	<div id="pagetitle">
		<div class="wrapper-login"></div>
	</div>
	<!-- End of Page title -->
	
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper-login">
				<!-- Login form -->
				<section class="full">					
					
					<h3>登录</h3>

					<form id="loginform" method="post" action="<?= base_url()?>index.php/login/doLogin">

						<p>
							<label class="required" for="username">用户名:</label><br/>
							<input type="text" id="username" class="full" value="" name="username"/>
						</p>
						<div class="box box-info" id="user_err" style="display:none"></div>
						<p>
							<label class="required" for="password">密码:</label><br/>
							<input type="password" id="password" class="full" value="" name="password"/>
						</p>
                                                <div class="box box-info" id="pass_err" style="display:none" ></div>
                                                
                                                <p> 
                                                        <label class="required" for="captha">验证码:</label><br/>                                                        
							<input type="input" id="remember" class="full" value="" name="captha"/>
                                                        <a href="javascript:void(0)"><?= $img;?></a>
						</p>
						<!--
						<p>
							<input type="checkbox" id="remember" class="" value="1" name="remember"/>
							<label class="choice" for="remember">Remember me?</label>
						</p>
						-->
						<p>
							<input type="submit" class="btn btn-green big" value="Login" id="submit_login"/> &nbsp; <a href="javascript: //;" onclick="$('#emailform').slideDown(); return false;">Forgot password?</a> or <a href="#">Need help?</a>
						</p>
                                                
						<div class="clear">&nbsp;</div>

					</form>
					
					<form id="emailform" style="display:none" method="post" action="#">
						<div class="box">
							<p id="emailinput">
								<label for="email">Email:</label><br/>
								<input type="text" id="email" class="full" value="" name="email"/>
							</p>
							<p>
								<input type="submit" class="btn" value="Send"/>
							</p>
						</div>
					</form>
					
				</section>
				<!-- End of login form -->
				
		</div>
		<!-- End of Wrapper -->
	</div>
	<!-- End of Page content -->
	
	<!-- Page footer -->
	<footer id="bottom">
		<div class="wrapper-login">
			<p>Copyright &copy; 2010 <b><a HREF="../../themeforest.net/user/zoranjuric" title="Visit my profile page @ThemeForest">Zoran Juric</a></b> | Icons by <a HREF="../../www.famfamfam.com/index.htm">FAMFAMFAM</a></p>
		</div>
	</footer>
<script type="text/javascript">
    $("#submit_login").click(function() {
            var passStatus = CKECK.check_password();
            var userStatus = CKECK.check_username();
            var captcha = CKECK.check_captcha();
            if(passStatus.status && userStatus.status && captcha.status) {
                var user = $(farClass+' .pop_login_user').attr('value');
                var pass = $(farClass+' .pop_login_pass').attr('value'); 
                var remeber_me = $(farClass+' .remeber_me').is(":checked") ? 1 : 0; 
                var postArr ;
                var captcha_inp = $(farClass+' .pop_login_captcha').attr('value'); 
                postArr = {'user' : user, 'pass' : pass, 'remeber_me' : remeber_me,'captcha_inp' : captcha_inp};
                $.post("login.php?doLogin=1&mt="+Math.random(),postArr,function(result){
                    var code = result.code;
                    var message = result.message;
                    clearError();
                    if(code == 799) {
                        //var backUrl = result.data.backUrl;
                        // console.log(backUrl);
                        window.location.href = loginRurl;
                        return false;
                    }
                    var errorNum = result.data.errorNum;
                    if(errorNum > 3) {
                        if(! $(farClass+' .pop_login_captcha')[0]) {
                            var appHtml = '<li class="dt">验证码：</li>\n\
                                                <li class="dd inp ">\n\
                                                <input type="text" style="width:100px;" name="captcha_inp" id="captcha_inp" class="pop_login_captcha" >\n\
                                                <span class="log_code_img"><span id="captcha_span"><img src="captcha.php" id="captcha_img" class="captcha_img" /></span>\n\
                                                <a style="text-decoration:none;cursor: pointer;"  onclick = "newPopObj.getCaptcha();">换一张</a></span>\n\
                                                <p class="info_ps ps_error captcha_error">请输入验证码</p></li>';
                            $(farClass+' .login_ul').append(appHtml);
                        } else {
                            newPopObj.getCaptcha();
                                
                        }
                    }
                        
                    if (code == 751) {
                        var objId = $(farClass+' .pop_login_user');
                    }else if (code == 752 || code == 756) {
                        var objId = $(farClass+' .pop_login_pass');
                        $(farClass+' .pop_login_pass').attr('value','');
                    }
                    if(code == 753) {
                        var objId = $(farClass+' .pop_login_user');
                        message = "用户名不存在，<a style='cursor: pointer;color:#FF6699;' onclick='popClose()' >快速注册</a>";
                    }
                        
                        
                    if(code == 758) {
                        var objId = $(farClass+' .pop_login_user');
                        message = "帐号已删除";
                    }                
                        
                    if(code == 759) {
                        var objId = $(farClass+' .pop_login_user');
                        message = "登录错误次数过多，IP被禁止5分钟";
                    }
                     if(code == 757) {
                            var objId = $(farClass+' .pop_login_user');
                           // message = "你的账户已被冻结，你可以 1）联系客服处理 或 2）使用密码找回功能解冻";
                           message = "您的账户存在安全隐患，为确保账户安全，请<a href='fetch_pwd.php'>设置新密码</a>。修改完成后，您将获得一张10元优惠券。";
                           
                        }
                        
                    if(code == 754 || code == 755) {
                        $(farClass+' .pop_login_captcha').parent().addClass('inp_error');
                        $(farClass+' .captcha_error').html(message);
                    } else{
                        ERRORSHOW.common_error(objId, message);
                    }
                },'json');
            } else {
                if(!passStatus.status) {
                    ERRORSHOW.common_error($(farClass+' .pop_login_pass'), passStatus.errHtml);
                }
                if(!userStatus.status) {
                    ERRORSHOW.common_error($(farClass+' .pop_login_user'), userStatus.errHtml);
                }
                if(!captcha.status) {
                    $(farClass+' .pop_login_captcha').parent().addClass('inp_error');
                    $(farClass+' .captcha_error').html( captcha.errHtml);
                } 
                return false;
            }
        });
        
         var CKECK = {
            check_username:function() {
                var value = $(farClass+' .pop_login_user').attr('value');
                var errHtml = '';
                var status = 0;
                if(value == '') {
                    errHtml = '用户名不能为空';
                    status = 0;
                } else {
                    //if(!Validator.validateAccount(value)) {
                    //   errHtml = '用户名格式不正确';
                    //  status = 0;
                    //} else {
                    status = 1;
                    //}
                    
                }
                var Mes = {'status': status, 'errHtml' : errHtml};
                return Mes;
            },
            check_register:function() {
                var value = $(farClass+' .pop_register_user').attr('value'); 
                var errHtml = '';
                var status = 0;
                if(value == '') {
                    errHtml = '用户名不能为空';
                    status = 0;
                } else {
                    if(!Validator.validateAccount(value)) {
                        errHtml = '用户名格式不正确';
                        status = 0;
                    } else {
                        status = 1;
                    }
                    var Mes = {'status': status, 'errHtml' : errHtml};
                    return Mes;
                    
                }
                var Mes = {'status': status, 'errHtml' : errHtml};
                return Mes;
            },
            check_register_pass:function() {
                var value = $(farClass+' .pop_register_pass').attr('value'); 
                var errHtml = '';
                var status = 1;
                if(value == '') {
                    errHtml = '密码不能为空';
                    status = 0;
                }else {
                    if(!Validator.validatePassword(value)) {
                        errHtml = '密码必须由6-16个字符组成';
                        status = 0;
                    } else {
                        status = 1;
                        errHtml = Validator.getPasswordStrength(value);
                    }
                }
                var Mes = {'status': status, 'errHtml' : errHtml};
                return Mes;
            },
            check_password:function() {
                var value = $(farClass+' .pop_login_pass').attr('value'); 
                var errHtml = '';
                var status = 1;
                if(value == '') {
                    errHtml = '密码不能为空';
                    status = 0;
                }else {
                    if(!Validator.validatePassword(value)) {
                        errHtml = '密码格式不正确';
                        status = 0;
                    } else {
                        status = 1;
                    }
                }
                var Mes = {'status': status, 'errHtml' : errHtml};
                return Mes;
            },
            check_captcha : function() {
                var status = 1;
                var errHtml = '';
                if($(farClass+' .pop_login_captcha')[0]) {
                    var value = $(farClass+' .pop_login_captcha').attr('value');
                    if(value == '') {
                        errHtml = '验证码不能为空';
                        status = 0;
                    }
                }
                var Mes = {'status': status, 'errHtml' : errHtml};
                return Mes;
            }
        };
</script>
</html>