<?php 
	include_once('../../js/c-conn.php');

	//  // *************中文的搜索方式*****************
	// $coursename = $GET['course_name'];-------后面加回来连接GET传送
	
	// $coursename = '一年会员-购买专用连接仅用于购买用-中艺摄影网校';

	// $sql = 'select * from `c-offline-course` where `coursename`=\''.$coursename.'\'';
	// $result = mysql_query($sql);

	// if (mysql_affected_rows() == 1) {
	// 	echo "asdasdasdasd";
	// 	$row = mysql_fetch_assoc($result);
	// 	# code...
	// }
	//  // *************中文的搜索方式*****************



	// $id = $GET['id'];------后面该回来
	$id = 1;
	$sql = 'select * from `c-offline-course` where `id`='.$id;
	$result = mysql_query($sql);
	if (mysql_affected_rows() == 1) {
		$row = mysql_fetch_assoc($result);
		# code...
	}
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>课程详情</title>
	<link rel="stylesheet" href="../../css/reset.css">
	<link rel="stylesheet" href="../../css/pub-style.css">
	<link rel="stylesheet" href="../../css/second/c-course_detail.css">
	
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


	<!--######### 正文    开始 ########-->
	<div class="section-bg clearfix">
		<!-- 上部  购买课程 -->
		<div class="buy-box clearfix">

			<!-- 上左部 图片框 -->
			<div class="img-box">
				<div class="big-img-contain" id="bigImgContain">
					<img src="../../img/c-course1.png" alt="" class="active">
					<img src="../../img/c-course11.png" alt="">
					<img src="../../img/c-course1.png" alt="">
					<img src="../../img/c-course11.png" alt="">
				</div>
				
				<div class="img-list" id="imgList">
					<a href="###">
						<img src="../../img/c-course2.png" alt="">
					</a>
					<a href="###">
						<img src="../../img/c-course2.png" alt="">
					</a>
					<a href="###">
						<img src="../../img/c-course2.png" alt="">
					</a>
					<a href="###">
						<img src="../../img/c-course2.png" alt="">
					</a>
				</div>
			</div>

			<!-- 上右部 文字框 -->
			<div class="intro-box">
				<h3 class="title">
					<?php echo $row['coursename']; ?>
				</h3>
				<p class="company">
					<span class="icon home"></span>
					<span>
						<?php echo $row['schoolname']; ?>
					</span>
					<a href="###">[公司详情]</a>
				</p>
				<p class="company">
					<span class="icon location"></span>
					<span>
					<?php echo $row['address']; ?>
					</span>
				</p>

				<div class="price-box">
					<span class="now-price">
						&yen;<?php echo $row['now_price']; ?>	
					</span>
					<del class="old-price">
						&yen;<?php echo $row['old-price']; ?>
					</del>
					<p>
						<span>报名订金</span>
						<span class="white">
							&yen;<?php echo $row['subscription']; ?>
						</span>
					</p>
				</div>
				<div class="sell-box clearfix">
					<a href="###">
						<span>已售</span>
						<span class="green">
							<?php echo $row['sell_num']; ?>
						</span>
					</a>
					<a href="###">
						<span>评分</span>
						<span class="green">
							<?php echo $row[score]; ?>
						</span>
					</a>
					<a href="###">
						<span>评价</span>
						<span class="green">
							<?php echo $row['comment_people']; ?>
						</span>
						<span>人</span>
					</a>
				</div>

				<div class="purchas-box clearfix">
					<a href="./sign_now.html?id=12323" class="buy-now">立即抢购</a>
					<a href="###" class="ask" id="askBtn">预约咨询</a>
				</div>
			</div>
		</div>




		<!-- 下左部Tab切换  大内容 -->
		<div class="para-box" id="paraBox">
			<ul class="tab-list clearfix" id="tabList">
				<li>课程详情</li>
				<li>其他课程</li>
				<li>用户评价</li>
				<span class="green-bar" id="greenBar"></span>
			</ul>

			<!-- 1， 课程详情 页 -->
			<div class="detail-box page">
				<div class="school-detail">
					<div class="content clearfix">
						<p class="title">课程类型：</p>
						<p class="para">
							<?php echo $row['type']; ?>
						</p>
					</div>
					<div class="content clearfix">
						<p class="title">上课人数：</p>
						<p class="para">
						<?php echo $row['class_number']; ?>
							人
						</p>
					</div>
					<div class="content clearfix">
						<p class="title">课程周期：</p>
						<p class="para">
							<?php echo $row['course_time']; ?>
							个月
						</p>
					</div>
					<div class="content clearfix">
						<p class="title">课程价格：</p>
						<p class="para">
						<?php echo $row['now_price']; ?>
							元
						</p>
					</div>
					<div class="content clearfix">
						<p class="title">学校地址：</p>
						<p class="para">
							<?php echo $row['address']; ?>
						</p>
					</div>
				</div>

				<div class="more-detail">
					<div class="content clearfix">
						<p class="title">适合人群：</p>
						<p class="para">
							<?php echo $row['fit_people']; ?>
						</p>
					</div>
					<div class="content clearfix">
						<p class="title">教学内容：</p>
						<p class="para">
							<?php echo $row['course_content']; ?>
						</p>
					</div>
					<div class="content clearfix">
						<p class="title">学习目标：</p>
						<p class="para">
							<?php echo $row['study_target']; ?>
						</p>
					</div>
					<div class="content clearfix">
						<p class="title">使用教材：</p>
						<p class="para">
							<?php echo $row['teach_material']; ?>
						</p>
					</div>
				</div>

			</div>




			<!-- 2， 其他课程 页 -->
			<div class="other-course page">
				<ul>
					<li>
						<a href="###" class="clearfix">
							<div class="word-box">
								<p class="title">
									一年会员-购买专用连接（仅用于购买用）-中艺摄影网校
								</p>
								<div class="para-box clearfix">
									<p class="name">
										<span class="icon"></span>
										<span>蓝鸥科技教育有限公司</span>
									</p>
									<p class="day">
										<span class="icon"></span>
										<span>120天</span>
									</p>
									<p class="sell">
										<span>已售</span>
										<span class="green">1200</span>
									</p>
									<p class="score">
										<span>评分</span>
										<span class="geen">8.9</span>
										<span>分</span>

									</p>
								</div>
							</div>
							<div class="price-box">
								<p class="now-price">&yen;1288</p>
								<p class="old-price">
									<span>价值：</span>
									<del>5000</del>
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<div class="word-box">
								<p class="title">
									一年会员-购买专用连接（仅用于购买用）-中艺摄影网校
								</p>
								<div class="para-box clearfix">
									<p class="name">
										<span class="icon"></span>
										<span>蓝鸥科技教育有限公司</span>
									</p>
									<p class="day">
										<span class="icon"></span>
										<span>120天</span>
									</p>
									<p class="sell">
										<span>已售</span>
										<span class="green">1200</span>
									</p>
									<p class="score">
										<span>评分</span>
										<span class="geen">8.9</span>
										<span>分</span>

									</p>
								</div>
							</div>
							<div class="price-box">
								<p class="now-price">&yen;1288</p>
								<p class="old-price">
									<span>价值：</span>
									<del>5000</del>
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<div class="word-box">
								<p class="title">
									一年会员-购买专用连接（仅用于购买用）-中艺摄影网校
								</p>
								<div class="para-box clearfix">
									<p class="name">
										<span class="icon"></span>
										<span>蓝鸥科技教育有限公司</span>
									</p>
									<p class="day">
										<span class="icon"></span>
										<span>120天</span>
									</p>
									<p class="sell">
										<span>已售</span>
										<span class="green">1200</span>
									</p>
									<p class="score">
										<span>评分</span>
										<span class="geen">8.9</span>
										<span>分</span>

									</p>
								</div>
							</div>
							<div class="price-box">
								<p class="now-price">&yen;1288</p>
								<p class="old-price">
									<span>价值：</span>
									<del>5000</del>
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<div class="word-box">
								<p class="title">
									一年会员-购买专用连接（仅用于购买用）-中艺摄影网校
								</p>
								<div class="para-box clearfix">
									<p class="name">
										<span class="icon"></span>
										<span>蓝鸥科技教育有限公司</span>
									</p>
									<p class="day">
										<span class="icon"></span>
										<span>120天</span>
									</p>
									<p class="sell">
										<span>已售</span>
										<span class="green">1200</span>
									</p>
									<p class="score">
										<span>评分</span>
										<span class="geen">8.9</span>
										<span>分</span>

									</p>
								</div>
							</div>
							<div class="price-box">
								<p class="now-price">&yen;1288</p>
								<p class="old-price">
									<span>价值：</span>
									<del>5000</del>
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<div class="word-box">
								<p class="title">
									一年会员-购买专用连接（仅用于购买用）-中艺摄影网校
								</p>
								<div class="para-box clearfix">
									<p class="name">
										<span class="icon"></span>
										<span>蓝鸥科技教育有限公司</span>
									</p>
									<p class="day">
										<span class="icon"></span>
										<span>120天</span>
									</p>
									<p class="sell">
										<span>已售</span>
										<span class="green">1200</span>
									</p>
									<p class="score">
										<span>评分</span>
										<span class="geen">8.9</span>
										<span>分</span>

									</p>
								</div>
							</div>
							<div class="price-box">
								<p class="now-price">&yen;1288</p>
								<p class="old-price">
									<span>价值：</span>
									<del>5000</del>
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<div class="word-box">
								<p class="title">
									一年会员-购买专用连接（仅用于购买用）-中艺摄影网校
								</p>
								<div class="para-box clearfix">
									<p class="name">
										<span class="icon"></span>
										<span>蓝鸥科技教育有限公司</span>
									</p>
									<p class="day">
										<span class="icon"></span>
										<span>120天</span>
									</p>
									<p class="sell">
										<span>已售</span>
										<span class="green">1200</span>
									</p>
									<p class="score">
										<span>评分</span>
										<span class="geen">8.9</span>
										<span>分</span>

									</p>
								</div>
							</div>
							<div class="price-box">
								<p class="now-price">&yen;1288</p>
								<p class="old-price">
									<span>价值：</span>
									<del>5000</del>
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<div class="word-box">
								<p class="title">
									一年会员-购买专用连接（仅用于购买用）-中艺摄影网校
								</p>
								<div class="para-box clearfix">
									<p class="name">
										<span class="icon"></span>
										<span>蓝鸥科技教育有限公司</span>
									</p>
									<p class="day">
										<span class="icon"></span>
										<span>120天</span>
									</p>
									<p class="sell">
										<span>已售</span>
										<span class="green">1200</span>
									</p>
									<p class="score">
										<span>评分</span>
										<span class="geen">8.9</span>
										<span>分</span>

									</p>
								</div>
							</div>
							<div class="price-box">
								<p class="now-price">&yen;1288</p>
								<p class="old-price">
									<span>价值：</span>
									<del>5000</del>
								</p>
							</div>
						</a>
					</li>
				</ul>
			</div>

				<!-- 3，用户评价 页 -->
			<div class="comment-box page">
					<!-- 头部 大 分数 -->
				<div class="summary clearfix">

					<div class="score-box" id="scoreBox">
						<p class="score">
							<?php echo $row['score']; ?>
						</p>
						<div class="star-list clearfix" id="starList">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<p class="num">
							该课程共
							<?php echo $row['comment_people']; ?>
							人评论
						</p>
					</div>
					<div class="mid-bar"></div>
					<div class="percent-box" id="percentBox">
						<div class="top wrap clearfix">
							<span class="left">好评</span>
							<div class="bar">
								<span></span>
							</div>
							<span class="right">
								<?php echo $row['good_comment']; ?>
								人
							</span>

						</div>
						<div class="mid wrap clearfix">
							<span class="left">中评</span>
							<div class="bar">
								<span></span>
							</div>
							<span class="right">
								<?php echo $row['mid_comment'] ?>
								人
							</span>

						</div>
						<div class="low wrap clearfix">
							<span class="left">差评</span>
							<div class="bar">
								<span></span>
							</div>
							<span class="right">
								<?php echo $row['bad_comment'] ?>
								人
							</span>

						</div>

					</div>
				</div>

					<!-- 大家印象 -->
				<div class="impress clearfix">
					<span class="left">
						大家印象：
					</span>
					<p class="tag clearfix">
						<?php 
							$taps = split('N', $row['tap_list']);
							for ($i=0; $i < count($taps); $i++) { 
								echo '<span>'.$taps[$i].'('.$row[$taps[$i]].')</span>';
								# code...
							}
						 ?>

						<!-- <span>交通便利(323)</span>
						<span>学习气氛浓厚(1200)</span> -->

						
					</p>
				</div>

					<!-- 评价内容 -->


					<!-- !!!用php 初始化 生成 此段内容!! -->
					<!-- 根据  #commentNum总数 来生成共几页-->
				<div class="comment-content">
					<p class="title">评价内容(<span id="commentNum">100</span>)</p>
					<div class="para-content">
						<ul class="comment-detail">
							<!-- <li>
								<div class="head-content clearfix">
									<div class="user-score">
										<span class="active"></span>
										<span class="active"></span>
										<span class="active"></span>
										<span></span>
										<span></span>
									</div>
									<p class="user-name">
										刘 * * 疯
									</p>
									<p class="date">
										2015-01-28
									</p>
								</div>
								<p class="para">
									很满意特别划算 真不错很详细 有耐心。很满意特别划算真不错很详细 有耐心很满意特别划算真不错很详细有耐心很满意特别划算真不错很详细有耐心很满意特别划算真不错很详细 有耐心
								</p>
							</li> -->



