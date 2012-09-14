<script type="text/javascript" SRC="<?= base_url().CDN_JS?>ajaxfileupload.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	/* setup navigation, content boxes, etc... */
	Administry.setup();
	
	/* progress bar animations - setting initial values */
	Administry.progress("#progress1", 1, 6);
	
	// validate form on keyup and submit
	var validator = $("#sampleform").validate({
		rules: {
			name: "required",
                        phone: "required",
			password: {
				required: true,
				minlength: 5
			},
			password_confirm: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true
			},
			dateformat: "required",
			terms: "required"
		},
		messages: {
			name: "姓名不能为空",
                        phone: "电话不能为空",
			password: {
				required: "Provide a password",
				rangelength: jQuery.format("Enter at least {0} characters")
			},
			email: {
				required: "邮箱不能为空",
				minlength: "请输入正确的邮箱账号"
			},
			dateformat: "Choose your preferred dateformat",
			terms: " "
		},
		// the errorPlacement has to take the layout into account
		errorPlacement: function(error, element) {
			error.insertAfter(element.parent().find('label:first'));
		},
		// specifying a submitHandler prevents the default submit, good for the demo
		submitHandler: function() {
                      var name = $("#name").attr('value');
                      var phone = $("#phone").attr('value');
                      var email = $("#email").attr('value');
                      var sex = $("#sex").attr('value');
                      $("#basic_sub").attr('value', '操作中...');
                      $("#basic_sub").attr('disabled', true);
                      var postArr = {'user_rname' : name, 'user_phone' : phone, 'user_email' : email, 'user_sex' : sex};
                      $.post("<?= base_url()?>index.php/userset/updateBasicInfo/"+Math.random(),postArr,function(result){
                            var code = result.code;
                            var message = result.message;
                            $('#basic_err').html(message);
                            $('#basic_err').show();
                            $("#basic_sub").attr('value', '提交');
                            $("#basic_sub").attr('disabled', false);
                            return false;
                        },'json');
		},
		// set new class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("ok");
		}
	});
	
	// propose username by combining first- and lastname
	$("#username").focus(function() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		if(firstname && lastname && !this.value) {
			this.value = firstname + "." + lastname;
		}
	});

});

 function ajaxFileUpload()
    {
        var oldSrc = $("#now_avatar").attr('src');
        $("#now_avatar")
        .ajaxStart(function(){
            $(this).attr('src', '<?= base_url().CDN_IMG?>nyro/upload.gif');
            $("#img_sub").attr('value', '操作中...');
            $("#img_sub").attr('disabled', true);
        })//开始上传文件时显示一个图片
        
        $.ajaxFileUpload
        (
            {
                url:'<?= base_url()?>index.php/userset/uploadavatar',//用于文件上传的服务器端请求地址
                secureuri:false,//一般设置为false
                fileElementId:'avatar',//文件上传空间的id属性  <input type="file" id="file" name="file" />
                dataType: 'json',//返回值类型 一般设置为json
                success: function (data, status)  //服务器成功响应处理函数
                {
                    var message = data.message;
                    if(data.code == 200) {
                        var src = "<?= base_url().CDN_AVATAR?>"+message+"?mt="+Math.random();
                        $("#now_avatar").attr('src', src);
                        $("#upload_err").html('上传成功');
                    } else {
                        $("#now_avatar").attr('src', oldSrc);
                        $("#upload_err").html(message);
                    }
                    $("#upload_err").show();
                    $("#img_sub").attr('value', '提交');
                    $("#img_sub").attr('disabled', false);
                },
                error: function (data)//服务器响应失败处理函数
                {
                    var message = data.message;
                    if(data.code == 200) {
                        var src = "<?= base_url().CDN_AVATAR?>"+message+"?mt="+Math.random();
                        $("#now_avatar").attr('src', src);
                        $("#upload_err").html('上传成功');
                    } else {
                        $("#now_avatar").attr('src', oldSrc);
                        $("#upload_err").html(message);
                    }
                     $("#upload_err").show();
                     $("#img_sub").attr('value', '提交');
                    $("#img_sub").attr('disabled', false);
                }
            }
        )
        
        return false;

    }
