<!-- Header -->
	<header id="top">
		<div class="wrapper">
			<!-- Title/Logo - can use text instead of image -->
			<div id="title"><img SRC="logo.png" alt="Company Social" /><!--<span>Administry</span> demo--></div>
			<!-- Top navigation -->
			<div id="topnav">
				<a href="#"><img class="avatar" SRC="<?= base_url().CDN_IMG?>user_32.png" alt="" /></a>
				Logged in as <b><?= $userInfo['user_name']?></b>
				<span>|</span> <a href="#">设置</a>
				<span>|</span> <a href="#">退出</a><br />
				<small>You have <a href="#" class="high"><b>1</b> new message!</a></small>
			</div>
			<!-- End of Top navigation -->
			<!-- Main navigation -->
			<nav id="menu">
				<ul class="sf-menu">
					<li class="current"><a HREF="<?= base_url()?>index.php/home">工作台</a></li>
					<li>
						<a HREF="styles.html">Styles</a>
						<ul>
							<li>
								<a HREF="styles.html">Basic Styles</a>
							</li>
							<li>
								<a href="#">Sample Pages...</a>
								<ul>
									<li><a HREF="samples-files.html">Files</a></li>
									<li><a HREF="samples-products.html">Products</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a HREF="tables.html">Tables</a></li>
					<li><a HREF="forms.html">Forms</a></li>	
					<li><a HREF="graphs.html">Graphs</a></li>	
				</ul>
			</nav>
			<!-- End of Main navigation -->
			<!-- Aside links -->
			<aside><b>English</b> &middot; <a href="#">Spanish</a> &middot; <a href="#">German</a></aside>
			<!-- End of Aside links -->
		</div>
	</header>
	<!-- End of Header -->