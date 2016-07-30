<?php 
	include_once('../../js/c-conn.php');
	$sql = 'SELECT * FROM `c-offline-course`';

	mysql_query($sql);
	$course_num = mysql_affected_rows();
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>线下课程</title>
	<link rel="stylesheet" href="../../css/reset.css">
	<link rel="stylesheet" href="../../css/pub-style.css">
	<link rel="stylesheet" href="../../css/second/c-offline_course.css">
</head>
<body>
	<!-- 导航栏   开始 -->
	<nav class="pub-nav">
		<div class="pub-wrap clearfix">
			<div class="pub-logo"></div>
			<ul class="pub-list">
				<li>
					<a href="./index_second.html">
						<h2>首页</h2>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" class="pub-active">
						<h2 class="pub-active">线下课程</h2>
					</a>
				</li>
				<li>
					<a href="../course.html">
						<h2>在线课程</h2>
					</a>
				</li>
				<li>
					<a href="./offline_school.html">
						<h2>学校</h2>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<h2>互联网头条</h2>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<h2>+提问</h2>
					</a>
				</li>

			</ul>

			<a class="pub-userBox">
				<div class="pub-user-head"></div>
				<p>&nbsp;个人中心</p>
				<span class="pub-arrow"></span>
			</a>
		</div>
	</nav>
	<!-- 导航栏   结束 -->
	



	<!-- 正文   开始 -->

	
	<div class="section-bg">


		<!-- 上面的  导航搜索  -->
		<div class="search-bar">
			<div class="sort choose-wrap clearfix">
				<div class="title">
					<span class="icon"></span>
					<span>分类：</span>
				</div>
				<div class="list clearfix">
					<a href="###">unity 3D</a>
					<a href="###">iOS</a>
					<a href="###">Android</a>
					<a href="###">Html5</a>
				</div>
			</div>
			<div class="address choose-wrap clearfix">
				<div class="title">
					<span class="icon"></span>
					<span>区域：</span>
				</div>
				<div class="list clearfix">
					<a href="###">朝阳区</a>
					<a href="###">海淀区</a>
					<a href="###">西城区</a>
					<a href="###">东城区</a>
				</div>
			</div>
		</div>

