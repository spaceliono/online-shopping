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
		height: 1000px;
		background: #F2F2F2;
		margin-top: 40px;
		font-family: Microsoft Yahei; 
	}
	#m_center{
		width: 1200px;
		height: 900px;
		margin: 0 auto;
		background: #F2F2F2;
	}
	#m_center .left_title{
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
	#m_center .right_title{
		float: right;
		margin-top: 15px;
	    color: #999;
	    line-height: 30px;
	}
	#m_center .right_title a{
	    color: #C8152D;
	    text-decoration: none;
	}
	#m_center .left_title .left_pic{
		display: block;
		position: absolute;
		right: -50px;
		top: -10px;
	}
	#m_center .left_title .left_p{
		display:block;
		margin-left: 20px;
		margin-top: 15px; 
		float: left;

	}
	#m_center .left_title .right_p{
		display:block;
		margin-right: 20px;
		margin-top: 15px; 
		float: right;
	}
	#m_center #center_box{
		width: 1200px;
		height: 800px;
		background: #fff;
		float: left;
		box-shadow: 0 0 8px #c4c4c4;
		position: relative;
		z-index: 1;
		margin:0 auto;
	}
	#m_center #center_box #person_info{
		width: 1000px;
		height: 150px;
		margin: 0 auto;
		background: url('./images/serviceCenter/save_address.png') no-repeat;
		background-size: 100% 100%;
		margin-top: 60px;
	}
	#m_center #center_box #person_info ul{
		list-style: none;
		width: 95%;
		height: 90%;

	}
	#m_center #center_box #person_info ul li{
		list-style: none;
		width: 33%;
		height: 100%;
		float: left;
		margin-top: 10px;
	}
	.dash{
		border-left: 1px dashed #999;
	}
	#m_center #center_box #person_info ul li img{
		width:100px;
		height:100px;
		border-radius: 100%;
		border:2px solid #fff;
		margin-top: 20px;
		float: left;
	}
	#m_center #center_box #person_info #show_name{
		width: 180px;
		height: 100px;
/*		background: #F2F2F2;*/
		float: left;
		margin: 20px 0 0 20px;
	}
	#m_center #center_box #person_info #show_name span{
		display: block;
		width: 150px;
		line-height: 30px;
	}
	#book{
		width: 1000px;
		height: 300px;
		background: #F2F2F2;
		margin: 0 auto;
		margin-top: 20px;
		box-shadow: 0 0 10px #c4c4c4;
	}
	#recommend{
		width: 1000px;
		height: 200px;
		background: #F2F2F2;
		margin: 0 auto;
		margin-top: 20px;
		box-shadow: 0 0 10px #c4c4c4;
	}
	#m_center #center_box #person_info .dash img{
		width: 50px;
		height: 50px;
		border-radius: 100%;
	}
	.f_pic{
		display: block;
		width: 49%;
		height: 49%;
		float: left;
		margin: -10px 0 10px 1px;
	}
	.l_tittle{
		float: left;
		color: #999;
	}
	.r_tittle{
		float: right;
	}
	.span_01{
		float: left;margin-top: 40px;text-indent: 5%;color: #666;
	}
	.span_02{
		float: left;margin-top: 40px;color: #FF7F00;
	}
	.span_03{
		display: block;
		width: 50px;
		height: 10px;
		float: left;
		margin-top: 25px;
		color: #FF7F00;
	}
	#little_bar{
		list-style: none;
		width: 100%;
		height: 10px;
		float: left;
	}
	#little_bar li{
		text-indent: 5%;
		width: 25%;
		float: left;
	}
	#goods{
		list-style:none;
		width: 95%;
		height: 230px;
		margin: 20px 0 0px 20px;
		background: #fff;
		float: left;
	}
	#goods li{
		float: left;
		font-size:12px;
		margin-top: 10px;
		width: 25%;
		/*margin-left:-10px;*/
	}
	#goods li a{
		text-decoration: none;
		color: #666;
	}
	#re_goods{
		list-style:none;
		width: 95%;
		height: 85%;
		background: #fff;
		margin: 5px 0 0 20px;
		float: left;
	}
	#re_goods li{
		width: 20%;
		height: 100%;
		float:left;
	}
