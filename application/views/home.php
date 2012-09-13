<script type="text/javascript">
$(document).ready(function(){
	
	/* setup navigation, content boxes, etc... */
	Administry.setup();
	
	/* progress bar animations - setting initial values */
	Administry.progress("#progress1", 1, 5);
	Administry.progress("#progress2", 2, 5);
	Administry.progress("#progress3", 2, 5);

	/* flot graphs */
	var sales = [{
		label: '正常',
		data: [[1, 0],[2,0],[3,0],[4,0],[5,0],[6,0],[7,29],[8,28],[9,0],[10,0],[11,0],[12,0]]
	},{
		label: '迟到',
		data: [[1, 0],[2,0],[3,0],[4,0],[5,0],[6,0],[7,1],[8,2],[9,0],[10,0],[11,0],[12,0]]
	}
	];

	var plot = $.plot($("#placeholder"), sales, {
		bars: { show: true, lineWidth: 1 },
		legend: { position: "nw" },
		xaxis: { ticks: [[1, "1月"], [2, "2月"], [3, "3月"], [4, "4月"], [5, "5月"], [6, "6月"], [7, "7月"], [8, "8月"], [9, "9月"], [10, "10月"], [11, "11月"], [12, "12月"]] },
		yaxis: { min: 0, max: 31 },
		grid: { color: "#666" },
		colors: ["#0a0", "#f00"]			
    });


});
</script>
</head>
<body>
    <?$this->load->view('comm/top');?>
	<!-- Page title -->
	<div id="pagetitle">
		<div class="wrapper">
			<h1>工作台</h1>
			<!-- Quick search box -->
			<form action="" method="get"><input class="" type="text" id="q" name="q" /></form>
		</div>
	</div>
	<!-- End of Page title -->
	
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper">
				<!-- Left column/section -->
				<section class="column width6 first">
				
					<div class="colgroup leading">
						<div class="column width3 first">
							<h3><?if ($date) { ?>
                                                            欢迎 回来, 
                                                                <? } else{ ?>
                                                                    欢迎首次来到 CS :
                                                                            <? } ?><a href="#"><?= $userInfo['user_name']?></a></h3>
							<p>
								你是第1234567位用户
							</p>
						</div>
						<div class="column width3">
                                                    <?if ($date) {?>
							<h4>最后登录</h4>
							<p>
								<?= $date['date']?> <?= $date['week']?><br />
								ip : <?= $date['ip']?>
							</p>
                                                        <?}?>
						</div>
					</div>
					
					<div class="colgroup leading">
						<div class="column width3 first">
							<h4>未收快递: <a href="#">10</a></h4>
							<hr/>
							<table class="no-style full">
								<tbody>
									<tr>
										<td>123123</td>
										<td class="ta-right"><a href="#">2012/9/12</a></td>
										<td class="ta-right">收取</td>
									</tr>
									<tr>
										<td>123123</td>
										<td class="ta-right"><a href="#">2012/9/12</a></td>
										<td class="ta-right">收取</td>
									</tr>
									<tr>
										<td>123123</td>
										<td class="ta-right"><a href="#">2012/9/12</a></td>
										<td class="ta-right">收取</td>
									</tr>
									<tr>
										<td>123123</td>
										<td class="ta-right"><a href="#">2012/9/12</a></td>
										<td class="ta-right">收取</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="column width3">
							<h4>未完成备注: <a href="#">10</a></h4>
							<hr/>
							<table class="no-style full">
								<tbody>
									<tr>
										<td>9:00</td>
										<td class="ta-right"><a href="#">开会</a></td>
                                                                                <td class="ta-right">stone</td>
										<td class="ta-right">完成</td>
									</tr>
									<tr>
										<td>10:00</td>
										<td class="ta-right"><a href="#">webcaht</a></td>
                                                                                <td class="ta-right">UED</td>
										<td class="ta-right">完成</td>
									</tr>
									<tr>
										<td>11:00</td>
										<td class="ta-right"><a href="#">开会</a></td>
                                                                                <td class="ta-right">stone</td>
										<td class="ta-right">完成</td>
									</tr>
									<tr>
										<td>12:00</td>
										<td class="ta-right"><a href="#">开会</a></td>
                                                                                <td class="ta-right">stone</td>
										<td class="ta-right">完成</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				
					<div class="colgroup leading">
						<div class="column width3 first">
							<h4>备注完成</h4>
							<hr/>
							<table class="no-style full">
								<tbody>
									<tr>
										<td>已完成</td>
										<td class="ta-right">1/5</td>
										<td><div id="progress1" class="progress full progress-green"><span><b></b></span></div></td>
									</tr>
									<tr>
										<td>未完成</td>
										<td class="ta-right">2/5</td>
										<td><div id="progress2" class="progress full progress-blue"><span><b></b></span></div></td>
									</tr>
									<tr>
										<td>忽略</td>
										<td class="ta-right">2/5</td>
										<td><div id="progress3" class="progress full progress-red"><span><b></b></span></div></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="column width3">
							<h4>出勤率</h4>
							<hr/>
							<p><b>考勤</b></p>
							<div id="placeholder" style="height:100px"></div>
						</div>
					</div>
					<div class="clear">&nbsp;</div>
				
				</section>

				<aside class="column width2">
					<div id="rightmenu">
						<header>
							<h3>最近操作</h3>
						</header>
						<dl class="first">
							<dt><img width="16" height="16" alt="" SRC="img/key.png"></dt>
							<dd><a href="#">添加了3个备注</a></dd>
							<dd class="last">点击查看详情</dd>
							
							<dt><img width="16" height="16" alt="" SRC="img/help.png"></dt>
							<dd><a href="#">添加一个会议邀请</a></dd>
							<dd class="last">点击查看详情</dd>
						</dl>
					</div>
					<div class="content-box">
						<header>
							<h3>快速备注</h3>
						</header>
						<section>
							<dl>
								<dt>Maximize every interaction with a client</dt>
								<dd><a href="#">Read more</a></dd>
								<dt>Diversification for Small Business Owners</dt>
								<dd><a href="#">Read more</a></dd>
							</dl>
						</section>
					</div>
				</aside>
                         
				<!-- End of Right column/section -->
				
		</div>
		<!-- End of Wrapper -->
	</div>