<?php 
	'insert'
 ?>
		<!-- 搜索结果 -->
		<div class="result-bg">
			<div class="rank-style clearfix">
				<div class="list" id="tabList">
					<a href="###" class="active" id="default">
						<span>默认</span>
					</a>
					<a href="###" id="sellSort">
						<span>销量</span>
						<i class="iconfont">&#xe6b6;</i>
					</a>
					<a href="###" id="priceSort">
						<span>价格</span>
						<i class="iconfont">&#xe6b6;</i>
					</a>
					<a href="###" id="goodSort">
						<span>好评</span>
						<i class="iconfont">&#xe6b6;</i>
					</a>
					<div class="green-bar" id="greenBar"></div>
				</div>
				<p class="totolNum">
					共 
					<span id="totolNum">
						<?php 
							echo $course_num;
						 ?>
					</span>
					 条
				</p>
			</div>

			<ul class="result-list" id="resultList">
				<!-- <li class="clearfix">
					<a href="###" class="item-box">
						<div class="top-wrap">
							<img src="../../img/c-course1.png" alt="">
							<span>&nbsp;7.6分&nbsp;</span>
						</div>
						<p class="title">
							英语零基础直达四级水平新概念
						</p>
						<p class="address">
							【南京市】新街口中山南路8号苏豪大厦
						</p>
						<p class="about-sell clearfix">
							<span class="now-price">
								&yen;1000&nbsp;
							</span>
							<del>&yen;100</del>
							<span class="number">
								已售129033
							</span>
						</p>
					</a>
					<a href="###" class="item-box">
						<div class="top-wrap">
							<img src="../../img/c-course1.png" alt="">
							<span>&nbsp;7.6分&nbsp;</span>
						</div>
						<p class="title">
							英语零基础直达四级水平新概念
						</p>
						<p class="address">
							【南京市】新街口中山南路8号苏豪大厦
						</p>
						<p class="about-sell clearfix">
							<span class="now-price">
								&yen;1000&nbsp;
							</span>
							<del>&yen;100</del>
							<span class="number">
								已售129033
							</span>
						</p>
					</a>
					<a href="###" class="item-box">
						<div class="top-wrap">
							<img src="../../img/c-course1.png" alt="">
							<span>&nbsp;7.6分&nbsp;</span>
						</div>
						<p class="title">
							英语零基础直达四级水平新概念
						</p>
						<p class="address">
							【南京市】新街口中山南路8号苏豪大厦
						</p>
						<p class="about-sell clearfix">
							<span class="now-price">
								&yen;1000&nbsp;
							</span>
							<del>&yen;100</del>
							<span class="number">
								已售129033
							</span>
						</p>
					</a>
					<a href="###" class="item-box">
						<div class="top-wrap">
							<img src="../../img/c-course1.png" alt="">
							<span>&nbsp;7.6分&nbsp;</span>
						</div>
						<p class="title">
							英语零基础直达四级水平新概念
						</p>
						<p class="address">
							【南京市】新街口中山南路8号苏豪大厦
						</p>
						<p class="about-sell clearfix">
							<span class="now-price">
								&yen;1000&nbsp;
							</span>
							<del>&yen;100</del>
							<span class="number">
								已售129033
							</span>
						</p>
					</a>
					<a href="###" class="item-box">
						<div class="top-wrap">
							<img src="../../img/c-course1.png" alt="">
							<span>&nbsp;7.6分&nbsp;</span>
						</div>
						<p class="title">
							英语零基础直达四级水平新概念
						</p>
						<p class="address">
							【南京市】新街口中山南路8号苏豪大厦
						</p>
						<p class="about-sell clearfix">
							<span class="now-price">
								&yen;1000&nbsp;
							</span>
							<del>&yen;100</del>
							<span class="number">
								已售129033
							</span>
						</p>
					</a>
				</li> -->

			</ul>

			<div class="paganation" id="paganation">
				<a href="###" id="prev">上一页</a>
				<ul class="clearfix">
					<!-- <li class="active">1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
					<li>9</li>
					<li class="none">...</li>
					<li>100</li> -->
				</ul>
				<a href="###" id="next">下一页</a>

			</div>

		</div>


	</div>
	
	



	<!-- 正文  结束 -->






	<!-- 页脚   开始 -->
	<footer class="pub-foot">
		<div class="pub-foot-wrap clearfix">
			<div class="pub-foot-top-link">
				<p class="title">友情链接</p>
				<ul class="pub-foot-top-list">
					<li>
						<a href="###">
							蓝鸥科技
						</a>
					</li>
					<li>
						<a href="###">
							蓝鸥科技
						</a>
					</li>
					<li>
						<a href="###">
							蓝鸥科技
						</a>
					</li>
					<li>
						<a href="###">
							蓝鸥科技
						</a>
					</li>
					<li>
						<a href="###">
							蓝鸥科技
						</a>
					</li>
					<li>
						<a href="###">
							蓝鸥科技
						</a>
					</li>
					<li>
						<a href="###">
							蓝鸥科技
						</a>
					</li>
					<li>
						<a href="###">
							蓝鸥科技
						</a>
					</li>
				</ul>
				<a href="../link1.html" class="pub-more">
					<p>更多&nbsp;&nbsp;</p>
					<span></span>
				</a>
			</div>
			<div class="pub-foot-left-wrap">
				<dl class="clearfix">
					<dt>我们的实验室</dt>
					<dd>
						<a href="###">在线编程</a>
					</dd>
					<dd>
						<a href="###">奖学制度</a>
					</dd>
					<dd>
						<a href="###">在线班级</a>
					</dd>
					<dd>
						<a href="###">课后60分钟考试</a>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>关于我们</dt>
					<dd>
						<a href="###">精英吧简介</a>
					</dd>
					<dd>
						<a href="###">联系我们</a>
					</dd>
					<dd>
						<a href="###">加入我们</a>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>现有课程</dt>
					<dd>
						<a href="###">iOS</a>
					</dd>
					<dd>
						<a href="###">Android</a>
					</dd>
					<dd>
						<a href="###">unity3D</a>
					</dd>
					<dd>
						<a href="###">H5</a>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>帮助</dt>
					<dd>
						<a href="###">联系客服</a>
					</dd>
					<dd>
						<a href="###">版权声明</a>
					</dd>
					<dd>
						<a href="###">法律声明</a>
					</dd>
					<dd>
						<a href="###">服务条款</a>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt>反馈方式</dt>
					<dd>电子邮箱：help@xxxxx.com</dd>
					<dd>微信反馈：精英吧微信公众号</dd>
					<dd class="pub-img"></dd>
				</dl>
			</div>
			<div class="pub-right-wrap">
				<p class="pub-title">
					精英吧APP扫描下载
				</p>
				<div class="pub-qrcode"></div>
			</div>
		</div>
	</footer>
	<p class="pub-final-end">
		蓝鸥科技有限公司©1997-2016 | 北京市海淀区清河毛纺路路南甲36号金五星商业大厦5层
	</p>


	<!-- 页脚   结束 -->


	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/second/c-offline_course.js"></script>



</body>
</html>