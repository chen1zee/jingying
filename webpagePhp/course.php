<?php 
	include_once('../js/h-conn.php');
	$id = 1;
	$sql ="select * from `h-course` where `id`=".$id;
	$result = mysql_query($sql);
	if (mysql_affected_rows() > 0 ) {
		$row = mysql_fetch_assoc($result);
		# code...
	}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>课程详情</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/second/course.css">
	<link rel="stylesheet" href="../css/pub-style.css">

</head>
<body>
	<!-- 导航栏   开始 -->
	<nav class="pub-nav">
		<div class="pub-wrap clearfix">
			<div class="pub-logo"></div>
			<ul class="pub-list">
				<li>
					<a href="###">
						<h2>首页</h2>
					</a>
				</li>
				<li>
					<a href="###" class="pub-active">
						<h2>线下课程</h2>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<h2>在线课程</h2>
					</a>
				</li>
				<li>
					<a href="###">
						<h2>学校</h2>
					</a>
				</li>
				<li>
					<a href="###">
						<h2>互联网头条</h2>
					</a>
				</li>
				<li>
					<a href="###">
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
	
	<!-- 中间主体   开始 -->
	<div class="main">
		<!-- 上面的 -->
		<div class="lesson-list-top clearfix">
			<img src="../img/h-lesson-list.png" class="img-top">
			<!-- 描述 -->
			<div class="describe">
				<p class="p-title">
				<!-- unity3D基础课程A段项目 -->
				<?php echo $row['coursename']; ?>
				</p>
				
				<div class="describe-details clearfix">
					<div class="total-time">
						<h3>总课时</h3>
						<p><?php echo $row['coursetime']; ?>天</p>
					</div>
					<div class="normal-time">
						<h3>标准学习时间</h3>
						<p><?php echo $row['studytime']; ?>天</p>
					</div>
				</div>
			</div>
			<!-- 分享 -->
			<div class="share">
				<span>
					<img src="../img/h-share.png">
					分享
				</span>
				<div class="share-link clearfix">
					<div class="arrow"></div>
					<div class="div-link">
						<a href="javascript:void(0)" class="link1"></a>
						<a href="javascript:void(0)" class="link2"></a>
						<a href="javascript:void(0)" class="link3"></a>
						<a href="javascript:void(0)" class="link4"></a>
						<a href="javascript:void(0)" class="link5"></a>
						<a href="javascript:void(0)" class="link6"></a>
					</div>
				</div>
			</div>
			<!-- 暂时用图片代替 -->
			<img src="../img/h-lesson-time.png" class="lesson-time">
		</div>

		<!-- 中间的 -->
		<div class="lesson-list-middle clearfix">
			<div class="list-right">
				<ul>
					<li class="clearfix">
						<!-- 标题 -->
						<div class="list-title">
							<span>第1课</span>
						
								
 								<?php 
 								include_once('h-lesson.php');
 								echo $row['lessonname'];

 								 ?>
						</div>
						<!-- 内容 -->
						<div class="list-content clearfix">
							<em></em>
							<p><!-- Android 项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android 项目开发实战：语音播报计算器 --> 
								<?php 
 								include_once('h-lesson.php');
 								echo $row['breif'];

 								 ?>
							</p>
							<span>(<?php 
 								include_once('h-lesson.php');
 								echo $row['lessontime'];

 								 ?>分钟)</span>
							<a href="javascript:void(0);">开始学习</a>	
						</div>
					</li>
				
					<li class="clearfix">
						<!-- 标题 -->
						<div class="list-title">
							<span>第2课</span>
							<!-- Android 项目开发实战：语音播报计算器 -->
							<?php 
 								include_once('h-lesson.php');
 								echo $row['lessonname'];

 								 ?>
						</div>
						<!-- 内容 -->
						<div class="list-content clearfix">
							<em></em>
							<p>Android 项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android</p>
							<span>(5分钟)</span>
							<a href="javascript:void(0);">开始学习</a>	
						</div>
					</li>

					<li class="clearfix">
						<!-- 标题 -->
						<div class="list-title">
							<span>第3课</span>
							Android 项目开发实战：语音播报计算器
						</div>
						<!-- 内容 -->
						<div class="list-content clearfix">
							<em></em>
							<p>Android 项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器</p>
							<span>(5分钟)</span>
							<a href="javascript:void(0);">开始学习</a>	
						</div>
					</li>

					<li class="clearfix">
						<!-- 标题 -->
						<div class="list-title">
							<span>第4课</span>
							Android 项目开发实战：语音播报计算器
						</div>
						<!-- 内容 -->
						<div class="list-content clearfix">
							<em></em>
							<p>Android 项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android</p>
							<span>(5分钟)</span>
							<a href="javascript:void(0);">开始学习</a>	
						</div>
					</li>

					<li class="clearfix">
						<!-- 标题 -->
						<div class="list-title">
							<span>第5课</span>
							Android 项目开发实战：语音播报计算器
						</div>
						<!-- 内容 -->
						<div class="list-content clearfix">
							<em></em>
							<p>Android 项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器</p>
							<span>(5分钟)</span>
							<a href="javascript:void(0);">开始学习</a>	
						</div>
					</li>

					<li class="clearfix">
						<!-- 标题 -->
						<div class="list-title">
							<span>第6课</span>
							Android 项目开发实战：语音播报计算器
						</div>
						<!-- 内容 -->
						<div class="list-content clearfix">
							<em></em>
							<p>Android 项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android</p>
							<span>(5分钟)</span>
							<a href="javascript:void(0);">开始学习</a>	
						</div>
					</li>

					<li class="clearfix">
						<!-- 标题 -->
						<div class="list-title">
							<span>第7课</span>
							Android 项目开发实战：语音播报计算器
						</div>
						<!-- 内容 -->
						<div class="list-content clearfix">
							<em></em>
							<p>Android 项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android</p>
							<span>(5分钟)</span>
							<a href="javascript:void(0);">开始学习</a>	
						</div>
					</li>

					<li class="clearfix">
						<!-- 标题 -->
						<div class="list-title">
							<span>第8课</span>
							Android 项目开发实战：语音播报计算器
						</div>
						<!-- 内容 -->
						<div class="list-content clearfix">
							<em></em>
							<p>Android 项目开发实战：语音播报计算器Android项目开发实战：语音播报计算器Android</p>
							<span>(5分钟)</span>
							<a href="javascript:void(0);">开始学习</a>	
						</div>
					</li>
				</ul>
			</div>
			<div class="list-left">
				<!-- 标题 -->
				<div class="list-left-title">
					正在学习的用户
				</div>
				<!-- 分数 -->
				<div class="list-left-content clearfix">
					<ul>
						<li class="title">班级名</li>
						<li>A1020</li>
						<li>B1021</li>
						<li>C1022</li>
						<li>D1023</li>
						<li>A1024</li>
						<li>C1025</li>
						<li>B1026</li>
						<li>D1027</li>
						<li>A1028</li>
						<li>B1029</li>
					</ul>
					<ul>
						<li class="title">用户名</li>
						<li>飞翔的企鹅教育咨</li>
						<li>教育咨询</li>
						<li>安静</li>
						<li>兔子的胡</li>
						<li>飞翔的企鹅教育咨</li>
						<li>教育咨询</li>
						<li>安静</li>
						<li>兔子的胡</li>
						<li>安静</li>
						<li>兔子的胡</li>
					</ul>
					<ul>
						<li>分数</li>
						<li>100</li>
						<li>98</li>
						<li>98</li>
						<li>98</li>
						<li>100</li>
						<li>98</li>
						<li>98</li>
						<li>98</li>
						<li>98</li>
						<li>98</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- 中间主体   结束 -->


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
				<a href="###" class="pub-more">
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

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".share span").mouseenter(function(){
				$('.share-link').css('display','block');
			});

			$(".share-link").mouseleave(function(){
				$('.share-link').css('display','none');
			})


		})
	</script>
</body>
</html>