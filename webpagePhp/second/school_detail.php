<?php 
	include_once('../../js/c-conn.php');


	$id = $_GET['id'] ? $_GET['id'] : 1;


	$sql = 'select * from `c-school` where `id` = '.$id;

	$result = mysql_query($sql);

	if (mysql_affected_rows() > 0) {
		$row = mysql_fetch_assoc($result);
	}


 ?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学校详情</title>
	<link rel="stylesheet" href="../../css/reset.css">
	<link rel="stylesheet" href="../../css/pub-style.css">
	<link rel="stylesheet" href="../../css/second/c-school_detail.css">
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




	

	<!-- 正文 开始   -->
	<div class="section-bg clearfix">
		
		<!-- 左部    正文   开始-->
		<div class="left-box">
			<!-- 左上部  学校简介 -->
			<div class="school-box clearfix">
				<img src="../../img/c-course1.png" alt="">
				<div class="para-wrap">
					<p class="title">
						<?php echo $row['intro_title'] ?>
					</p>

					<div class="some-wrap">
						<div class="star-list">

<?php 

	// ---生成评分星星
	$star_num = ceil($row['score'] / 2);
	$str = '';
	for ($i=0; $i < 5; $i++) { 
		if ($i < $star_num) {
			$str .= '<span class="active"></span>';
			# code...
		}else{
			$str .= '<span></span>';
		}
		# code...
	}
	echo $str;
 ?>
							<!-- <span class="active"></span>
							<span class="active"></span>
							<span class="active"></span>
							<span></span>
							<span></span> -->
						</div>
							

						<div class="address-box clearfix">
							<span class="icon"></span>
							<span>
								<?php echo $row['address']; ?>
							</span>
						</div>
						<div class="join-number">
							<span class="green">
								<?php echo $row['sign_people']; ?>

							</span>
							<span>
								人已报
							</span>
						</div>
					</div>
					
					<a href="###">
						预约咨询
					</a>
				</div>
			</div>


			<!-- 左下部  Tab切换 -->
			<div class="result-box">
				<ul class="tab-list clearfix" id="tabList">
					<li>本校课程</li>
					<li>学校简介</li>
					<li>官方相册</li>
					<span class="green-bar" id="greenBar"></span>
				</ul>
				


				<!-- Tab 切换 -->
				<div class="tab-box" id="tabBox">
					<!-- 1， 本校课程 页 -->					
					<ul class="school-course tab">
						<!-- <li>
							<a href="###" class="clearfix">
								<div class="word-box">
									<p class="title">
										<span>一年会员-购买专用连接（仅用于购买用）-中艺摄影网校&nbsp;&nbsp;</span>
										<span class="online">线上</span>

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
						</li> -->

<?php 