<?php 
	$sql = 'select * from `c-offline-course-comment` where coursename = \''.$row['coursename'].'\'';
 ?>
							
						</ul>

						<div class="paganation" id="paganation">
							<a href="###" id="prev">上一页</a>
							<ul class="clearfix">
								<li class="active">1</li>
								<li>2</li>
								<li>3</li>
								<li>4</li>
								<li>5</li>
								<li>6</li>
								<li>7</li>
								<li>8</li>
								<li>9</li>
								<li class="none">...</li>
								<li>100</li>
							</ul>
							<a href="###" id="next">下一页</a>

						</div>
					</div>
				</div>
			</div>
		</div>
		



		<!-- 下右部 侧边栏 -->
		<div class="side-box">
			<div class="hot-sell-box">
				<p class="hot-sell clearfix">
					<span class="hot-icon"></span>
					<span>热销课程</span>
					<a href="###">更多</a>
				</p>
				<ul>
					<li class="clearfix">
						<a href="###">
							<img src="../../img/c-course6.png" alt="">
							<!-- 一行省略 -->
							<p class="title">4个月IOS高薪就业班asdasdsdsadsad</p>
							<p class="para">北京市海淀区清河中街金asdsadsadasdasdasdsad</p>
							<p class="price">&yen;1288</p>

						</a>
					</li>
					<li class="clearfix">
						<a href="###">
							<img src="../../img/c-course6.png" alt="">
							<!-- 一行省略 -->
							<p class="title">4个月IOS高薪就业班asdasdsdsadsad</p>
							<p class="para">北京市海淀区清河中街金asdsadsadasdasdasdsad</p>
							<p class="price">&yen;1288</p>

						</a>
					</li>
					<li class="clearfix">
						<a href="###">
							<img src="../../img/c-course6.png" alt="">
							<!-- 一行省略 -->
							<p class="title">4个月IOS高薪就业班asdasdsdsadsad</p>
							<p class="para">北京市海淀区清河中街金asdsadsadasdasdasdsad</p>
							<p class="price">&yen;1288</p>

						</a>
					</li>
					<li class="clearfix">
						<a href="###">
							<img src="../../img/c-course6.png" alt="">
							<!-- 一行省略 -->
							<p class="title">4个月IOS高薪就业班asdasdsdsadsad</p>
							<p class="para">北京市海淀区清河中街金asdsadsadasdasdasdsad</p>
							<p class="price">&yen;1288</p>

						</a>
					</li>
					<li class="clearfix">
						<a href="###">
							<img src="../../img/c-course6.png" alt="">
							<!-- 一行省略 -->
							<p class="title">4个月IOS高薪就业班asdasdsdsadsad</p>
							<p class="para">北京市海淀区清河中街金asdsadsadasdasdasdsad</p>
							<p class="price">&yen;1288</p>

						</a>
					</li>
				</ul>
			</div>
			<div class="question-box">
				<p class="title">
					<span class="icon"></span>
					<span class="word">有疑问？</span>
				</p>
				<ul>
					<li class="clearfix">
						<div class="question">
							<p class="left">
								<span class="orange">A</span>
								<span>：</span>
							</p>
							<p class="para">
								报名定金是个什么鬼？
							</p>
						</div>
						<div class="anwser">
							<p class="left">
								<span class="green">B</span>
								<span>：</span>
							</p>
							<p class="para">
								当年18户村民按下红手印，签订大包干契约情景。总书记感慨道：“当年贴着身家性命干的事，变成中国改革的一声惊雷，成为中国改革的标志。
							</p>
						</div>
					</li>
					<li class="clearfix">
						<div class="question">
							<p class="left">
								<span class="orange">A</span>
								<span>：</span>
							</p>
							<p class="para">
								购买本VIP课程后请务必联系工作人员录播课程以及在架的
							</p>
						</div>
						<div class="anwser">
							<p class="left">
								<span class="green">B</span>
								<span>：</span>
							</p>
							<p class="para">
								当年18户村民按下红手印，签订大包干契约情景。总书记感慨道：“当年贴着身家性命干的事，变成中国改革的一声惊雷，成为中国改革的标志。
							</p>
						</div>
					</li>
					<li class="clearfix">
						<div class="question">
							<p class="left">
								<span class="orange">A</span>
								<span>：</span>
							</p>
							<p class="para">
								报名定金是个什么鬼？
							</p>
						</div>
						<div class="anwser">
							<p class="left">
								<span class="green">B</span>
								<span>：</span>
							</p>
							<p class="para">
								当年18户村民按下红手印，签订大包干契约情景。总书记感慨道：“当年贴着身家性命干的事，变成中国改革的一声惊雷，成为中国改革的标志。
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>

	</div>

	<!--#######正文    结束 ########-->
	


	<!-- 预约咨询 弹窗  开始 -->
	<div class="ask-mask" id="askMask" style="display:none;">
		<div class="ask-box">
			<div class="title clearfix">
				<span class="left">预约咨询</span>
				<a href="###" id="titleClose">					
				</a>
			</div>
			<div class="para">
				<p class="alert">
					留下您的联系电话，我们会在第一时间和您取得联系
				</p>
				<div class="input-box">
					<div class="content clearfix">
						<span>您的姓名：</span>
						<input type="text" name="yourname">
					</div>
					<div class="content clearfix">
						<span>您的电话：</span>
						<input type="text" name="yourtel">
					</div>
					<div class="content clearfix">
						<span>意向课程：</span>
						<select name="yourcourse">
							<option value="IOS">IOS</option>
							<option value="Android">Android</option>
							<option value="HTML5">HTML5</option>
						</select>
					</div>
				</div>

				<div class="sumbit-box clearfix">
					<a href="###" class="cancel-btn">取消</a>
					<a href="###" class="submit-btn">确定</a>
				</div>
			</div>
		</div>

	</div>


	<!-- 预约咨询 弹窗  结束-->





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


	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/second/c-course_detail.js"></script>
</body>
</html>