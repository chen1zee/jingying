<?php 
	include_once("../.././js/o-conn.php");
	$sql = "select * from `o-personalCenter`";
	//limit startIndex,length;
	$result = mysql_query($sql);
	if (mysql_affected_rows() > 0) {

		$row = mysql_fetch_assoc($result);
		# code...
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/o-personalCenter-echarts.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/font/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/o-personalCenter-mean.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/o-personalCenter-studyGraph.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/o-personalCenter-classGraph.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/homework.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/o-personalCenter-account.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/o-personalCenter-coupon.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/personalCenter/o-personalCenter-studentAtSchool.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/pub-style.css"/>
		<title>personalCenter</title>
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
						<a href="###">
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
	
	
	
		<article>
			<div id="top">
				<div id="top-left">
					<!-- <div id="avator"></div> -->
<?php 
	$sql = "select * from `o-personalCenter` where `username`= '快枪手' ";
	$result = mysql_query($sql);
	if (mysql_affected_rows() > 0) {
		$row = mysql_fetch_assoc($result);
		echo "<div id='avator' style='background:url(".$row["avatar"].") no-repeat center center'></div>";
	}
 ?>					
					<!-- <p id="name">快枪手</p> -->
					<?php 
						
			echo "<p id='name'>".$row["username"]."</p>";
	
					 ?>
					<button id="change-name">修改</button>
				</div>
				<div id="top-right">
					<p>学习情况：</p>
					<ul class="study-list">
						<!-- <li>
							<p class="study-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
							<p class="study-time">4分钟/10分钟</p>
							<div class="grey-bar">
								<div class="green-bar"></div>
							</div>
							<p class="score">当前分数:98分</p>
						</li>
						<li>
							<p class="study-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
							<p class="study-time">4分钟/10分钟</p>
							<div class="grey-bar">
								<div class="green-bar"></div>
							</div>
							<p class="score">当前分数:98分</p>
						</li>
						<li>
							<p class="study-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
							<p class="study-time">4分钟/10分钟</p>
							<div class="grey-bar">
								<div class="green-bar"></div>
							</div>
							<p class="score">当前分数:98分</p>
						</li> -->
<?php
	$sql = "select * from `o-personalCenter-top`";
	//limit startIndex,length;
	$result = mysql_query($sql);
	if(mysql_affected_rows() > 0) {
		while($row = mysql_fetch_assoc($result)) {
			echo "<li>";
			echo "<p class='study-name'>".$row["title"]."</p>";
			echo "<p class='study-time'>".$row["time"]."</p>";
			echo "<div class='grey-bar'>";
			echo "<div class='green-bar' style='width:".$row["time-percent"]."%'></div>";
			echo "</div>";
			echo "<p class='score'>当前分数:".$row["score"]."分</p>";
			echo "</li>";
		}
	}
?>
					</ul>
				</div>
			</div>
			
			<div id="middle">
				<ul id="middle-left">
					<li class="onclick-middle-left">我的学习曲线</li>
					<li>我所在的班级</li>
					<li>我的作业</li>
					<li>账号设置</li>
					<li>优惠码</li>
					<li>我是在校生</li>
				</ul>
				<!--     first  -->
				<div class="middle-right">
					<div class="middle-right-1">
						<ul class="lesson clearfix">
							<li class="onclick-lesson-li">IOS课程</li>
							<li>Android课程</li>
						</ul>
						<div class="in">
							<p>学习曲线：（你当前所在班级为A班）</p>
<?php 
	$sql = "select * from `o-personalCenter` where `username`= '快枪手' ";
	$result = mysql_query($sql);
	if (mysql_affected_rows() > 0) {
		$row = mysql_fetch_assoc($result);
		echo "<img src='".$row["myStudyCurve-IOS"]."'/>";
	}
 ?>
						</div>
						<div >
							<p>学习曲线：（你当前所在班级为A班）</p>
<?php 
	$sql = "select * from `o-personalCenter` where `username`= '快枪手' ";
	$result = mysql_query($sql);
	if (mysql_affected_rows() > 0) {
		$row = mysql_fetch_assoc($result);
		echo "<img src='".$row["myStudyCurve-Android"]."'/>";
	}
 ?>
						</div>
					</div>
					<div class="middle-right-2">
						<ul class="lesson1">
							<li class="onclick-lesson1-li">IOS课程</li>
							<li>Android课程</li>
						</ul>
						<div class="lesson1-details in">
							<p>IOS未来这里是记录你学习曲线的地方</p>
							<p>将包含你的学习分数，学习时间等状态，<a href="###">挑选一门课程</a> ，开始学习吧！</p>
						</div>
						<div class="lesson1-details">
							<p>Android未来这里是记录你学习曲线的地方</p>
							<p>将包含你的学习分数，学习时间等状态，<a href="###">挑选一门课程</a> ，开始学习吧！</p>
						</div>
					</div>
				</div>
				
				
				<div class="middle-right">
					<div class="middle2-right-1">
						<ul class="lesson clearfix">
							<li class="onclick-lesson-li">IOS课程</li>
							<li>Android课程</li>
						</ul>
						<div class="in">
							<p>学习曲线：（你当前所在班级为A班）</p>
<?php 
	$sql = "select * from `o-personalCenter` where `username`= '快枪手' ";
	$result = mysql_query($sql);
	if (mysql_affected_rows() > 0) {
		$row = mysql_fetch_assoc($result);
		echo "<img src='".$row["myStudyCurve-Android"]."'/>";
	}
 ?>
						</div>
						<div >
							<p>学习曲线：（你当前所在班级为A班）</p>
							<img src=""/>
						</div>
					</div>
					<div class="middle2-right-2">
						<ul class="lesson1">
							<li class="onclick-lesson1-li">IOS课程</li>
							<li>Android课程</li>
						</ul>
						<div class="lesson1-details in">
							<p>IOS未来这里是记录你学习曲线的地方</p>
							<p>将包含你的学习分数，学习时间等状态，<a href="###">挑选一门课程</a> ，开始学习吧！</p>
						</div>
						<div class="lesson1-details">
							<p>Android未来这里是记录你学习曲线的地方</p>
							<p>将包含你的学习分数，学习时间等状态，<a href="###">挑选一门课程</a> ，开始学习吧！</p>
						</div>
					</div>
				</div>
				
				
				<div class="middle-right">
					<div class="middle3-right">
						<ul class="middle3-lesson">
							<li class="onclick-middle3-lesson-li">IOS课程</li>
							<li>Android课程</li>
						</ul>
						<ul class="lesson-list">
							<li class="in">
							

				<?php 
					$sql = "select * from `o-personalCenter-myHomework-lesson` where `username`= '快枪手' ";
					$result = mysql_query($sql);
					$count = 0;
					if(mysql_affected_rows() > 0) {
						while($row = mysql_fetch_assoc($result)) {
							
							if($count % 10 == 0) {
								echo "<div>第".($count + 1)."课~第".($count + 10)."课</div>";
								echo "<ul class='class-list'>";
							}
							echo "<li>";
							echo "<a href='###'>";
							echo "<p class='class-name'>".$row["title"]."</p>";
							echo "</a>";
							echo "<p class='class-completion'>".$row["complete"]."</p>";
							echo "<p class='class-like'><i class='iconfont icon-unie669'></i>".$row["likeNum"]."</p>";
							echo "</li>";
							if($count % 10 == 9) {
								echo "</ul>";
							}
							$count++;
						}
					}
				 ?>
								<!-- <ul class="class-list">
							
							<li>
								<a href="###">
									<p class="class-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
								</a>
								
								<p class="class-completion">完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>8823</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">Android 项目开发实战：语音播报计算器</p>
								</a>
								<p class="class-completion">未完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>765</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
								</a>
								
								<p class="class-completion">完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>8823</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">Android 项目开发实战：语音播报计算器</p>
								</a>
								<p class="class-completion">未完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>765</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
								</a>
								
								<p class="class-completion">完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>8823</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">Android 项目开发实战：语音播报计算器</p>
								</a>
								<p class="class-completion">未完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>765</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
								</a>
								
								<p class="class-completion">完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>8823</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">Android 项目开发实战：语音播报计算器</p>
								</a>
								<p class="class-completion">未完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>765</p>
							</li>
						</ul>
								<ul class="class-list">
							<p>第一课~第十课</p>
							<li>
								<a href="###">
									<p class="class-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
								</a>
								
								<p class="class-completion">完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>8823</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">Android 项目开发实战：语音播报计算器</p>
								</a>
								<p class="class-completion">未完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>765</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
								</a>
								
								<p class="class-completion">完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>8823</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">Android 项目开发实战：语音播报计算器</p>
								</a>
								<p class="class-completion">未完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>765</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
								</a>
								
								<p class="class-completion">完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>8823</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">Android 项目开发实战：语音播报计算器</p>
								</a>
								<p class="class-completion">未完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>765</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">网页开发 （HTML+CSS+JavaScript 从入门到精通）【职坐标】</p>
								</a>
								
								<p class="class-completion">完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>8823</p>
							</li>
							<li>
								<a href="###">
									<p class="class-name">Android 项目开发实战：语音播报计算器</p>
								</a>
								<p class="class-completion">未完成</p>
								<p class="class-like"><i class="iconfont lovenarmal">&#xe623;</i>765</p>
							</li>
							
						</ul> -->
							</li>
							<li>
								
<?php 
					$sql = "select * from `o-personalCenter-myHomework-lesson1` where `username`= '快枪手' ";
					$result = mysql_query($sql);
					$count = 0;
					if(mysql_affected_rows() > 0) {
						while($row = mysql_fetch_assoc($result)) {
							
							if($count % 10 == 0) {
								echo "<div>第".($count + 1)."课~第".($count + 10)."课</div>";
								echo "<ul class='class-list'>";
							}
							echo "<li>";
							echo "<a href='###'>";
							echo "<p class='class-name'>".$row["title"]."</p>";
							echo "</a>";
							echo "<p class='class-completion'>".$row["complete"]."</p>";
							echo "<p class='class-like'><i class='iconfont icon-".$row["liked"]."'></i>".$row["likeNum"]."</p>";
							echo "</li>";
							if($count % 10 == 9) {
								echo "</ul>";
							}
							$count++;
						}
					}
 ?>

							</li>
						</ul>
						
					</div>
					
				</div>
			

				
				<div class="middle-right inline">
					<div class="middle4-right">
						<p>请重设您的账号密码</p>
						<div id="pwd-current">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前密码：<input type="password" name="pwd-current" /><div class="trueFalse"></div><span class="tips wrong-pwd">密码错误</span><span class="tips input-pwd">请输入当前密码</span></div>

						<div id="pwd-new">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新密码：<input type="password" name="pwd-new"/><div class="trueFalse"></div><span class="tips">密码长度在6~32个字符之间</span><span class="tips">请输入新密码</span><span class="tips pwd-same">新密码与旧密码一致,请重新输入</span> <span class="tips pwd-notWorked">密码长度在6~12的数字,字母,下划线</div>

						<div id="pwd-confirm">再次确认密码：<input type="password" name="pwd-confirm"/><div class="trueFalse"></div><span class="tips pwd-notSame">密码输入不一致</span><span class="tips">请再次输入新密码</span></div>
						<input type="submit" name="" id="submit-pwd" value="提交" />
					</div>
				</div>
				
				
				
				<div class="middle-right" style="padding-bottom: 50px;">
					<div class="middle5-right">
						<p>恭喜你以友谊的成绩完成了学科学习，一下是你的奖学金，助你在大神的道路上一臂之力，一直鼓励！</p>
						<ul class="coupon-list">
							<li>
								<p id="coupon-num">3000.00 <span>元</span> </p>
								<p>来源：IOS科目</p>
								<p>可用范围：可抵扣蓝欧IOS就业班学费及报名费</p>
								<p id="coupon-time">有效期：2015年10月30日-2015年11月30日</p>
							</li>
							<li>
								<p id="coupon-num">3000.00 <span>元</span> </p>
								<p>来源：IOS科目</p>
								<p>可用范围：可抵扣蓝欧IOS就业班学费及报名费</p>
								<p id="coupon-time">有效期：2015年10月30日-2015年11月30日</p></li>
							<li class="coupon-used">
								<p id="coupon-num">3000.00 <span>元</span> </p>
								<p>来源：IOS科目</p>
								<p>可用范围：可抵扣蓝欧IOS就业班学费及报名费</p>
								<p id="coupon-time">有效期：2015年10月30日-2015年11月30日</p>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- ---------------------------------fifth------------------------------------- -->
				
				<div class="middle-right">
					<div class="middle6-right">
						<p>在校生信息</p>
						<ul class="studen-info">
							<li>
								<span style="margin-left: 28px;">姓名：</span>
								<input type="" name="" id="" value="" />
							</li>
							<li>
								<span>所在学校：</span>
								<input type="" name="" id="" value="" />
							</li>
							<li>
								<span>所在系别：</span>
								<input type="" name="" id="" value="" />
							</li>
							<li>
								<span>所在专业：</span>
								<input type="" name="" id="" value="" />
							</li>
							<li>
								<span>所在班级：</span>
								<input type="" name="" id="" value="" />
							</li>
						</ul>
						<input type="submit" id="submit-student-info" name="" value="提交并保存"/>
					</div>
				</div>
			</div>
			
		</article>
		
				
		
		<!-- 页脚   开始 
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
		<script src="../../js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../../js/echarts.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../../js/personalCenter/o-personalCenter-changePwd.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		
//		----------------------------------first-----------------------------------------------
			$("article").css("height",$("#top").height()+$(".middle-right").height()+150+"px");
			$("#middle-left li").on("click",function(){
				$("#middle-left li").removeClass("onclick-middle-left");
				$(this).addClass("onclick-middle-left");
				$(".middle-right:eq("+$(this).index()+")").addClass("inline").siblings().removeClass("inline");
				$("article").css("height",$("#top").height()+$(".middle-right:eq("+$(this).index()+")").height()+150+"px");
			})
			$(".lesson li").on("click",function(){
				$(".lesson li").removeClass("onclick-lesson-li");
				$(this).addClass("onclick-lesson-li");
				$(".middle-right-1 div").removeClass("in");
				$(".middle-right-1 div:eq("+$(this).index()+")").addClass("in");
			});
			
			
//		----------------------------------second-----------------------------------------------			
			$(".lesson1 li").on("click",function(){
				$(".lesson1 li").removeClass("onclick-lesson1-li");
				$(this).addClass("onclick-lesson1-li");
				$(".middle-right-2 div").removeClass("in");
				$(".middle-right-2 div:eq("+$(this).index()+")").addClass("in");
			});
			$(".lesson li").on("click",function(){
				$(".lesson li").removeClass("onclick-lesson-li");
				$(this).addClass("onclick-lesson-li");
				$(".middle2-right-1 div").removeClass("in");
				$(".middle2-right-1 div:eq("+$(this).index()+")").addClass("in");
			});
			$(".lesson1 li").on("click",function(){
				$(".lesson1 li").removeClass("onclick-lesson1-li");
				$(this).addClass("onclick-lesson1-li");
				$(".middle2-right-2 div").removeClass("in");
				$(".middle2-right-2 div:eq("+$(this).index()+")").addClass("in");
			});
			
//		----------------------------------third-----------------------------------------------
			
			$(".middle3-lesson li").on("click",function(){
				$(this).addClass("onclick-middle3-lesson-li").siblings().removeClass("onclick-middle3-lesson-li");
				$(".lesson-list li").removeClass("in");
				$(".lesson-list>li:eq("+$(this).index()+")").addClass("in");
			})
			$(".class-list").css("padding-bottom",30+"px");
			
//		----------------------------------fifth-----------------------------------------------					
			$(".coupon-used p").css("color","#C7C7C7");
			$(".coupon-used span").css("color","#C7C7C7");
			$(".coupon-used #coupon-time").html("已失效");
			$(".coupon-used #coupon-time").css({
				"backgroundColor":"#c7c7c7",
				"color":"white"
			})
		
		</script>
	</body>
</html>