</style>
<link rel="stylesheet" type="text/css" href="./css/footer.css">
<link rel="stylesheet" type="text/css" href="./css/header.css">
<link rel="stylesheet" type="text/css" href="./css/second_bar.css">
<script src="./js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	   function show_bar(){
		    $("#goods_sorts").mouseenter(function(){
			    $("#goods_sorts ul").css('display','block')
			    var obj=$("#goods_sorts ul li span");
			    for (var i = 0; i <obj.length; i++) {
			    	if(obj[i].innerText.length>8) {
				    	var newstr=obj[i].innerText.substr(0,8)+"...";
				    	obj[i].innerText=newstr;
					}
			    }
		    }).mouseleave(function(){
				$("#goods_sorts ul").css('display','none')
			})
	    }
	    $(show_bar);
	    function show_bar_goods1(){
		    $("#li_01").mouseenter(function(){
			    $(".show_goods").css('display','block')
		    }).mouseleave(function(){
				$(".show_goods").css('display','none')
			})
	    }
	    $(show_bar_goods1);
	    function show_bar_goods2(){
		    $("#li_02").mouseenter(function(){
			    $(".show_goods2").css('display','block')
		    }).mouseleave(function(){
				$(".show_goods2").css('display','none')
			})
	    }
	    $(show_bar_goods2);
	    function show_bar_goods3(){
		    $("#li_03").mouseenter(function(){
			    $(".show_goods3").css('display','block')
		    }).mouseleave(function(){
				$(".show_goods3").css('display','none')
			})
	    }
	    $(show_bar_goods3);
    </script>
