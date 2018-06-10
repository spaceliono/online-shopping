<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	    body{
		margin: 0px;
		padding: 0px;
		background: #F2F2F2;
	}
    section{
		width: 100%;
		height: 500px;
		background: #F2F2F2;
		margin-top: 40px;
		font-family: Microsoft Yahei; 
	}
	#f_pwd{
		width: 1200px;
		height: 500px;
		margin: 0 auto;
		background: #F2F2F2;
	}
	#f_pwd .left_title{
		width: 200px;
		height: 48px;
		text-align: center;
		line-height: 45px;
		font-weight:bold;
		font-size: 20px;
		background: #fff;
		float: left;
		position: relative;
		z-index: 2;
		box-shadow: -2px -2px 8px #c4c4c4;
	}
	#f_pwd .right_title{
		float: right;
		margin-top: 15px;
	    color: #999;
	    line-height: 30px;
	}
	#f_pwd .right_title a{
	    color: #C8152D;
	}
	#f_pwd .left_title .left_pic{
		display: block;
		position: absolute;
		right: -50px;
		top: -10px;
	}
	#f_pwd .left_title .left_p{
		display:block;
		margin-left: 20px;
		margin-top: 15px; 
		float: left;

	}
	#f_pwd .left_title .right_p{
		display:block;
		margin-right: 20px;
		margin-top: 15px; 
		float: right;
	}
	#f_pwdn-box{
		width: 1200px;
		height: 420px;
		background: #fff;
		float: left;
		box-shadow: 0 0 8px #c4c4c4;
		position: relative;
		z-index: 1;
		margin:0 auto;
	}
	#f_pwdn-box ul{
		list-style: none;
		margin: 0 auto;
		width: 600px;
		height: 420px;
		margin-top: 60px;
	}
	#f_pwdn-box ul li{
		margin-top: 50px;
	}
	#f_pwdn-box ul li a{
		text-decoration: none;
		/*display: block;*/
		color: #666;
        margin: 0 20px;
	}
	.defi-input{
		width: 500px;
		height: 50px;
		text-indent: 14%;
		font-size: 14px;
		border: none;
		outline: none;
	}
	#img-02{
		background: url(./images/pass_word.jpg) no-repeat left;
		border-bottom: #CCCCCC 1px solid;
	}
	#img-04{
		background: url(./images/reg_phone.jpg) no-repeat left;
		border-bottom: #CCCCCC 1px solid;
	}
	#img-06{
		background: url(./images/save_address.png) no-repeat;
		background-size: 100% 100%;
		text-align: center;
	    font-size: 18px;
	    color: #fff;
	    line-height: 54px;
	    letter-spacing: 10px;
	}
	#red_code{
		background: url(./images/red_code.png) no-repeat;
		background-size: 100% 100%;
		width: 135px;
		height: 40px;
		color: #C8152D;
		float: right;
		margin: -50px 100px 0px 0px;
		border: none;
		outline: none;
	}
</style>
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="./css/header.css">
<link rel="stylesheet" type="text/css" href="./css/footer.css">
</head>
<body>
	<header>
		<div id="logo_list">
			<a href="index.v.html"><img src="./images/logo.png"></a>
			<ul>
				<li>
					<a id="f_pwdn" href="f_pwdn.v.html"></a>
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
				    <li><a href="index.v.html">首页</a></li>
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
			<div id="f_pwd">
				<div class="left_title">
					<img class="left_p" src="./images/title.png" alt="" align="middle">
					 找回密码
					<img class="right_p" src="./images/title.png" alt="">
					<img class="left_pic" src="./images/out_title.png" alt="">
				</div>
				<div id="f_pwdn-box">
					<ul>
						<li><input type="" name="" id="img-04" class="defi-input" placeholder="请输入手机号"></li>
						<li>
							<input type="" name="" id="img-02" class="defi-input" placeholder="请输入验证码">
							<button id="red_code">获取验证码</button>
						</li>
						<li><input type="submit" name="" id="img-06" class="defi-input" value="提交信息"></li>
					</ul> 
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