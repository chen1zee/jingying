<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="../../css/reset.css">
	<link rel="stylesheet" href="../../css/second/index_second.css">
	<link rel="stylesheet" href="../../css/pub-style.css">

</head>
<body>
	<!-- 导航栏   开始 -->
	<nav class="pub-nav">
		<div class="pub-wrap clearfix">
			<div class="pub-logo"></div>
			<ul class="pub-list">
				<li>
					<a href="javascript:void(0);">
						<h2 class="pub-active">首页</h2>
					</a>
				</li>
				<li>
					<a href="./offline_course.php" class="pub-active">
						<h2>线下课程</h2>
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
	
	<!-- 中间主体   开始 -->
	<div class="main">
		<!-- 1200的块宽度 -->
		<div class="minWidth">
			<!-- 轮播图和登录那块 -->
			<div class="block-login clearfix">
				<!-- 左边的轮播图 -->
				<div class="block-left">
					<!-- 这是三个轮播图 -->
					<ul>
						<li style="display: block;">
							<a href="javascript:void(0);">
								<img src="../../img/h-loop1.png">
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<img src="../../img/h-loop2.png">
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<img src="../../img/h-loop3.png">
							</a>
						</li>
					</ul>
					<!-- 这里是三个小圆点 -->
					<div class="paganation" id="paganation">
						<span class ="active"></span>
						<span></span>
						<span></span>	
					</div>
				</div>
				<div class="block-right">
					<!-- 用户图像和欢迎语 -->
					<div class="user-top clearfix">
						<img src="../../img/h-user.png">
						<p>
							<span>Hi，中午好，</span>
							欢迎来到精英吧。
						</p>
					</div>
					<!-- 登录和注册 -->
					<div class="login-button">
						<a href="../sign.php" class="a-login">登录</a>
						<a href="../sign.php" class="a-register">注册</a>
					</div>
					<!-- 中间标题 -->
					<div class="user-middle">
						<div class="user-middle-title clearfix">
							<p>新手入门</p>
							<a href="javascript:void">了解精英吧 ></a>
						</div>
					<!-- 四个链接 -->
						<div class="user-middle-content">
							<div class="middle-one">
								<a href="javascript:void(0)">
									<strong class="strong-one"></strong>
									<span>1.理论学习</span>
								</a>
							</div>
							<div class="middle-two">
								<a href="javascript:void(0)">
									<strong class="strong-two"></strong>
									<span>2.大牛答疑</span>
								</a>
							</div>
							<div class="middle-three">
								<a href="javascript:void(0)">
									<strong class="strong-three"></strong>
									<span>3.在线评估</span>
								</a>
							</div>
							<div class="middle-four">
								<a href="javascript:void(0)">
									<strong class="strong-four"></strong>
									<span>4.线下实训</span>
								</a>
							</div>
						</div>
					</div>
					<!-- 奖金 就业 圈子 -->
						<div class="scholarship">
							<a href="javascript:void(0)">奖金</a>
							<a href="javascript:void(0)">就业</a>
							<a href="javascript:void(0)">圈子</a>
						</div>
				</div>
			</div>

			<!-- 五个答疑 -->
			<div class="answer-box">
				<ul class="clearfix">
					<li>
						<div class="block-img img-one"></div>
						<div class="block-word">
							<span>课程学习</span>
							<p>采用在线教学模式，学习理论课程，让你快速完成理论知识的搭建</p>
						</div>
					</li>
					<li>
						<div class="block-img img-two"></div>
						<div class="block-word">
							<span>学习指导</span>
							<p>不知道该学什么，我们将有在线职业规划师为你进行学习指导</p>
						</div>
					</li>
					<li>
						<div class="block-img img-three"></div>
						<div class="block-word">
							<span>有问必答</span>
							<p>利用手机通过算法将你的问题推送给老师，一对一为你实时解答</p>
						</div>
					</li>
					<li>
						<div class="block-img img-four"></div>
						<div class="block-word">
							<span>招聘就业</span>
							<p>我们鼓励学习，学习达标的学员我们向企业推荐</p>
						</div>
					</li>
					<li>
						<div class="block-img img-five"></div>
						<div class="block-word">
							<span>带你走进互联网</span>
							<p>行业专家为你提供最新最前沿的互联网思维和讯息，快速了解互联网</p>
						</div>
					</li>
				</ul>
			</div>

			<!-- 在线课程 -->
			<div class="online-lesson">
				<h2>精英吧在线课程</h2>
				<ul class="clearfix">
					<li>
						<img src="../../img/h-lesson-ios.png">
						<p></p>
					</li>
					<li>
						<img src="../../img/h-lesson-android.png">
						<p>正在录制，敬请期待!</p>
						
					</li>
					<li>
						<img src="../../img/h-lesson-3d.png">
						<p>正在录制，敬请期待!</p>

					</li>
					<li class="li-four">
						<img src="../../img/h-lesson-h5.png">
						<p>正在录制，敬请期待!</p>

					</li>
					<li class="li-five">
						<img src="../../img/h-lesson-more.png">
					</li>
				</ul>
			</div>

			<!-- 线下课程 -->
			<div class="offline-lesson">
				<h2>精英吧线下课程</h2>
				<div class="offline-lesson-cont">
					<a href="./offline_course.html">
						<span>精品线下课程</span>
					</a>
				</div>
			</div>

			<!-- 入驻学校 -->
			<div class="settled-school">
				<h2>精英吧入驻学校</h2>
				<div class="settled-school-cont">
					<a href="./offline_school.html">
						<span>入驻学校/机构</span>
					</a>
				</div>
			</div>

			<!-- 学习方式 -->
			<div class="learnStyle">
				<h2>不一样的学习方式：你学习的不仅仅是技能</h2>
				<ul class="clearfix">
					<li>
						<img src="../../img/h-learnStyle1.png">
						<span>同学一起学</span>
						<p>精准的算法，让你在学习的道路上不孤单，和志同道合，能力相当的同学为伴一起在学习的路上打怪升级，刷副本。</p>
					</li>
					<li>
						<img src="../../img/h-learnStyle2.png">
						<span>学习顾问指引</span>
						<p>贴心的学习顾问，当你遇到困难，学习动力不足，对学习方向和未来迷茫，出手相助。</p>
					</li>
					<li>
						<img src="../../img/h-learnStyle3.png">
						<span>奖学制度</span>
						<p>每个时代都需要天才，但是也需要勤奋刻苦的人才，对，就是你，你学的好，我们就要奖励你，我们要助推你成为社会的精英。</p>
					</li>
					<li>
						<img src="../../img/h-learnStyle4.png">
						<span>有问必答</span>
						<p>遇到困难不要怕，上千名认证专家在线支持答疑，只要你提问，我们就回答。</p>
					</li>
				</ul>
			</div>

			<!-- 学生用户 -->
			<div class="user-student">
				<h2>目前我们共有超过<span>30000</span>注册学习用户</h2>
				<span class="get-job">目前已经有259名学生获得奖学金</span>

				<ul class="clearfix">
					<li>
						<img src="../../img/h-learnUser1.png">
						<span>账户名称</span>
						<span>Android基础课</span>
						<span>综合分数91分</span>
						<p>奖学金</p>
						<h3>3000元</h3>
					</li>
					<li>
						<img src="../../img/h-learnUser2.png">
						<span>账户名称</span>
						<span>Android基础课</span>
						<span>综合分数91分</span>
						<p>奖学金</p>
						<h3>2000元</h3>
					</li>
					<li>
						<img src="../../img/h-learnUser3.png">
						<span>账户名称</span>
						<span>Android基础课</span>
						<span>综合分数91分</span>
						<p>奖学金</p>
						<h3>1000元</h3>
					</li>
					<li>
						<img src="../../img/h-learnUser4.png">
						<span>账户名称</span>
						<span>Android基础课</span>
						<span>综合分数91分</span>
						<p>奖学金</p>
						<h3>800元</h3>
					</li>
					<li>
						<img src="../../img/h-learnUser5.png">
						<span>账户名称</span>
						<span>Android基础课</span>
						<span>综合分数91分</span>
						<p>奖学金</p>
						<h3>500元</h3>
					</li>

				</ul>




			</div>

			<!-- 合作机构 -->
			<div class="cooperation">
				<h2>合作机构</h2>
				<!-- 点击切换 -->
				<div class="cooperation-container">
					<div class="cooperation-firm clearfix">
						<a href="###" class="firm">
							<img src="../../img/h-cooperation1.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation2.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation3.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation4.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation5.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation6.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation7.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation8.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation9.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation10.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation1.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation2.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation3.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation4.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation5.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation6.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation7.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation8.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation9.png">
						</a>
						<a href="###" class="firm">
							<img src="../../img/h-cooperation10.png">
						</a>
					</div>

					<a class="left-arrow" href="javascript:void(0);">&lt;</a>
					<a class="right-arrow" href="javascript:void(0);">&gt;</a>
				</div>

			</div>

		</div>
	</div>


	<!-- 中间主体   结束 -->

	<!-- 返回顶部  开始-->
	<div class="goTop">
		<div class="goTop-link">
			<a href="http://weixin.com" target="_self"><img src="../../img/h-go-top1.png" class="weixin"><span>公众号</span></a>
		</div>
		<div class="goTop-link">
			<a href="javascript:void(0)" target="_self"><img src="../../img/h-go-top2.png" class="page"><span>问卷调查</span></a>
		</div>
		<div class="goTop-link">
			<a href="javascript:void(0)" target="_self"><img src="../../img/h-go-top3.png" class="write-page"></a>
		</div>
		<div class="goTop-btn"></div>
	</div>

	<!-- 返回顶部  结束-->
	




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
	<script type="text/javascript">
		$(function() {
			// 轮播图
			var index = 0;
			$("#paganation span").on("click",function(){
				index = $(this).index();
				fade();
			})

			function fade() {
				$(".block-left li").eq(index).fadeIn(500).siblings().fadeOut(500);
				$("#paganation span").eq(index).addClass("active").siblings().removeClass("active");
				$(".block-left li").eq(index).addClass("icon").siblings().removeClass("icon");
			}
			function prev() {
				index--;
				if(index < 0) {
				index = $("#paganation span").size() - 1;
			}
				fade();
			}
			function next() {
				index++;
				if(index > $("#paganation span").size() - 1) {
					//.size() .length 返回的是个数
				index = 0;
			}
				fade();
		}

			var timer = setInterval(next,3000);

			$(".block-left li").hover(function() {
				clearInterval(timer);
			},function() {
				timer = setInterval(next,3000);
		})
	
	})

		

		// 点击循环有问题
		$(function(){
			var suffix = 0;//当前图片的下标
			var perWidth = 166;//每张图片的宽度

			//下一张
			$(".right-arrow").on("click",function() {
				suffix++;
				if(suffix > 13) {
					suffix = 0;
				}
				$(".cooperation-firm").animate({
					left:-suffix * perWidth,

				},500)
			})

	//上一张
			$(".left-arrow").on("click",function() {
				suffix--;
				if(suffix < 0) {
					suffix = 13;
				}
				$(".cooperation-firm").animate({
					left:-suffix * perWidth,
					
				},500)
			})


			// 回到顶部
			$('.goTop-btn').click(function(){
				$('html,body').animate({
					scrollTop:0
				},500,'swing')
			})

		})
		
	</script>	
</body>
</html>