</head>
<body>
	<header>
		<div id="logo_list">
			<a href="index.v.html"><img src="./images/logo.png"></a>
			<ul>
				<li>
					<a id="login" href="login.v.html"></a>
				</li>
				<li>
					<a id="reg" href="register.v.html"></a>
				</li>
				<li>
					<a id="shopcar" href=""></a>
				</li>
				<li>
					<a id="download" href="downloadApp.v.html"></a>
				</li>
			</ul>
		</div>
		<div id="shine">
			<div id="bar">
				<div id="goods_sorts">全部商品分类
					<ul style="display: none;">
						<li id="li_01">游戏系列
							<span>></span>
							<div class="show_goods">
								<ul>
									<li>
										<a href="">
											<img src="./images/sec_bar/101.png">
											<span>G618</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/102.jpg">
											<span>G941专业游戏耳机头戴式潮 usb震动电脑耳麦cf专用</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/103.jpg">
											<span>E95x 震动电脑耳麦 专业游戏电竞耳机头戴式 重低音</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/104.jpg">
											<span>Somic/硕美科 血魂 cf电竞游戏耳麦 头戴式 发光 电脑耳机带麦</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/105.jpg">
											<span>G909PRO 7.1震动游戏影音耳机头戴式重低音电竞耳麦</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/106.jpg">
											<span>G910 重低音 头戴式 电脑震动耳机耳麦</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/107.jpg">
											<span>Somic/硕美科 G983 头戴式7.1耳麦 双麦克风主动降噪Xbox耳机PS3</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/108.jpg">
											<span>G932 头戴式电脑耳机 USB游戏耳麦 笔记本7.1 CF</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/109.jpg">
											<span>G951 电竞游戏耳机 头戴式 电脑耳机 被动降噪 免驱动 振动耳麦</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/1010.jpg">
											<span>Somic/硕美科 G951情久版专业电竞震动游戏耳机</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/1011.jpg">
											<span>P6 极炫手游耳机 电竞游戏耳机 3.5震动手机耳机潮</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/1012.jpg">
											<span>G909 7.1声道 专业震动USB游戏耳麦 低音强到震动 亲肤大耳罩</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li id="li_02">音乐系列
							<span>></span>
							<div class="show_goods2">
								<ul>
									<li>
										<a href="">
											<img src="./images/sec_bar/1710091.jpg">
											<span>Somic/硕美科 SC500入耳式主动降噪耳机重低音线控音乐耳塞带麦</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/1710092.jpg">
											<span>SOMIC Li2入耳式音乐耳机</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/1710093.jpg">
											<span>SOMIC S3蓝牙运动耳机</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="./images/sec_bar/1710094.jpg">
											<span>V4 高保真入耳式 手机音乐耳塞 双动圈 高保真</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li id="li_03">毒蜂系列
							<span>></span>
							<div class="show_goods3">
								<ul>
									<li>
										<a href="">
											<img src="./images/sec_bar/1013.jpg">
											<span>G926 电脑头戴式 发光耳麦 呼吸灯 usb耳机 可调音量 全指向麦克风</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li>ING系列<span>></span></li>
					</ul>
				</div>
			    <ul>
				    <li><a href="index.v.html">首页</a></li>
				    <li><a href="game.v.html">游戏系列</a></li>
				    <li><a href="music.v.html">音乐系列</a></li>
				    <li><a href="service.v.html">服务</a></li>
			    </ul>
			    <div id="search_frame">
				    <input id="search_input" type="text" name="">
				    <button id="search_button"><img src="./images/search_Btn.png"></button>
			    </div>
		    </div>
		</div>
	</header>

	<section>
			<div id="m_center">
				<div class="left_title">
					<img class="left_p" src="./images/title.png" alt="" align="middle">
					 个人中心
					<img class="right_p" src="./images/title.png" alt="">
					<img class="left_pic" src="./images/out_title.png" alt="">
				</div>
				<div class="right_title">
					买的太少？<a href="index.v.html">继续逛逛>></a>
				</div>

				<div id="center_box">
					<div id="person_info">
						<ul>
							<li>
								<img src="./images/serviceCenter/130630220190632.jpg" alt="">
								<div id="show_name">
									<span>13631785168</span>
									<span>用户权限：会员</span>
									<span>安全等级：高</span>
								</div>
							</li>
							<li class="dash">
								<a class="f_pic" href="">
									<img src=".\images\serviceCenter/2017-10-12_144308.gif">
								    <span class="span_01">待付款</span>
								    <span class="span_02">0</span>
								</a>
								<a class="f_pic" href="">
									<img src=".\images\serviceCenter/2017-10-12_144441.gif">
									<span class="span_01">待发货</span>
								    <span class="span_02">0</span>
								</a>
								<a class="f_pic" href="">
									<img src=".\images\serviceCenter/2017-10-12_144535.gif">
									<span class="span_01"">待收货</span>
								    <span class="span_02">0</span>
								</a>
								<a class="f_pic" href="">
									<img src=".\images\serviceCenter/2017-10-12_144616.gif">
									<span class="span_01"">待评价</span>
								    <span class="span_02">0</span>
								</a>
							</li>
							<li class="dash">
								<a class="f_pic" href="">
									<img src=".\images\serviceCenter/2017-10-12_163747.gif">
								    <span class="span_01">收货地址</span>
								</a>
								<a class="f_pic" href="">
									<img src=".\images\serviceCenter/2017-10-12_164152.gif">
									<span class="span_01">优惠券</span>
								    <span class="span_02">0</span>
								</a>
								<a class="f_pic" href="">
									<img src=".\images\serviceCenter/2017-10-12_164310.gif">
									<span class="span_01"">收藏</span>
								    <span class="span_02">0</span>
								</a>
								<a class="f_pic" href="">
									<img src=".\images\serviceCenter/2017-10-12_163923.gif">
									<span class="span_01"">关注</span>
								    <span class="span_02">0</span>
								</a>
							</li>
						</ul>
					</div>


					<div id="book">
						<div class="l_tittle">
							 我的订单
						</div>
						<div class="r_tittle">
							<a href="" style="color: #999;text-decoration: none;">查看全部订单>></a>
						</div>
						<ul id="little_bar">
							<li>商品</li>
							<li>价格</li>
							<li>状态</li>
							<li>操作</li>
						</ul>
						<ul id="goods">
							<li>
								<a href="" ><img src="./images/serviceCenter/center1.jpg" alt="" style="width: 70px;vertical-align:middle;">G910 重低音 头戴式 电脑...</a>
							</li>
							<li><sapn class="span_03">￥169.00</span></li>
							<li>
								<sapn class="span_03">已完成</span>
							</li>
							<li>
								<sapn class="span_03">查看</sapn>
								<sapn class="span_03">删除</span>
							</li>
						</ul>
					</div>


					<div id="recommend">
						<div class="l_tittle">
							 优品推荐
						</div>
						<ul id="re_goods">
							<li><a href="" ><img src="./images/serviceCenter/center1.jpg" alt="" style="width: 90%;vertical-align:middle;"></a></li>
							<li><a href="" ><img src="./images/serviceCenter/center2.jpg" alt="" style="width: 90%;vertical-align:middle;"></a></li>
							<li><a href="" ><img src="./images/serviceCenter/center3.jpg" alt="" style="width: 90%;vertical-align:middle;"></a></li>
							<li><a href="" ><img src="./images/serviceCenter/center4.jpg" alt="" style="width: 90%;vertical-align:middle;"></a></li>
							<li><a href="" ><img src="./images/serviceCenter/center5.jpg" alt="" style="width: 90%;vertical-align:middle;"></a></li>
						</ul>
					</div>
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