<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>游戏系列</title>
	<link rel="stylesheet" type="text/css" href="./css/game.css">
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
		<div id="game"> 
			<div class="left_title">
				<ul>
					<li><a href="index.v.php">首页</a></li>
					<li>></li>
					<li><a href="game.v.php">游戏系列</a></li>
				</ul>
			</div>
			<div class="right_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				游戏系列
				<img class="right_p" src="./images/title.png" alt="">
				<img class="right_pic" src="./images/out_titleR.png" alt="">
			</div>
			<div id="game_box">
				<ul>
					<?php
					if($res3){

						$tab="";
						foreach($res3 as $row){
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
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/171.png" alt="">
							<span class="desc">G618</span>
							<span class="price">¥129.00</span>
							<span class="throut_price">129.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/172.jpg" alt="">
							<span class="desc">Somic/硕美科 G949DE游戏耳机头戴式发光电竞耳麦USB电脑7.1带麦</span>
							<span class="price">¥329.00</span>
							<span class="throut_price">559.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/173.jpg" alt="">
							<span class="desc">Somic/硕美科 G951情久版专业电竞震动游戏耳机</span>
							<span class="price">¥209.00</span>
							<span class="throut_price">309.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/174.jpg" alt="">
							<span class="desc">Somic/硕美科 血魂 cf电竞游戏耳麦 头戴式 发光 电脑耳机带麦</span>
							<span class="price">¥89.00</span>
							<span class="throut_price">189.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/175.jpg" alt="">
							<span class="desc">Somic/硕美科 G983 头戴式7.1耳麦 双麦克风主动降噪Xbox耳机PS3</span>
							<span class="price">¥399.00</span>
							<span class="throut_price">798.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/176.jpg" alt="">
							<span class="desc">G951 电竞游戏耳机 头戴式 电脑耳机 被动降噪 免驱动 振动耳麦</span>
							<span class="price">¥199.00</span>
							<span class="throut_price">299.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/177.jpg" alt="">
							<span class="desc">P6 极炫手游耳机 电竞游戏耳机 3.5震动手机耳机潮</span>
							<span class="price">¥199.00</span>
							<span class="throut_price">299.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/178.jpg" alt="">
							<span class="desc">G909PRO 7.1震动游戏影音耳机头戴式重低音电竞耳麦</span>
							<span class="price">¥279.00</span>
							<span class="throut_price">369.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/179.jpg" alt="">
							<span class="desc">E95 荣耀版 7.1震动游戏耳机头戴式 电竞电脑带耳麦</span>
							<span class="price">¥389.00</span>
							<span class="throut_price">698.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/1710.jpg" alt="">
							<span class="desc">G938 7.1音乐游戏头戴式笔记本电脑耳机 USB耳麦lol</span>
							<span class="price">¥159.00</span>
							<span class="throut_price">259.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/1711.jpg" alt="">
							<span class="desc">G932 头戴式电脑耳机 USB游戏耳麦 笔记本7.1 CF</span>
							<span class="price">¥199.00</span>
							<span class="throut_price">379.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/1712.jpg" alt="">
							<span class="desc">E95x 震动电脑耳麦 专业游戏电竞耳机头戴式 重低音</span>
							<span class="price">¥579.00</span>
							<span class="throut_price">1098.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/1713.jpg" alt="">
							<span class="desc">G923 头戴式 电脑游戏耳机耳麦 带线控 立体声</span>
							<span class="price">¥75.00</span>
							<span class="throut_price">175.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/1714.jpg" alt="">
							<span class="desc">G941专业游戏耳机头戴式潮 usb震动电脑耳麦cf专用</span>
							<span class="price">¥249.00</span>
							<span class="throut_price">518.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/1715.jpg" alt="">
							<span class="desc">G910 重低音 头戴式 电脑震动耳机耳麦</span>
							<span class="price">¥349.00</span>
							<span class="throut_price">499.00</span>
						</a>
					</li>
					<li>
						<a href="">
							<img class="shopcar-pic" src="./images/game/shop_car.png">
							<img class="img" src="./images/game/1716.jpg" alt="">
							<span class="desc">G909 7.1声道 专业震动USB游戏耳麦 低音强到震动 亲肤大耳罩</span>
							<span class="price">¥259.00</span>
							<span class="throut_price">500.00</span>
						</a>
					</li> -->
				</ul>
			</div>
		</div>
		<script  src="./js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			function showcar(){
				var obj=$("#game #game_box ul li").find('.shopcar-pic');
				$('#game #game_box ul li').mouseenter(function(){
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