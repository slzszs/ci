<!-- Header -->
	<header id="top">
		<div class="wrapper">
			<!-- Title/Logo - can use text instead of image -->
			<div id="title"><img SRC="logo.png" alt="Company Social" /><!--<span>Administry</span> demo--></div>
			<!-- Top navigation -->
			<div id="topnav">
				<a href="#"><img class="avatar" SRC="<?= base_url().CDN_AVATAR.$userInfo['user_avatar']?>" alt="" /></a>
				Logged in as <b><?= $userInfo['user_name']?></b>
				<span>|</span> <a href="<?= base_url()?>index.php/userset/">设置</a>
				<span>|</span> <a href="<?= base_url()?>index.php/login/loginout">退出</a><br />
				<small>You have <a href="#" class="high"><b>1</b> new message!</a></small>
			</div>
			<!-- End of Top navigation -->
			<!-- Main navigation -->
			<nav id="menu">
				<ul class="sf-menu">
					<li class="current"><a HREF="<?= base_url()?>index.php/home">工作台</a></li>
					<li>
						<a HREF="styles.html">通讯录</a>
						<ul>
							<li>
								<a HREF="styles.html">公司通讯录</a>
							</li>
							<li>
								<a href="#">个人通讯录</a>
								<!--<ul>
									<li><a HREF="samples-files.html">Files</a></li>
									<li><a HREF="samples-products.html">Products</a></li>
								</ul>-->
							</li>
						</ul>
					</li>
					<li><a HREF="tables.html">快递管理</a></li>
					<li><a HREF="forms.html">订餐管理</a></li>	
					<li><a HREF="graphs.html">会议邀请</a></li>
                                        <li><a HREF="graphs.html">备注管理</a></li>
				</ul>
			</nav>
			<!-- End of Main navigation -->
			<!-- Aside links -->
			<aside><b>简体中文</b> </aside>
			<!-- End of Aside links -->
		</div>
	</header>
	<!-- End of Header -->