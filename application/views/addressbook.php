<script type="text/javascript" SRC="<?= base_url().CDN_JS?>jquery.dataTables.min.js"></script>
<script type="text/javascript" SRC="<?= base_url().CDN_JS?>ajaxfileupload.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	/* setup navigation, content boxes, etc... */
	Administry.setup();
	
	/* datatable */
	$('#example').dataTable();
	
	/* expandable rows */
	Administry.expandableRows();
});

</script>
</head>
<body>
	<!-- Header -->
	<?$this->load->view('comm/top');?>
	<!-- End of Header -->
	<!-- Page title -->
	<div id="pagetitle">
		<div class="wrapper">
			<h1>通讯录</h1>
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
					
					<h3><?= $title?></h3>
					<p><? if($show == 'all' || $show == 'private' ) { ?><input type="button" class="btn btn-green address_act" value="公司通讯录" act="1"/> <? } if($show == 'all' || $show == 'company' ) { ?><input type="button" class="btn btn-green address_act" value="私人通讯录" act="2" /> <? } ?> <? if($show == 'company') {?><input type="button" class="btn btn-green address_act" value="导入通讯录" act="upload" /><?}?></p>
					<? if($show == 'company') {?>
                                            <div id="upload_esv_div" style="display:none">
                                                            <p  class="browseButton"><img style ="cursor:pointer" src="<?= base_url().CDN_IMG?>upload.png" onclick='$("#address_book").click();'><input type="file" id="address_book" name="address_book" style="display:none"/></p>
                                                            <p><a href="<?= base_url().CDN_CSV?>eg.csv" >下载CSV模板</a></p>
                                                            <p id="upload_err" class="box box-info"  style="display:none"></p>
                                                            <p class="box"style="width:160px"><input type="button" onclick="ajaxFileUpload()" class="btn btn-green big" id="address_sub" value="提交"/>  <input type="reset" class="btn reset_but" value="取消" onclick="$('#upload_esv_div').hide()"/></p>
                                            </div>
                                        <? } ?>
                                        <table class="display stylized" id="example">
						<thead>
							<tr>
								<th>姓名</th>
								<th>手机</th>
								<th>邮箱</th>
								<th>属性</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr class="gradeB">
								<td>施磊</td>
								<td>131333133</td>
								<td>slzszs@126.com</td>
								<td class="center">私人</td>
								<td class="center"><input type="submit" value="编辑" class="btn btn-green"> <input type="submit" value="删除" class="btn btn-red"></td>
							</tr>


							<tr class="gradeB">
								<td>Misc</td>
								<td>Dillo 0.8</td>
								<td>Embedded devices</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr class="gradeB">
								<td>Misc</td>
								<td>IE Mobile</td>
								<td>Windows Mobile 6</td>
								<td class="center">-</td>
								<td class="center">C</td>
							</tr>
							<tr class="gradeB">
								<td>Other browsers</td>
								<td>All others</td>
								<td>-</td>
								<td class="center">-</td>
								<td class="center">U</td>
							</tr>
						</tbody>
						
					</table>
					
					<div class="clear">&nbsp;</div>
					
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
							
							<dt><img width="16" height="16" alt="" SRC="<?= base_url().CDN_IMG?>book.png"></dt>
							<dd><a HREF="../../www.datatables.net/usage/index.htm">Datatables</a></dd>
							<dd class="last">Datatable documentation</dd>							
						</dl>
					</div>
					<div class="content-box">
						<header>
							<h3>Tables</h3>
						</header>
						<section>
							Try other alternatives:<br/>
							<dl>
								<dt></dt>
								<dd><a HREF="../../www.noupe.com/javascript/jquery-html-table-toolbox.html">jQuery HTML Table Toolbox</a></dd>
							</dl>
						</section>
					</div>
				</aside>
				<!-- End of Right column/section -->
				
		</div>
		<!-- End of Wrapper -->
	</div>
        <script>
            function ajaxFileUpload()
    {
        $("#address_book")
        .ajaxStart(function(){
           // $(this).attr('src', '<?= base_url().CDN_IMG?>nyro/upload.gif');
            $("#address_sub").attr('value', '操作中...');
            $("#address_sub").attr('disabled', true);
        })//开始上传文件时显示一个图片
        
        $.ajaxFileUpload
        (
            {
                url:'<?= base_url()?>index.php/addressbook/uploadCsv',//用于文件上传的服务器端请求地址
                secureuri:false,//一般设置为false
                fileElementId:'address_book',//文件上传空间的id属性  <input type="file" id="file" name="file" />
                dataType: 'json',//返回值类型 一般设置为json
                success: function (data, status)  //服务器成功响应处理函数
                {
                    var message = data.message;
                    if(data.code == 200) {
                        //var src = "<?= base_url().CDN_AVATAR?>"+message+"?mt="+Math.random();
                        //$("#now_avatar").attr('src', src);
                        $("#upload_err").html(message);
                    } else {
                        //$("#now_avatar").attr('src', oldSrc);
                        $("#upload_err").html(message);
                    }
                    $("#upload_err").show();
                    $("#address_sub").attr('value', '提交');
                    $("#address_sub").attr('disabled', false);
                },
                error: function (data)//服务器响应失败处理函数
                {
                   var message = data.message;
                    if(data.code == 200) {
                        $("#upload_err").html(message);
                    } else {
                        //$("#now_avatar").attr('src', oldSrc);
                        $("#upload_err").html(message);
                    }
                    $("#upload_err").show();
                    $("#address_sub").attr('value', '提交');
                    $("#address_sub").attr('disabled', false);
                }
            }
        )
        
        return false;

    }
            $('.address_act').click(function () {
                var act = $(this).attr('act');
                if(act != 'upload') {
                    window.location.href = "<?= base_url()?>index.php/addressbook/index/"+act;
                } else {
                    $('#upload_esv_div').show();
                }
            });
            $("#address_book").change(function () {
                $("#upload_err").html('上传已准备,请点击提交！');
                $("#upload_err").show();
        });
        </script>