</script>
</head>
<body>
	<?$this->load->view('comm/top');?>
	<!-- Page title -->
	<div id="pagetitle">
		<div class="wrapper">
			<h1>用户设置</h1>
			<!-- Quick search box -->
			
		</div>
	</div>
	<!-- End of Page title -->
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper">
				<!-- Left column/section -->
				<section class="column width6 first">					

					<h3>基本信息</h3>
					<!--<div class="box box-info">All fields are required</div>-->
					
					<form id="sampleform" method="post" action="#">

						<fieldset>
							<legend ><?= $userInfo['user_name']; ?></legend>

                                                        <p>
								<label class="required" for="name">姓名:</label><br/>
								<input type="text" id="name" class="half" value="<?= $userInfo['user_rname']; ?>" name="name"/>
								<!--<small>e.g. ui.templates</small>-->
							</p>
                                                        
							<p>
								<label class="required" for="phone">电话：</label><br/>
								<input type="text" id="phone" class="half" value="<?= $userInfo['user_phone']; ?>" name="phone"/>
                                                                <small>e.g. 13812345678 or 021-12312312-121</small>
							</p>
                                                        <p>
								<label class="required" for="email">Email:</label><br/>
								<input type="text" id="email" class="half" value="<?= $userInfo['user_email']; ?>" name="email"/>
							</p>
							<p>
								<label class="required" for="password">性别:</label><br/>
								<select id="sex"  name="sex">
											<option value="0" <? if($userInfo['user_sex'] == 0) { ?> selected <? } ?> >男</option>
											<option value="1" <? if($userInfo['user_sex'] == 1) { ?> selected <? } ?> >女</option>
								</select>
							</p>
							<!--
							<p>
								<label class="required" for="password">Password:</label><br/>
								<input type="password" id="password" class="half" value="" name="password"/>
							</p>

							<p>
								<label class="required" for="password_confirm">Confirm password:</label><br/>
								<input type="password" id="password_confirm" class="half" value="" name="password_confirm"/>
							</p>
                                                        
							
							
							<p>
								<label class="required">Date format:</label><br/>
								<input type="radio" id="dateformat1" class="" value="dmy" name="dateformat"/>
								<label class="choice" for="dateformat1">dd/mm/yyyy</label>
								<input type="radio" id="dateformat2" class="" value="mdy" name="dateformat"/>
								<label class="choice" for="dateformat2">mm/dd/yyyy</label>
							</p>
							
							<p>
								<input type="checkbox" id="terms" class="" value="1" name="terms"/>
								<label class="choice" for="terms">I have read and accept the Terms of Use.</label>
							</p>
							-->
                                                        <p id="basic_err" class="box box-info"  style="display:none"></p>
							<p class="box"><input type="submit" class="btn btn-green big" value="提交" id="basic_sub"/>  <input type="reset" class="btn reset_but" value="取消"/></p>

						

					</form>
                                        <br/>
                                        <fieldset>
							<legend >头像</legend>
                                                        <img class="avatar" onclick='$("#avatar").click();' style ="cursor:pointer;width:150px;height:150px;" id='now_avatar' SRC="<?= base_url().CDN_AVATAR.$userInfo['user_avatar']?>" alt="" /><br/>
                                                        <p  class="browseButton"><img style ="cursor:pointer" src="<?= base_url().CDN_IMG?>upload.png" onclick='$("#avatar").click();'><input type="file" id="avatar" name="avatar" style="display:none"/></p>
                                                        <p id="upload_err" class="box box-info"  style="display:none"></p>
                                                        <p class="box"><input type="button" onclick="ajaxFileUpload()" class="btn btn-green big" id="img_sub" value="提交"/>  <input type="reset" class="btn reset_but" value="取消"/></p>
                                                        
                                        </fieldset>
					
						
						
						
					</form>
				
				</section>
				<!-- End of Left column/section -->
				
				<!-- Right column/section -->
				<aside class="column width2">
					<div id="rightmenu">
						<header>
							<h3>You might also want to check out...</h3>
						</header>
						<dl class="first">
							<dt><img width="16" height="16" alt="Basic styles" SRC="<?= base_url().CDN_IMG?>style.png"></dt>
							<dd><a HREF="styles.html">Basic styles</a></dd>
							<dd class="last">Basic elements and styles</dd>							
							
							<dt><img width="16" height="16" alt="Form validation" SRC="<?= base_url().CDN_IMG?>book.png"></dt>
							<dd><a HREF="../../docs.jquery.com/Plugins/Validation">Form validation</a></dd>
							<dd class="last">jQuery form validation documentation</dd>							
						</dl>
					</div>
					<div class="content-box">
						<header>
							<h3>Quick info</h3>
						</header>
						<section>
							<q>A form is an area that can contain form elements.
							Form elements are elements that allow the user to enter information (like text fields, textarea fields, drop-down menus, radio buttons, checkboxes, etc.) in a form.
							A form is defined with the &lt;form&gt; tag.
							<cite>w3schools.com</cite></q>							
						</section>
					</div>
				</aside>
				<!-- End of Right column/section -->
				
		</div>
		<!-- End of Wrapper -->
	</div>
        
        <script >
	 $("#avatar").change(function () {
                $("#upload_err").html('上传已准备,请点击提交！');
                $("#upload_err").show();
        })
        $(".reset_but").click(function () {
            window.location.href="<?= base_url()?>index.php/home/";
        })
            </script>