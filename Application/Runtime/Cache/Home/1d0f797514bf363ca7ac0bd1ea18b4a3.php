<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>热门人物</title>
	<link rel="shortcut icon" href="/xiangmu/Blogs/Public/Images/title.png">
	<link rel="stylesheet" href="/xiangmu/Blogs/Public/Css/basic.css">
	<link rel="stylesheet" href="/xiangmu/Blogs/Public/Css/hotpeople.css">
	<body>
		<div id='wrapper'>

			<!-- <div id='logo'>
				<p>博客</p>
				
				<p class='my'>欢迎你 <?php echo (session('username')); ?> <a href='/xiangmu/Blogs/index.php/Home/Loginbackstage/loginbackstage' target='_top'>退出</a></p>
			</div> -->
			<div id='logo'>
				<p>博客</p>
<!--<span><a href='/xiangmu/Blogs/index.php/Home/Login/login' target='_top' class='register'>登录</a>｜<a href='/xiangmu/Blogs/index.php/Home/Register/register' class='login'>注册</a></span>-->
<p class='my'>welcome  <?php echo (session('username')); ?>  <a href='/xiangmu/Blogs/index.php/Home/Login/login' target='_top'>退出</a></p>
			</div>

			<div id='nav'>

				<ul>
	<li><a href="/xiangmu/Blogs/index.php/Home/Index/index">主页</a></li>
	<li><a href="/xiangmu/Blogs/index.php/Home/Hotpeople/hotpeople">热门人物</a></li>
	<li><a href="/xiangmu/Blogs/index.php/Home/Hot/hot">热门话题</a></li>
	<li><a href="/xiangmu/Blogs/index.php/Home/First/first">所有博客</a></li>
	<li><a href="/xiangmu/Blogs/index.php/Home/Myblog/myblog">我的博客</a></li>
</ul>
			</div>
			<div id='main_body'>
				<div id='main'>
			
					<div id='content'>
							<div class="person">
								<div class="image_quotefade">
									<img src="/xiangmu/Blogs/Public/Images/people1.jpg">
									<div class="quotehover">
										<h5>“You have to do something you’ve never done 
										to have something you’ve never had.”</h5>
										<h6>Elizabeth Franklin</h6>
									</div>
								</div>
								<div class="info">
									<h2>刘浩然</h2>
									<h4 class="light-gray">CEO</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>

							<div class="person">
								<div class="image_quotefade">
									<img src="/xiangmu/Blogs/Public/Images/people2.jpg">
									<div class="quotehover">
										<h5>“You have to do something you’ve never done 
										to have something you’ve never had.”</h5>
										<h6>Elizabeth Franklin</h6>
									</div>
								</div>
								<div class="info">
									<h2>李健</h2>
									<h4 class="light-gray">CEO</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>


							<div class="person">
								<div class="image_quotefade">
									<img src="/xiangmu/Blogs/Public/Images/people3.jpg">
									<div class="quotehover">
										<h5>“You have to do something you’ve never done 
										to have something you’ve never had.”</h5>
										<h6>Elizabeth Franklin</h6>
									</div>
								</div>
								<div class="info">
									<h2>黄轩</h2>
									<h4 class="light-gray">CEO</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						
					</div>

					<div id='about'>
						<div class="blogs">
							<p>Blogs<img src="/xiangmu/Blogs/Public/Images/bird.png"></p>
							<ul>
								<li><img src="/xiangmu/Blogs/Public/Images/right.png">  Java<span>(2)</span></li>
								<li><img src="/xiangmu/Blogs/Public/Images/right.png">  C++<span>(5)</span></li>
								<li><img src="/xiangmu/Blogs/Public/Images/right.png">  JS<span>(9)</span></li>
								<li><img src="/xiangmu/Blogs/Public/Images/right.png">  C<span>(6)</span></li>
								<li><img src="/xiangmu/Blogs/Public/Images/right.png">  Python<span>(1)</span></li>
								<li><img src="/xiangmu/Blogs/Public/Images/right.png">  html<span>(2)</span></li>
								<li><img src="/xiangmu/Blogs/Public/Images/right.png">  CSS<span>(7)</span></li>
							</ul>
						</div>
						<div class="text">
							<h1>Text <img src="/xiangmu/Blogs/Public/Images/bird.png"></h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
					</div>
					</div>
				</div>
			</div>
			

			<div id='footer'>
				<strong>©2017 Powered by <a href="http://www.52feidian.com/" target="_blank"> Feidian Studio </a> | All Rights Reserved.</strong>
			</div>
		</div>
		
	</body>
</html>