<?php
//error_reporting(0); 
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提交订单</title>
	<script src="./js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/mycenter.css">
	<link rel="stylesheet" type="text/css" href="./css/header.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link rel="stylesheet" type="text/css" href="./css/second_bar.css">
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/distpicker.data.js"></script>
	<script src="./js/distpicker.js"></script>
	<script src="./js/main.js"></script>
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
	<div id="hidebg"></div>
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
		<div id="abc">
			<div class="right_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				个人中心
				<img class="right_p" src="./images/title.png" alt="">
				<img class="right_pic" src="./images/out_titleR.png" alt="">
			</div> 
			<div id="body">
				
				<h2 style="color:#C8152D;">已购商品</h2>
				<div id="donot" style="margin-top: 20px;">
					<div class="comment_title">待评价</div>
					<div id="myshopcar" style="display: none" class="none"> 
						<div id="shopcar_head">
							<div id="good_name">商品名称</div>
							<div id="good_price">单价</div>
							<div id="good_num">购买数量</div>
							
							<div id="comment">评价</div>

						</div>
						<div id="php_here">
							<!-- <ul class="shopcar_good">
								<li class="li_name"><a href="" ><img src="./images/new5.jpg" alt="" >G910 重低音 头戴式 电脑震动耳机耳麦aaaaaa</a></li>
								<li class="li_price">￥<span>349.50</span></li>
								<li class="li_num">
									1
								</li>
								<li class="mycomment"><input type="text" placeholder="请输入评价"><span class="submit">提交</span></li>
							</ul>
							<ul class="shopcar_good">
								<li class="li_name"><a href="" ><img src="./images/new5.jpg" alt="" style="width: 70px;vertical-align:middle;">G910 重低音 头戴式 电脑震动耳机耳麦</a></li>
								<li class="li_price">￥<span>349.50</span></li>
								<li class="li_num">
									1
								</li>
								<li class="mycomment"><input type="text" placeholder="请输入评价"><span class="submit">提交</span></li>




							</ul> -->
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div id="done" style="margin-top: 20px">
					<div class="comment_title">已评价</div>
					<div id="myshopcar2" style="display: none" class="none">
						<div id="shopcar_head">
							<div id="good_name">商品名称</div>
							<div id="good_price">单价</div>
							<div id="good_num">购买数量</div>
							
							<div id="comment">我的评价</div>

						</div>
						<div id="php_here2">
							<!-- <ul class="shopcar_good">
								<li class="li_name"><a href="" ><img src="./images/new5.jpg" alt="" >G910 重低音 头戴式 电脑震动耳机耳麦aaaaaa</a></li>
								<li class="li_price">￥<span>349.50</span></li>
								<li class="li_num">
									1
								</li>
								<li class="mycomment">大舍大得撒旦起舞</li>
							</ul> -->
							
						</div>
						<div class="clear"></div>
					</div>

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

<script>
	function initComment2(){
		$.get('../api/shopCarApi.php',{'act':'initComment2'},function(data){
			var jsonRows=data.data;
			makeLi2(jsonRows);
		},'json');
	}
	$(initComment2);
	function makeLi2(arr){
		var tab="";
		for(var i in arr){
			var row=arr[i];
			tab+='<ul class="shopcar_good"><li class="li_name"><a href="./detail.php?id='+row.goodid+'" >'+row.img+''+row.goodname+'</a></li><li class="li_price">￥<span>'+row.price+'</span></li><li class="li_num">'+row.num+'</li><li class="mycomment">'+row.comment+'</li></ul>'
		}
		$("#php_here2").html(tab);
	}
</script>
<script>
	function initComment(){
		$.get('../api/shopCarApi.php',{'act':'initComment'},function(data){
			var jsonRows=data.data;
			
			makeLi(jsonRows);
		},'json');
	}
	$(initComment);
	function makeLi(arr){
		var tab="";
		var money=0;
		for(var i in arr){
			var row=arr[i];
			tab+='<ul class="shopcar_good"><li class="li_name"><a href="./detail.php?id='+row.goodid+'" >'+row.img+''+row.goodname+'</a></li><li class="li_price">￥<span>'+row.price+'</span></li><li class="li_num">'+row.num+'</li><li class="mycomment"><input type="text" placeholder="请输入评价"><span id="'+row.id+'" class="submit" onclick=comment(this);>提交</span></li></ul>'
		}
		$("#php_here").html(tab);
	}
</script>
<script>
	function comment(e){
		var id=$(e).attr("id");
		var comment=$(e).siblings().val();
		//alert(comment)
		$.get('../api/shopCarApi.php',{'act':'addComment','id':id,'comment':comment},function(data){
			alert(data.msg);
		},'json');
		window.location.reload();
		
	}
	
</script>
<script>
	function show(){
		$('.comment_title').click(function(){
			if('none'==$(this).siblings().attr('class')){
				$(this).siblings().slideDown(1000);
				$(this).siblings().addClass('block');
				$(this).siblings().removeClass('none');
				return false;
			}
			if($(this).siblings().attr('class')=='block'){
				$(this).siblings().slideUp(1000);
				$(this).siblings().addClass('none');
				$(this).siblings().removeClass('block');
			}
		})
	}
	$(show);
</script>
</html>