// union  将 2个 sql 语句 合在 一起

	$sql = 'select *,(case when 1=1 then \'线上\' end) as `on_off_state` from `c-offline-course` where `school_id` = '.$id;

	$result_course =  mysql_query($sql);


	$str = '';
	if (mysql_affected_rows() > 0) {
		while ($row_course = mysql_fetch_assoc($result_course)) {

			$str .= '<li>
							<a href="./course_detail.php?id='.$row_course['id'].'" class="clearfix">
								<div class="word-box">
									<p class="title">
										<span>'.$row_course['coursename'].'&nbsp;&nbsp;</span>
										<span class="online">'.$row_course['on_off_state'].'</span>

									</p>
									<div class="para-box clearfix">
										<p class="name">
											<span class="icon"></span>
											<span>'.$row_course['address'].'</span>
										</p>
										<p class="day">
											<span class="icon"></span>
											<span>'.($row_course['course_time'] * 30).'天</span>
										</p>
										<p class="sell">
											<span>已售</span>
											<span class="green">'.$row_course['sell_num'].'</span>
										</p>
										<p class="score">
											<span>评分</span>
											<span class="geen">'.$row_course['score'].'</span>
											<span>分</span>

										</p>
									</div>
								</div>
								<div class="price-box">
									<p class="now-price">&yen;'.$row_course['now_price'].'</p>
									<p class="old-price">
										<span>价值：</span>
										<del>'.$row_course['old_price'].'</del>
									</p>
								</div>
							</a>
						</li>';

			# code...
		}
		echo $str;
		# code...
	}

 ?>
								
					</ul>




					<!-- 2，学校简介 -->
					<div class="school-intro tab">
						<p class="title">
							<?php echo $row['intro_title'] ?>
						</p>
						
						<?php 
							$arr = explode('&*&', $row['intro_para']);
							$str = '';
							for ($i=0; $i < count($arr); $i++) { 
								$str .= '<p class="para">'.$arr[$i].'</p>';
								# code...
							}
							echo $str;

						 ?>


						<!-- <p class="para">
							蓝鸥是一家集产、学、研为一体的综合性移动互联网研发培训机构，致力于iOS开发、Unity3D游戏开发、Android开发和HTML5前端开发等软件人才的培养。蓝鸥强大的师资阵容，纯净的教育理念，严格的管理制度，使其成为了美国苹果公司AATC认证官方授权培训中心、Unity官方授权培训中心，也是目前国内仅有的一家”两大官方授权于一身“的移动互联网培训企业。2012年10月18日，刘辉、李静波、崔亚允，中国移动互联网开发行业的三位领军人物，强强联手，倾力打造了蓝鸥。“三巨头”（开发、技术、教学）护航蓝鸥一路向前，经过中国移动互联网开发行业的三位领军人物，强强联手，倾力打造了蓝鸥。
						</p> -->
					</div>



					<!-- 3， 官方相册 -->
					<div class="school-album tab clearfix">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
						<img src="../../img/c-course1.png" alt="">
					</div>






				</div>

			</div>


		</div>

		<!-- 左部    正文   结束-->







		<!-- 右部  侧边栏  开始 -->
		<div class="right-box">
			


			<!-- 右上部  地址 -->
			<div class="school-address">
				<p class="title clearfix">
					<span class="icon"></span>
					<span>
						学校地址
					</span>
				</p>
					<!--   有空 试  调用  百度 地图 api -->
				<div class="map">
					<img src="../../img/c-school1.png" alt="">
				</div>
			</div>



			<!-- 右下部   热门学校 -->

			<div class="hot-school">
				<p class="title clearfix">
					<span class="icon"></span>
					<span>热门学校</span>
					<a href="###">更多</a>
				</p>

				<ul>
					<li>
						<a href="###" class="clearfix">
							<img src="../../img/c-course1.png" alt="">
							<div class="para-box">
								<p class="title">
									蓝鸥科技教育培训机阿打算打算打算打算
								</p>
								<div class="list">
									<span class="active"></span>
									<span class="active"></span>
									<span class="active"></span>
									<span></span>
									<span></span>

								</div>
								<p class="keyword">
									<span>海淀区</span>
									<span>IOS</span>
								</p>
							</div>

						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<img src="../../img/c-course1.png" alt="">
							<div class="para-box">
								<p class="title">
									蓝鸥科技教育培训机阿打算打算打算打算
								</p>
								<div class="list">
									<span class="active"></span>
									<span class="active"></span>
									<span class="active"></span>
									<span></span>
									<span></span>

								</div>
								<p class="keyword">
									<span>海淀区</span>
									<span>IOS</span>
								</p>
							</div>

						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<img src="../../img/c-course1.png" alt="">
							<div class="para-box">
								<p class="title">
									蓝鸥科技教育培训机阿打算打算打算打算
								</p>
								<div class="list">
									<span class="active"></span>
									<span class="active"></span>
									<span class="active"></span>
									<span></span>
									<span></span>

								</div>
								<p class="keyword">
									<span>海淀区</span>
									<span>IOS</span>
								</p>
							</div>

						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<img src="../../img/c-course1.png" alt="">
							<div class="para-box">
								<p class="title">
									蓝鸥科技教育培训机阿打算打算打算打算
								</p>
								<div class="list">
									<span class="active"></span>
									<span class="active"></span>
									<span class="active"></span>
									<span></span>
									<span></span>

								</div>
								<p class="keyword">
									<span>海淀区</span>
									<span>IOS</span>
								</p>
							</div>

						</a>
					</li>
					<li>
						<a href="###" class="clearfix">
							<img src="../../img/c-course1.png" alt="">
							<div class="para-box">
								<p class="title">
									蓝鸥科技教育培训机阿打算打算打算打算
								</p>
								<div class="list">
									<span class="active"></span>
									<span class="active"></span>
									<span class="active"></span>
									<span></span>
									<span></span>

								</div>
								<p class="keyword">
									<span>海淀区</span>
									<span>IOS</span>
								</p>
							</div>

						</a>
					</li>
				</ul>

			</div>
		</div>








		<!-- 右部  侧边栏  结束 -->



		


	</div>




	<!-- 正文 结束   -->




	

	

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
	<script type="text/javascript" src="../../js/second/c-school_detail.js"></script>

</body>
</html>