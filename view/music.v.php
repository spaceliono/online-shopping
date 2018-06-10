<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>音乐系列</title>
	<link rel="stylesheet" type="text/css" href="./css/music.css">
	<link rel="stylesheet" type="text/css" href="./css/header.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
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
						<div id="userout" style="display: none"><a  href="../api/userOutApi.php">注销</a></div></div>
						
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
						<a id="download" href="downloadApp.v.php"></a>
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
						<ul style="display: none">
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
					<li><a href="./index.v.php">首页</a></li>
					<li><a href="./game.v.php">游戏系列</a></li>
					<li><a href="./music.v.php">音乐系列</a></li>
					<li><a href="./service.v.php">服务</a></li>
				</ul>
				<div id="search_frame">
					<input id="search_input" type="text" name="">
					<button id="search_button"><img src="./images/search_Btn.png"></button>
				</div>
			</div>
		</div>
	</header>


	<section>
		<div id="music"> 
			<div class="left_title">
				<ul>
					<li><a href="index.v.html">首页</a></li>
					<li>></li>
					<li><a href="music.v.html">音乐系列</a></li>
				</ul>
			</div>
			<div class="right_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				音乐系列
				<img class="right_p" src="./images/title.png" alt="">
				<img class="right_pic" src="./images/out_titleR.png" alt="">
			</div>
			<div id="music_box">
				<ul>
					<?php
					if($res4){

						$tab="";
						foreach($res4 as $row){
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
							<span class="throut_price">129.00</span>
						</a>
					</li>';
						}
						echo $tab;
					}
				?>
					<!-- <li>
						<a href="">
							<img class="shopcar-pic" src="./images/music/shop_car.png">
							<img class="img" src="./images/music/1710091.jpg" alt="">
							<span class="desc">Somic/硕美科 SC500入耳式主动降噪耳机重低音线控音乐耳塞带麦</span>
							<span class="price">¥599.00</span>
							<span class="throut_price">599.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/music/shop_car.png">
							<img class="img" src="./images/music/1710092.jpg" alt="">
							<span class="desc">SOMIC Li2入耳式音乐耳机</span>
							<span class="price">¥159.00</span>
							<span class="throut_price">279.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/music/shop_car.png">
							<img class="img" src="./images/music/1710093.jpg" alt="">
							<span class="desc">SOMIC S3蓝牙运动耳机</span>
							<span class="price">¥399.00</span>
							<span class="throut_price">599.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/music/shop_car.png">
							<img class="img" src="./images/music/1710094.jpg" alt="">
							<span class="desc">V4 高保真入耳式 手机音乐耳塞 双动圈 高保真</span>
							<span class="price">¥159.00</span>
							<span class="throut_price">328.00</span>
						</a>
					</li> -->
				</ul>
			</div>
		</div>
		<script  src="./js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			function showcar(){
				// var obj=$("#music #music_box ul li").find('.shopcar-pic');
				$('#music #music_box ul li').mouseenter(function(){
					$(this).find('.shopcar-pic').stop().fadeIn(500)
				}).mouseleave(function(){
					$(this).find('.shopcar-pic').stop().fadeOut(500)
				})
			}
			// $(showcar)
		</script>
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