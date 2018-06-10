<?php 
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SOMIC商城</title>
	<style type="text/css">
	body{
		margin: 0px;
		padding: 0px;
		background:  #F2F2F2;
	}
	#roll_pic{
		width: 100%;
		height: 465.833px;
	}
	#roll_pic>img:not(:first-child) {
		display: none;
	}
</style>
<link rel="stylesheet" type="text/css" href="./css/header.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
<link rel="stylesheet" type="text/css" href="./css/footer.css">
<link rel="stylesheet" type="text/css" href="./css/second_bar.css">
<script src="./js/jquery-3.2.1.min.js"></script>
<script>
	var interval;
	var pos = 0;
	window.onload = function() {
		var images = document.getElementsByName("imag");
		var roll_pic= document.getElementById("roll_pic");
		roll_pic.onmouseover = function() {
			clearInterval(interval);
		}
		roll_pic.onmouseout = function() {
			run(images);
		}
		run(images);
	}
	var run = function(images) {
		interval = setInterval(function() {
			images[pos].style.display = 'none';
			pos = ++pos == images.length ? 0 : pos;
			images[pos].style.display = 'inline';
		}, 1500);
	}
</script>
</head>
    <script type="text/javascript">
	    function show_bar(){
		    $("#goods_sorts").mouseenter(function(){
			    var obj=$("#goods_sorts ul li span");
			    for (var i = 0; i <obj.length; i++) {
			    	if(obj[i].innerText.length>8) {
				    	var newstr=obj[i].innerText.substr(0,8)+"...";
				    	obj[i].innerText=newstr;
					}
			    }
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
<body>
	<?php include('../api/indexApi.php');?>
	<header>
		<div id="logo_list">
			<a href=""><img src="./images/logo.png"></a>
			<ul>
				<li>
					<div id="user">
						<?php 
						if(isset($_SESSION['user'])){
							echo $_SESSION['user'];
						}
				?>
			<a id="userout" href="../api/userOutApi.php" style="display: none">注销</a></div>
				
				</li>
				<li>
					<a id="login" href="./login.v.php"></a>
				</li>
				<li>
					<a id="reg" href="./register.v.php"></a>
				</li>
				<li>
					<a id="shopcar" href="./shopcar.php"></a>
				</li>
				<li>
					<a id="download" href="./downloadApp.v.php"></a>
				</li>
			</ul>
			<script>
				function userCheck(){
					$.get('../api/userCheck.php',{'act':''},function(data){
						if(data.code==100){
							
							$('#user').css({'display':'none'});
						}else{							
							
							$('#login').css({'display':'none'});
							$('#reg').css({'display':'none'});
						}
					},'json');
				}
				$(userCheck);
				function showuesrOut(){
					$('#user').mouseenter(function(){
						$('#userout').css({'display':'block'});
					})
					$('#user').mouseleave(function(){
						$('#userout').css({'display':'none'});
					})
				}
				$(showuesrOut);
			</script>
		</div>
		<div id="shine">
			<div id="bar">
				<div id="goods_sorts">全部商品分类
					<ul>
						<li id="li_01">游戏系列
							<span>></span>
							<div class="show_goods">
								<ul>
									<?php
					if($res1){

						$tab="";
						foreach($res1 as $row){
							$img=htmlspecialchars_decode($row['img']);
							$name=$row['name'];
							if(mb_strlen($name, 'utf8')>10){
								$name=mb_substr($name,0,10,'utf8').'...';
							}
							$tab.='<li>
										<a href="./detail.php?id='.$row['id'].'">
											'.$img.'
											<span>'.$name.'</span>
										</a>
									</li>';
						}
						echo $tab;
					}
				?>
								
								</ul>
							</div>
						</li>
						<li id="li_02">音乐系列
							<span>></span>
							<div class="show_goods2">
								<ul>
									<?php
					if($res2){

						$tab="";
						foreach($res2 as $row){
							$img=htmlspecialchars_decode($row['img']);
							$name=$row['name'];
							if(mb_strlen($name, 'utf8')>10){
								$name=mb_substr($name,0,10,'utf8').'...';
							}
							$tab.='<li>
										<a href="./detail.php?id='.$row['id'].'">
											'.$img.'
											<span>'.$name.'</span>
										</a>
									</li>';
						}
						echo $tab;
					}
				?>
									
								</ul>
							</div>
						</li>
						<li id="li_03">毒蜂系列
							<span>></span>
							<!-- <div class="show_goods3">
								<ul>
									<li>
										<a href="">
											<img src="./images/sec_bar/1013.jpg">
											<span>G926 电脑头戴式 发光耳麦 呼吸灯 usb耳机 可调音量 全指向麦克风</span>
										</a>
									</li>
								</ul>
							</div> -->
						</li>
						<li>ING系列
							<span>></span>
						</li>
					</ul>
				</div>
				<ul>
					<li><a href="">首页</a></li>
					<li><a href="./game.v.php">游戏系列</a></li>
					<li><a href="./music.v.php">音乐系列</a></li>
					<li><a href="./service.v.html">服务</a></li>
				</ul>
				<div id="search_frame">
					<input id="search_input" type="text" name="">
					<button id="search_button"><img src="./images/search_Btn.png"></button>
				</div>
			</div>
		</div>
	</header>
	<div id="roll_pic">
		<img src="./images/9f7042b23f64421e9e5b87bafdfbf5d743621.jpg" name="imag" width="100%" height="465.833px" />
		<img src="./images/57786efeb584452594e54e3b3a2fde0f82258.jpg" name="imag" width="100%" height="465.833px" />
		<img src="./images/b2103a415264418fb5ca719ab2bd9f8894811.jpg" name="imag" width="100%" height="465.833px" />
	</div>
		<section>
		<div id="hot_sell">
			<div class="left_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				热卖单品推荐
				<img class="right_p" src="./images/title.png" alt="">
				<img class="left_pic" src="./images/out_title.png" alt="">
			</div>
			<!-- <div id="pic"></div> -->
			<ul id="border_show_1">
				<?php
					if($rows1){

						$tab="";
						foreach($rows1 as $row){
							$img=htmlspecialchars_decode($row['img']);
							$name=$row['name'];
							if(mb_strlen($name, 'utf8')>30){
								$name=mb_substr($name,0,25,'utf8').'...';
							}
							$tab.='<li>
					<a href="./detail.php?id='.$row['id'].'" id="">
						'.$img.'
						<span>'.$name.'</span>
					</a>
				</li>';
						}
						echo $tab;
					}
				?>
				<!-- <li>
					<a href="" id="hot_1">
						<img src="./images/hot_sell_1.jpg" alt="">
						<span>E95x 震动电脑耳麦 专业游戏电竞耳机头戴式 重低音</span>
					</a>
				</li>
				<li>
					<a href="" id="hot_2">
						<img src="./images/hot_sell_2.jpg" alt="">
						<span>G910 重低音 头戴式 电脑震动耳机耳麦</span>
					</a>
				</li>
				<li>
					<a href="" id="hot_3">
						<img src="./images/hot_sell_3.jpg" alt="">
						<span>G909PRO 7.1震动游戏影音耳机头戴式重低音电竞耳麦</span>
					</a>
				</li>
				<li>
					<a href="" id="hot_4">
						<img src="./images/hot_sell_4.jpg" alt="">
						<span>G941专业游戏耳机头戴式潮 usb震动电脑耳麦cf专用</span>
					</a>
				</li> -->
			</ul>
		</div>

		<div id="newthing"> 
			<div class="right_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				新品上架
				<img class="right_p" src="./images/title.png" alt="">
				<img class="right_pic" src="./images/out_titleR.png" alt="">
			</div>
			<ul class="qw">
				<img src="./images/girl.jpg" alt="">
				<?php
					if($rows2){

						$tab="";
						foreach($rows2 as $row){
							$img=htmlspecialchars_decode($row['img']);
							$name=$row['name'];
							if(mb_strlen($name, 'utf8')>30){
								$name=mb_substr($name,0,25,'utf8').'...';
							}
							$tab.='<li>
					<a href="./detail.php?id='.$row['id'].'">
						'.$img.'
						<span class="desc">'.$name.'</span>
						<span class="price">¥'.$row['price'].'</span>
					</a>
				</li>';
						}
						echo $tab;
					}
				?>
				<!-- <li>
					<a href="">
						<img src="./images/new1.jpg" alt="">
						<span class="desc">G951 电竞游戏耳机 头戴式 电脑耳机 被动降噪 免驱动</span>
						<span class="price">¥199.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new2.jpg" alt="">
						<span class="desc">G909PRO 7.1震动游戏影音耳机头戴式重低音电竞耳麦</span>
						<span class="price">¥299.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new3.jpg" alt="">
						<span class="desc">E95x 震动电脑耳麦 专业游戏电竞耳机头戴式 重低音</span>
						<span class="price">¥579.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new4.jpg" alt="">
						<span class="desc">G932 头戴式电脑耳机 USB游戏耳麦 笔记本7.1 CF</span>
						<span class="price">¥199.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new5.jpg" alt="">
						<span class="desc">G910 重低音 头戴式 电脑震动耳机耳麦</span>
						<span class="price">¥349.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new6.jpg" alt="">
						<span class="desc">G938 7.1音乐游戏头戴式笔记本电脑耳机 USB耳麦lol</span>
						<span class="price">¥159.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new7.jpg" alt="">
						<span class="desc">G909 7.1声道 专业震动USB游戏耳麦 低音强到震动 亲肤大耳罩</span>
						<span class="price">¥259.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new8.jpg" alt="">
						<span class="desc">P6 极炫手游耳机 电竞游戏耳机 3.5震动手机耳机潮</span>
						<span class="price">¥199.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new9.jpg" alt="">
						<span class="desc">Somic/硕美科 G951情久版专业电竞震动游戏耳机</span>
						<span class="price">¥209.00</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="./images/new10.jpg" alt="">
						<span class="desc"> V4 高保真入耳式 手机音乐耳塞 双动圈 高保真 </span>
						<span class="price">¥159.00</span>
					</a>
				</li> -->
			</ul>
		</div>

		<div id="remen">
			<div class="left_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				 热门搜索
				<img class="right_p" src="./images/title.png" alt="">
				<img class="left_pic" src="./images/out_title.png" alt="">
			</div>
			<div id="zhuti">
				<ul id="goods" class="qw">
					<img src="./images/boy.jpg" alt="">
					<?php
					if($rows3){

						$tab="";
						foreach($rows3 as $row){
							$img=htmlspecialchars_decode($row['img']);
							$name=$row['name'];
							if(mb_strlen($name, 'utf8')>30){
								$name=mb_substr($name,0,25,'utf8').'...';
							}
							$tab.='<li>
					<a href="./detail.php?id='.$row['id'].'">
						'.$img.'
						<span class="desc">'.$name.'</span>
						<span class="price">¥'.$row['price'].'</span>
					</a>
				</li>';
						}
						echo $tab;
					}
				?>
					<!-- <li>
						<a href="">
							<img src="./images/re1.jpg" alt="">
							<span class="desc">E95x 震动电脑耳麦 专业游戏电竞耳机头戴式 重低音</span>
							<span class="price">¥579.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re2.jpg" alt="">
							<span class="desc">G941专业游戏耳机头戴式潮 usb震动电脑耳麦cf专用</span>
							<span class="price">¥259.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re3.jpg" alt="">
							<span class="desc">G910 重低音 头戴式 电脑震动耳机耳麦</span>
							<span class="price">¥349.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re4.jpg" alt="">
							<span class="desc">G909PRO 7.1震动游戏影音耳机头戴式重低音电竞耳麦</span>
							<span class="price">¥279.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re5.jpg" alt="">
							<span class="desc">G909 7.1声道 专业震动USB游戏耳麦 低音强到震动</span>
							<span class="price">¥349.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re6.jpg" alt="">
							<span class="desc">SOMIC S3蓝牙运动耳机电脑耳机 被动降噪 免驱动</span>
							<span class="price">¥159.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re7.jpg" alt="">
							<span class="desc">G951 电竞游戏耳机 头戴式 电脑耳机 被动降噪 免驱动</span>
							<span class="price">¥179.00</span>
						</a>
					</li> -->
				</ul>
				<div id="rank">
					<div id="little_title">
						<span>HOT</span>
						热销排行榜
					</div>
					<div id="sellrank">
						<div class="nan">
							<a href="">
								<span>1</span>
								<div>
									<span class="rank_name">G941专业游戏耳机头戴式潮 usb震动电脑耳麦cf专用</span>
									<span class="new_price">￥249.00</span>
									<span class="old_price">519.00</span>
								</div>
								<img src="./images/hot_sell_4.jpg" alt="">
							</a>
						</div>
						<div class="nan">
							<a href="">
								<span>2</span>
								<div>
									<span class="rank_name">E95x 震动电脑耳麦 专业游戏电竞耳机头戴式 重低音</span>
									<span class="new_price">￥249.00</span>
									<span class="old_price">519.00</span>
								</div>
								<img src="./images/re1.jpg" alt="">
							</a>
						</div>
						<div class="nan">
							<a href="">
								<span>3</span>
								<div>
									<span class="rank_name">G909PRO 7.1震动游戏影音耳机头戴式重低音电竞耳麦</span>
									<span class="new_price">￥249.00</span>
									<span class="old_price">519.00</span>
								</div>
								<img src="./images/re4.jpg" alt="">
							</a>
						</div>
						<div class="nan">
							<a href="">
								<span>4</span>
								<div>
									<span class="rank_name">G938 7.1音乐游戏头戴式笔记本电脑耳机 USB耳麦lol</span>
									<span class="new_price">￥249.00</span>
									<span class="old_price">519.00</span>
								</div>
								<img src="./images/new6.jpg" alt="">
							</a>
						</div>
						<div class="nan">
							<a href="">
								<span>5</span>
								<div>
									<span class="rank_name">G932 头戴式电脑耳机 USB游戏耳麦 笔记本7.1 CF</span>
									<span class="new_price">￥249.00</span>
									<span class="old_price">519.00</span>
								</div>
								<img src="./images/new4.jpg" alt="">
							</a>
						</div>
						<div class="nan">
							<a href="">
								<span>6</span>
								<div>
									<span class="rank_name">G909 7.1声道 专业震动USB游戏耳麦 低音强到震动 亲肤大耳罩</span>
									<span class="new_price">￥249.00</span>
									<span class="old_price">519.00</span>
								</div>
								<img src="./images/re5.jpg" alt="">
							</a>
						</div>
						<div class="nan">
							<a href="">
								<span>7</span>
								<div>
									<span class="rank_name">P6 极炫手游耳机 电竞游戏耳机 3.5震动手机耳机潮</span>
									<span class="new_price">￥249.00</span>
									<span class="old_price">519.00</span>
								</div>
								<img src="./images/new6.jpg" alt="">
							</a>
						</div>
						<div class="nan">
							<a href="">
								<span>8</span>
								<div>
									<span class="rank_name">G910 重低音 头戴式 电脑震动耳机耳麦</span>
									<span class="new_price">￥249.00</span>
									<span class="old_price">519.00</span>
								</div>
								<img src="./images/re3.jpg" alt="">
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div id="youxi">
			<div class="right_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				游戏耳机推荐
				<img class="right_p" src="./images/title.png" alt="">
				<img class="right_pic" src="./images/out_titleR.png" alt="">
			</div>
			
				<ul class="qw">
					<img src="./images/boy2.jpg" alt="">
					<?php
					if($rows4){

						$tab="";
						foreach($rows4 as $row){
							$img=htmlspecialchars_decode($row['img']);
							$name=$row['name'];
							if(mb_strlen($name, 'utf8')>30){
								$name=mb_substr($name,0,25,'utf8').'...';
							}
							$tab.='<li>
					<a href="./detail.php?id='.$row['id'].'">
						'.$img.'
						<span class="desc">'.$name.'</span>
						<span class="price">¥'.$row['price'].'</span>
					</a>
				</li>';
						}
						echo $tab;
					}
				?>
					<!-- <li>
						<a href="">
							<img src="./images/hot_sell_2.jpg" alt="">
							<span class="desc">G910 重低音 头戴式 电脑震动耳机耳麦</span>
							<span class="price">¥349.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re1.jpg" alt="">
							<span class="desc">E95x 震动电脑耳麦 专业游戏电竞耳机头戴式 重低音</span>
							<span class="price">¥579.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re2.jpg" alt="">
							<span class="desc">G941专业游戏耳机头戴式潮 usb震动电脑耳麦cf专用</span>
							<span class="price">¥249.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re4.jpg" alt="">
							<span class="desc">G909PRO 7.1震动游戏影音耳机头戴式重低音电竞耳麦</span>
							<span class="price">¥349.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re7.jpg" alt="">
							<span class="desc">G951 电竞游戏耳机 头戴式 电脑耳机 被动降噪 免驱动</span>
							<span class="price">¥199.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/new4.jpg" alt="">
							<span class="desc">G932 头戴式电脑耳机 USB游戏耳麦 笔记本7.1 CF</span>
							<span class="price">¥199.00</span>
						</a>
					</li> -->
				</ul>
			</div>
			<div id="yinyue">
				<div class="left_title">
					<img class="left_p" src="./images/title.png" alt="" align="middle">
					 音乐耳机推荐
					<img class="right_p" src="./images/title.png" alt="">
					<img class="left_pic" src="./images/out_title.png" alt="">
				</div>
				<ul class="qw">
					<img src="./images/girl2.jpg" alt="">
					<?php
					if($rows5){

						$tab="";
						foreach($rows5 as $row){
							$img=htmlspecialchars_decode($row['img']);
							$name=$row['name'];
							if(mb_strlen($name, 'utf8')>30){
								$name=mb_substr($name,0,25,'utf8').'...';
							}
							$tab.='<li>
					<a href="./detail.php?id='.$row['id'].'">
						'.$img.'
						<span class="desc">'.$name.'</span>
						<span class="price">¥'.$row['price'].'</span>
					</a>
				</li>';
						}
						echo $tab;
					}
				?>
					<!-- <li>
						<a href="">
							<img src="./images/new10.jpg" alt="">
							<span class="desc"> V4 高保真入耳式 手机音乐耳塞 双动圈 高保真 </span>
							<span class="price">¥159.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/re6.jpg" alt="">
							<span class="desc">SOMIC S3蓝牙运动耳机手机音乐耳塞</span>
							<span class="price">¥399.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/yinyue3.jpg" alt="">
							<span class="desc">SOMIC Li2入耳式音乐耳机 双动圈 高保真</span>
							<span class="price">¥159.00</span>
						</a>
					</li> -->
				</ul>
			</div>
			<div id="tejia">
				<div class="right_title">
					<img class="left_p" src="./images/title.png" alt="" align="middle">
					特价商品
					<img class="right_p" src="./images/title.png" alt="">
					<img class="right_pic" src="./images/out_titleR.png" alt="">
				</div>
				<ul class="qw">
					<?php
					if($rows6){

						$tab="";
						foreach($rows6 as $row){
							$img=htmlspecialchars_decode($row['img']);
							$name=$row['name'];
							if(mb_strlen($name, 'utf8')>30){
								$name=mb_substr($name,0,25,'utf8').'...';
							}
							$tab.='<li>
					<a href="./detail.php?id='.$row['id'].'">
						'.$img.'
						<span class="desc">'.$name.'</span>
						<span class="price">¥'.$row['price'].'</span>
					</a>
				</li>';
						}
						echo $tab;
					}
				?>
					<!-- <li>
						<a href="">
							<img src="./images/re5.jpg" alt="">
							<span class="desc">G909 7.1声道 专业震动USB游戏耳麦 低音强到震动</span>
							<span class="price">¥259.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/new6.jpg" alt="">
							<span class="desc">G938 7.1音乐游戏头戴式笔记本电脑耳机 USB耳麦lol</span>
							<span class="price">¥159.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/new8.jpg" alt="">
							<span class="desc">P6 极炫手游耳机 电竞游戏耳机 3.5震动手机耳机潮</span>
							<span class="price">¥199.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img src="./images/tejia4.jpg" alt="">
							<span class="desc">Somic/硕美科 血魂 cf电竞游戏耳麦 头戴式 发光 </span>
							<span class="price">¥99.00</span>
						</a>
					</li> -->
				</ul>
			</div>
	</section>
	
</body>
<script src="./js/jquery-3.2.1.min.js"></script>
<script>
	var Str=function(){
		this.sub=function(){
			var str=document.getElementsByClassName('rank_name');
			var i=0
			for(i=0;i<8;i++){
				if(str[i].innerText.length>9){
					res=str[i].innerText.substr(0,9)+"...";
					str[i].innerText=res;

				}
			}
		
		}
	}
var a=new Str();
a.sub();
function borderShow(){
	var g=$('.qw').children('li');
	
	$(g).mouseenter(function(){
		$(this).css({"border":"1px solid red"});
	})
	$(g).mouseleave(function(){
		$(this).css({"border":"1px solid white"});
	})

}
$(borderShow);
function borderShow2(){
	var b=$('#border_show_1').children().children();
	$(b).mouseenter(function(){
		$(this).css({"border":"1px solid red"});
	})
	$(b).mouseleave(function(){
		$(this).css({"border":"1px solid white"});
	})
}
$(borderShow2);
</script>
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