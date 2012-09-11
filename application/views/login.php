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
							<input type="input" id="captcha" class="full" value="" name="captha" style='width:100px'/>
                                                        <span style="cursor:pointer; margin-top: -10px" onclick="getNewCaptcha();" id="captha_span"><?= $img;?></span>
						</p>
                                                <div class="box box-info" id="captha_err" style="display:none" ></div>
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
    
    function getNewCaptcha() {
            $.get("<?= base_url()?>index.php/login/getCaptha/1", function(result){
                $('#captha_span').html(result);
            });
        }
        
    $("#submit_login").click(function() {
            var passStatus = CKECK.check_password();
            var userStatus = CKECK.check_username();
            var captchaStatus = CKECK.check_captcha();
            clearError();
            if(passStatus.status && userStatus.status && captchaStatus.status) {
                var user = $("#username").attr('value'); 
                var pass = $("#password").attr('value');
                var captcha = $('#captcha').attr('value'); 
                var postArr = {'user' : user, 'pass' : pass, 'captcha' : captcha};
                $.post("<?= base_url()?>index.php/login/doLogin/"+Math.random(),postArr,function(result){
                    var code = result.code;
                    var message = result.message;
                    if(code != 200) {
                        getNewCaptcha();
                    }
                    if(code == 151 || code == 156 || code == 158) {
                        ERRORSHOW.common_error($('#user_err'), message);
                    }
                    else if(code == 152) {
                        $("#password").attr('value', '');
                        ERRORSHOW.common_error($('#pass_err'), message);
                    }
                    else if(code == 154 || code == 155) {
                        ERRORSHOW.common_error($('#captha_err'), message);
                    }
                    return false;
                },'json');
            }else {
                if(!passStatus.status) {
                    ERRORSHOW.common_error($('#pass_err'), passStatus.errHtml);
                }
                if(!userStatus.status) {
                    ERRORSHOW.common_error($('#user_err'), userStatus.errHtml);
                }
                if(!captchaStatus.status) {
                    ERRORSHOW.common_error($('#captha_err'), captchaStatus.errHtml);
                } 
                return false;
            }
        });
        function clearError() {
            $('#pass_err').hide();
            $('#user_err').hide();
            $('#captha_err').hide();
        }
         var ERRORSHOW = {
            common_error : function(obj, errHtml) {
                obj.show();
                obj.html(errHtml);
            }
        }
         var CKECK = {
            check_username:function() {
                var value = $('#username').attr('value');
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
                var value = $("#password").attr('value'); 
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
                    var value = $("#captcha").attr('value');
                    if(value == '') {
                        errHtml = '验证码不能为空';
                        status = 0;
                    }
                var Mes = {'status': status, 'errHtml' : errHtml};
                return Mes;
            }
        };
</script>
</html>