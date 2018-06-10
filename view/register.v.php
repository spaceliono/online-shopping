<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
</head>
<link rel="stylesheet" type="text/css" href="./css/register.css">
<link rel="stylesheet" type="text/css" href="./css/header.css">
<link rel="stylesheet" type="text/css" href="./css/footer.css">
<body>
	<header>
		<div id="logo_list">
			<a href="index.v.html"><img src="./images/logo.png"></a>
			<ul>
				<li>
					<a id="login" href="login.v.php"></a>
				</li>
				<li>
					<a id="reg" href="register.v.html"></a>
				</li>
				<li>
					<a id="shopcar" href=""></a>
				</li>
				<li>
					<a id="download" href=""></a>
				</li>
			</ul>
		</div>
		<div id="shine">
			<div id="bar">
				<div id="goods_sorts">全部商品分类
					<ul style="display:none;">
						<li>游戏系列<span>></span></li>
						<li>音乐系列<span>></span></li>
						<li>毒蜂系列<span>></span></li>
						<li>ING系列<span>></span></li>
					</ul>
				</div>
				<ul>
					<li><a href="index.v.php">首页</a></li>
					<li><a href="">游戏系列</a></li>
					<li><a href="">音乐系列</a></li>
					<li><a href="">服务</a></li>
				</ul>
				<div id="search_frame">
					<input id="search_input" type="text" name="">
					<button id="search_button"><img src="./images/search_Btn.png"></button>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div id="regist">
			<div class="left_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				注册
				<img class="right_p" src="./images/title.png" alt="">
				<img class="left_pic" src="./images/out_title.png" alt="">
			</div>
			<div class="right_title">
				已有账号？<a href="login.v.html">点击登录</a>
			</div>
			<div id="regist-box">
				<form action="../api/userRegApi.php" method="get">
					<ul>
						<li><input type="text" name="userName" id="img-01" class="defi-input" placeholder="请输入用户名"></li>
						<li><input type="password" name="pwd" id="img-02" class="defi-input" placeholder="请输入密码"></li>
						<li><input type="password" name="repwd" id="img-03" class="defi-input" placeholder="请输入确认密码"></li>
						<li><input type="text" name="mobile" id="img-04" class="defi-input" placeholder="请输入手机号"></li>
						<li>
							<input type="text" name="" id="img-05" class="defi-input" placeholder="请输入验证码">
							<button id="red_code">获取验证码</button>
						</li>
						<li>
							<a href=""><img src="./images/select_2.png" style="width: 20px; height: 20px;margin-bottom: -5px;"></a>
							我已经看过并接受
							<a  href="" style="color: #0078ff;text-decoration: none;">《用户协议》</a>
						</li>
						<li><input type="submit" name="" id="img-06" class="defi-input" value="立即注册"></li>
					</ul> 
				</form>
			</div>
		</div>
	</section>
	<footer>
		<ul class="bigF_list">
			<li class="bigF_border"><img src="./images/f01.gif">1年免费保修</li>
			<li class="bigF_border"><img src="./images/f02.gif">7天无理由退款</li>
			<li class="bigF_border"><img src="./images/f03.gif">全场包邮</li>
			<li class="bigF_border"><img src="./images/f04.gif">15天免费换货</li>
			<li class="bigF_noborder"><img src="./images/f05.gif">160余家售后网点</li>
			<div class="clear"></div>
		</ul>
		<div class="down_list">
			<div>
				<div class="pic_QR">
					<span>
						<img src="./images/f06.gif" alt="">
						<br>硕美科公众号
					</span>
				</div>
				<div class="phoneAndTime">
					<span class="phone">440-698-9993</span>
					<span class="time">周一至周五 9:00-18:00</span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="connet">
				<div class="service">
					<a href="">售后服务</a>
				</div>
				<div class="connet_us">
					<a href="">联系客服</a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="bottom_text">@ 2009-2016 广东硕美科科技有限公司 版权所有 粤ICP备 15062490号-1</div>
		</div>	
	</footer>
</body>
</html>