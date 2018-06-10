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
	<link rel="stylesheet" type="text/css" href="./css/order.css">
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
				订单
				<img class="right_p" src="./images/title.png" alt="">
				<img class="right_pic" src="./images/out_titleR.png" alt="">
			</div> 
			<div id="body">
				<div id="msg_change" style="display: none">		
					<input type="text" placeholder="收货人姓名" name="username" id="username">
					<input type="text" placeholder="收货人电话" name="userphone" id="userphone">
					<div data-toggle="distpicker" style="margin-top: 15px;">
						<div class="form-group">
							<label class="sr-only" for="province1"></label>
							<select class="form-control" id="province1" name="province"><option value="" data-code="">—— 省 ——</option><option value="北京" data-code="110000" >北京</option><option value="天津市" data-code="120000">天津市</option><option value="河北省" data-code="130000">河北省</option><option value="山西省" data-code="140000">山西省</option><option value="内蒙古自治区" data-code="150000">内蒙古自治区</option><option value="辽宁省" data-code="210000">辽宁省</option><option value="吉林省" data-code="220000">吉林省</option><option value="黑龙江省" data-code="230000">黑龙江省</option><option value="上海市" data-code="310000">上海市</option><option value="江苏省" data-code="320000">江苏省</option><option value="浙江省" data-code="330000">浙江省</option><option value="安徽省" data-code="340000">安徽省</option><option value="福建省" data-code="350000">福建省</option><option value="江西省" data-code="360000">江西省</option><option value="山东省" data-code="370000">山东省</option><option value="河南省" data-code="410000">河南省</option><option value="湖北省" data-code="420000">湖北省</option><option value="湖南省" data-code="430000">湖南省</option><option value="广东省" data-code="440000">广东省</option><option value="广西壮族自治区" data-code="450000">广西壮族自治区</option><option value="海南省" data-code="460000">海南省</option><option value="重庆市" data-code="500000">重庆市</option><option value="四川省" data-code="510000">四川省</option><option value="贵州省" data-code="520000">贵州省</option><option value="云南省" data-code="530000">云南省</option><option value="西藏自治区" data-code="540000">西藏自治区</option><option value="陕西省" data-code="610000">陕西省</option><option value="甘肃省" data-code="620000">甘肃省</option><option value="青海省" data-code="630000">青海省</option><option value="宁夏回族自治区" data-code="640000">宁夏回族自治区</option><option value="新疆维吾尔自治区" data-code="650000">新疆维吾尔自治区</option><option value="台湾省" data-code="710000">台湾省</option><option value="香港特别行政区" data-code="810000">香港特别行政区</option><option value="澳门特别行政区" data-code="820000">澳门特别行政区</option></select>
						</div>
						<div class="form-group">
							<label class="sr-only" for="city1"></label>
							<select class="form-control" id="city1" name="city"><option value="" data-code="">—— 市 ——</option><option value="北京市市辖区" data-code="110100" selected="">北京市市辖区</option></select>
						</div>
						<div class="form-group">
							<label class="sr-only" for="district1"></label>
							<select class="form-control" id="district1" name="district"><option value="" data-code="">—— 区 ——</option><option value="东城区" data-code="110101" selected="">东城区</option><option value="西城区" data-code="110102">西城区</option><option value="朝阳区" data-code="110105">朝阳区</option><option value="丰台区" data-code="110106">丰台区</option><option value="石景山区" data-code="110107">石景山区</option><option value="海淀区" data-code="110108">海淀区</option><option value="门头沟区" data-code="110109">门头沟区</option><option value="房山区" data-code="110111">房山区</option><option value="通州区" data-code="110112">通州区</option><option value="顺义区" data-code="110113">顺义区</option><option value="昌平区" data-code="110114">昌平区</option><option value="大兴区" data-code="110115">大兴区</option><option value="怀柔区" data-code="110116">怀柔区</option><option value="平谷区" data-code="110117">平谷区</option><option value="密云区" data-code="110118">密云区</option><option value="延庆区" data-code="110119">延庆区</option></select>
						</div>
					</div>							
					<div class="clear"></div>
					<input type="text" placeholder="街道编号/名称，门牌号" style="width: 410px;" name="street" id="street">
					<div id="close_btn">取消</div>
					<div id="save_btn">保存</div>
				</div>
				<form action="../api/orderApi.php" method="post">
					<div id="user_msg">
						<h4>收货信息</h4>
						<div id="change">
							<div id="get_user_msg">
							<!-- <p>习近平</p>
							<p>123456789</p>
							<p>广东省东莞市松山湖</p>
							<p>东莞理工学院</p> -->
						<!-- 	<input type="hidden" name="username" value="'+data.username+'">
							<input type="hidden" name="userphone" value="'+data.phone+'">
							<input type="hidden" name="province" value="'+data.province+'">
							<input type="hidden" name="city" value="'+data.city+'">
							<input type="hidden" name="district" value="'+data.district+'">
							<input type="hidden" name="street" value="'+data.street+'"> -->
						</div>
						<div id="change_btn">修改</div>
					</div>


				</div>

				<div class="clear"></div>

				<div id="myshopcar">
					<div id="shopcar_head">
						<div id="good_name">商品名称</div>
						<div id="good_price">价格</div>
						<div id="good_num">数量</div>
						<div id="xiaoji">小计</div>

					</div>
					<div id="php_here">

							<!-- <ul class="shopcar_good">
								<li class="li_name"><a href="" ><img src="./images/new5.jpg" alt="" >G910 重低音 头戴式 电脑震动耳机耳麦</a></li>
								<li class="li_price">￥<span>349.50</span></li>
								<li class="li_num">
									1
								</li>
								<li class="li_xiaoji">￥<span>349.00</span></li>



							</ul>
							<ul class="shopcar_good">
								<li class="li_name"><a href="" ><img src="./images/new5.jpg" alt="" style="width: 70px;vertical-align:middle;">G910 重低音 头戴式 电脑震动耳机耳麦</a></li>
								<li class="li_price">￥<span>349.50</span></li>
								<li class="li_num">
									1
								</li>
								<li class="li_xiaoji">￥<span>349.00</span></li>



							</ul> -->
						</div>
						<div class="clear"></div>
						<div id="toPay"><div>总计:￥<span id="all_price">0</span></div><input type="submit" value="立即下单"></div>
						<a href="./shopcar.php" style="color: red;text-decoration:underline">去购物车再看看</a>
					</form>

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
	function getAddress(){
		$.get('../api/addressApi.php',{act:'get_msg'},function(data){
			var tab="";
			if(data){

			
			tab+='<p>'+data.username+'</p><p>'+data.phone+'</p><p>'+data.province+''+data.city+''+data.district+'</p><p>'+data.street+'</p><input type="hidden" name="username" value="'+data.username+'"><input type="hidden" name="userphone" value="'+data.phone+'"><input type="hidden" name="province" value="'+data.province+'"><input type="hidden" name="city" value="'+data.city+'"><input type="hidden" name="district" value="'+data.district+'"><input type="hidden" name="street" value="'+data.street+'">';
		}else{
			tab='<p>请输入收货信息</p>';
		}
			$('#get_user_msg').html(tab);
		
		},'json')
	}
	$(getAddress);
