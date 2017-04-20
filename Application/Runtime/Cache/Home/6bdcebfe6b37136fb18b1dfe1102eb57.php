<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>管理员登录</title>
	<link rel="stylesheet" href="/xiangmu/Blogs/Public/Css/login.css">
	<script type="text/javascript" src="/xiangmu/Blogs/Public/Js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/xiangmu/Blogs/Public/Js/jquery.cookie.js"></script>
	<body>
		<div id='wrapper'>
			<div id="header">
	 			<div id="logo">
						<a href="/xiangmu/Blogs/index.php/Home/Login/login">Blogs 
							<span> Super login</span>
						</a>
	 			</div>
 			</div>
			<div id='main'>
				<div class="container">
					<div id='picture'>
						<div id="pitHead"><img src="/xiangmu/Blogs/Public/Images/pitHead.png" alt="图片1"></div>
						<div id="pitBody">
							<img class="one" src="/xiangmu/Blogs/Public/Images/9.jpg" alt="图片2">
							
						</div>
					</div>
					<div id='page'>
						
						<div id="switch_header">
							<a id="swileft" href="javascript:void(0)" hidefocus="true">管理员登录</a>
							
						</div>
					
						<div id="switch_body">
							<form action="/xiangmu/Blogs/index.php/Home/Loginbackstage/doLogin" method="post" name="myForm" id="myForm">
								<p><span></span></p>
								<label for="username" class="text">
									<input id="username" placeholder="用户名"  type="text" name="username">
								</label>
								<br><br>
								<label for="password" class="text">
									<input id="password" placeholder="密码"  type="password" name="password">
								</label>
								
								<label for="ck_rmbUser" class="check">
									<input type="checkbox" id="ck_rmbUser"/> 记住用户名和密码<br />
								</label>
								<br><br>
								<div id="switch_button" onclick="Save()">登 录</div>
								<script>
									$(document).ready(function(){
										//登录按钮颜色渐变颜色
										$("#switch_button").hover(
										function () {
											$(this).stop().animate({
												opacity: '0.60'
											}, 600);}, 
										function () {
											$(this).stop().animate({
												opacity: '1'
											}, 1000);
										}).on('click', function () {
											$('#myForm').submit();
										});

										//实现 “下次自动登录” 记住用户名密码功能
										if ($.cookie("rmbUser") == "true") {
									        $("#ck_rmbUser").attr("checked", true);
									        $("#username").val($.cookie("username"));
									        $("#password").val($.cookie("password"));
								        }
									});
										//记住用户名密码
									 function Save() {
								        if ($("#ck_rmbUser").attr("checked")) {
								            var str_username = $("#username").val();
								            var str_password = $("#password").val();
								            $.cookie("rmbUser", "true", { expires: 7 }); //存储一个带7天期限的cookie
								            $.cookie("username", str_username, { expires: 7 });
								            $.cookie("password", str_password, { expires: 7 });
								        }
								        else {
								            $.cookie("rmbUser", "false", { expire: -1 });
								            $.cookie("username", "", { expires: -1 });
								            $.cookie("password", "", { expires: -1 });
								        }
								    };
								</script>
							</form>
						</div>
						<div id="switch_bottom">
							
						</div>
					</div>
				</div>
			</div>
			<div id='footer'>
				<strong>©2016 Powered by <a href="http://www.52feidian.com/" target="_blank"> Feidian Studio </a> | All Rights Reserved.</strong>
			</div>
		</div>
	</body>
</html>