</script>
<script>
	function showchangeBtn(){
		$('#change').mouseenter(function(){
			$('#change_btn').stop().animate({bottom:'0px'},500);
		})
		$('#change').mouseleave(function(){
			$('#change_btn').stop().animate({bottom:'-50px'},500);
		})
	}
	$(showchangeBtn);
	function changeWindows(){
		$('#change_btn').click(function(){
			var h=$('body').css('height');
			$('#msg_change').css({'display':'block'});
			$('#hidebg').css({'display':'block','height':h});
		})
		$('#close_btn').click(function(){
			
			$('#msg_change').css({'display':'none'});
			$('#hidebg').css({'display':'none'});
		})
		$('#save_btn').click(function(){
			var username=$('#username').val();
			var userphone=$('#userphone').val();
			var province=$('#province1').val();
			var city=$('#city1').val();
			var district=$('#district1').val();
			var street=$('#street').val();
			$.get('../api/addressApi.php',{act:'save_msg',username:username,userphone:userphone,province:province,city:city,district:district,street:street},function(data){
				//alert(data.msg);
			},'json')

			window.location.reload();
			// $('#msg_change').css({'display':'none'});
			// $('#hidebg').css({'display':'none'});
		})
	}
	$(changeWindows);
	
</script>
<script>
	function initShopCar(){
		$.get('../api/shopCarApi.php',{'act':'initShopCar'},function(data){
			if(data.code==100){
				window.location.href="./login.v.php";
			}
			if(data.code==105){
				//alert(data.msg);
				var jsonRows=data.data;
				
				makeLi(jsonRows);
			}
			if(data.code==104){
				//alert(data.msg);
					// $("#empty").css("display","block");
					// $("#non-empty").css("display","none");
					// $("footer").css("display","none");
				}
			},'json');
	}
	$(initShopCar);
	function makeLi(arr){
		var tab="";
		var money=0;
		for(var i in arr){
			var row=arr[i];
			var xiaoji=parseFloat(row.price)*parseInt(row.num);
			xiaoji=xiaoji.toFixed(2);
			money+=(parseFloat(row.price)*parseInt(row.num));
			tab+='<ul class="shopcar_good"><li class="li_name"><a href="./detail.php?id='+row.goodid+'" >'+row.img+''+row.goodname+'</a></li><li class="li_price">￥<span>'+row.price+'</span></li><li class="li_num">'+row.num+'</li><li class="li_xiaoji">￥<span>'+xiaoji+'</span></li><input type="hidden" value="'+row.goodid+'" id="'+row.goodid+'" name="goodsid[]"></ul>'
		}
		money=money.toFixed(2);
		$("#all_price").text(money);
		$("#php_here").html(tab);

	}
</script>

</html>