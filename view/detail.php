<?php
error_reporting(0); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品详情</title>
	<link rel="stylesheet" type="text/css" href="./css/detail.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link rel="stylesheet" type="text/css" href="./css/header.css">
	<link rel="stylesheet" type="text/css" href="./css/second_bar.css">
	<script src="./js/jquery-3.2.1.min.js"></script>

</head>

<body>
	
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
		
		<?php include('../api/goodsDetailApi.php');?>
		<div id="abc"> 
			<ul id="left_title">
				<li>
					<a href="">首页</a>
				</li>
				<li>></li>
				<li>
					<a href="">
						<?php
						if($row['cid1']==13){
							echo "游戏系列";
						}else{
							echo "音乐系列";
						}
						?>
					</a>
				</li>
				<li>></li>
				<li>
					<?php
					echo $row['name'];

					?>
				</li>
			</ul>
			<div class="right_title">
				<img class="left_p" src="./images/title.png" alt="" align="middle">
				商品详情
				<img class="right_p" src="./images/title.png" alt="">
				<img class="right_pic" src="./images/out_titleR.png" alt="">
			</div>
			<div id="body">
				<div id="demo">
					
					<?php
					if($row){
						$tab='';
						$res=unserialize($row['lunbo']);
						$re=array();
						for($i=0;$i<5;$i++){
							$start=substr($res[$i],0,4);
							$end=substr($res[$i],4);
							$substr=' index="'.($i+1).'" ';
							$re[$i] = ($start . $substr . $end);
						}
						$start=substr($re[0],0,4);
						$end=substr($re[0],4);
						$substr=' class="on" ';
						$re[0] = ($start . $substr . $end);
						$tab.='<div id="view">
						<div id="chose_color">
						<img src="./images/detail/choose.jpg" alt="" style="width: 500px">
						</div>
						<div id="big_pic" style="left:-500px">
						'.$res[4].'
						'.$res[0].'
						'.$res[1].'
						'.$res[2].'
						'.$res[3].'
						'.$res[4].'
						'.$res[0].'

						</div>
						</div>
						<div id="left_btm" class="lr_btm">
						<img src="./images/detail/left_arr.png" alt="">
						</div>
						<div id="small_pic">						
						'.$re[0].'
						'.$re[1].'
						'.$re[2].'
						'.$re[3].'
						'.$re[4].'
						</div>
						<div id="right_btm" class="lr_btm">
						<img src="./images/detail/right_arr.png" alt="">
						</div><div id="goods_id" style="display:none">'.$row[id].'</div>';
						echo $tab;
					}
					?>

					<!-- <div id="view">
						<div id="chose_color">
						<img src="./images/detail/choose.jpg" alt="" style="width: 500px">
						</div>
						<div id="big_pic" style="left:-500px">
							<img src="./images/detail/demo5.jpg" alt="">
							<img src="./images/detail/demo1.jpg" alt="">
							<img src="./images/detail/demo2.jpg" alt="">
							<img src="./images/detail/demo3.jpg" alt="">
							<img src="./images/detail/demo4.jpg" alt="">
							<img src="./images/detail/demo5.jpg" alt="">
							<img src="./images/detail/demo1.jpg" alt="">
						</div>
					</div>
					<div id="left_btm" class="lr_btm">
						<img src="./images/detail/left_arr.png" alt="">
					</div>
					<div id="small_pic">						
						<img src="./images/detail/demo1.jpg" index="1" alt="" class="on">
						<img src="./images/detail/demo2.jpg" index="2" alt="">
						<img src="./images/detail/demo3.jpg" index="3" alt="">
						<img src="./images/detail/demo4.jpg" index="4" alt="">
						<img src="./images/detail/demo5.jpg" index="5" alt="">
					</div>
					<div id="right_btm" class="lr_btm">
						<img src="./images/detail/right_arr.png" alt="">
					</div> -->
				</div>
				<div id="product_buy">
					<div id="product_cost">
						<div id="detail_name"><?php
						echo $row['name'];

						?></div>
						<div id="detail_price">
							<span id="redprice">￥<span id="red_price"><?php
							echo $row['price'];

							?></span></span>
							
							<span id="gray_price">1098.00</span>
						</div>
						<ul id="detail_sale">
							<li>销量<span>122</span></li>
							<li>评价<span>1</span></li>
							<li>
								<img src="./images/detail/collect_not.png" alt="" style="vertical-align: middle;border: 0;width: 21px;">
								<a href="" id="collect">

									<span id="collect_span">收藏</span>
								</a></li>
							</ul>
						</div>
						<div id="detail_Btn">
							<div id="choose_good">
								<div id="good_color">
									<span class="btn_title">颜色</span>
									<button class="btn_item_color">
										<?php
										$res=unserialize($row['lunbo']);
										echo $res[0];
										?>
									</button>
									
								</div>
								<div>
									<span class="btn_title">套餐</span>
									<button class="btn_item_tao" style="width: 150px;height: 40px;">官方标配</button>
								</div>
								<div>
									<span class="btn_title">数量</span>
									<div id="control_much">
										<span id="num_minus">-</span>
										<input type="text" value="1" id="good_num">
										<span id="num_add">+</span>
									</div>
									<div id="show_much">
										库存：
										<span id="show_num">555</span>
										件
									</div>
								</div>
							</div>
						</div>
						<div id="car_buy">
							<button id="add_car" onclick="addshopCar()">加入购物车</button>
							<button id="buy_now" onclick="buyGoods()">立即购买</button>
						</div>
					</div>
					<ul class="tab_list">
						<li class="red_border"><a href="javascript:void(0);">详情描述</a></li>
						<li><a href="javascript:void(0);">商品参数</a></li>
						<li><a href="javascript:void(0);">用户评价</a></li>
						<li><a href="javascript:void(0);">售后保障</a></li>
					</ul>
					<div>
						<div class="detail_pic" style="display: block;font-size:0; ">
							<?php
							echo htmlspecialchars_decode($row['cnt']);

							?>
						</div>
						<div class="detail_pic" style="display: none">
							<table width="100%" cellpadding="10" cellspacing="50%">
								<?php
								$res=unserialize($row['prototype']);
								$tab='';
								$tr='';
								$i="1";
								foreach($res as $key=>$val){
									if(($i=="1")||($i=="4")||($i=="7")||($i=="10")){
										$tr.="<tr>";
									}
									$tr.="<td>{$key}:{$val}</td>";
									if(($i=="3")||($i=="6")||($i=="9")){
										$tr.="</tr>";
									}
									
									$i++;
								}
								echo $tr;
								?>
								<!-- <tr>
									<td>频响范围:20Hz-20kHz</td>
									<td>阻抗:32Ω</td>
									<td>接口类型:USB口</td>
								</tr>
								<tr>
									<td>声压:88dB±3db</td>
									<td>线长:≥2m</td>
									<td>重量:316G</td>
								</tr>
								<tr>
									<td>线型:单边导线</td>
									<td>音频接口:USB接口</td>
									<td>驱动单元类型/直径:40mm</td>
								</tr>
								<tr>
									<td>耳机/耳麦是否带线控:是</td>
								</tr> -->
							</table>
						</div>
						<div class="detail_pic" style="display: none">
							<div id="comment_title">
								总评价
								<img src="./images/detail/star.png" alt="">
								<img src="./images/detail/star.png" alt="">
								<img src="./images/detail/star.png" alt="">
								<img src="./images/detail/star.png" alt="">
								<img src="./images/detail/star.png" alt="">
							</div>
							<ul id="comment_list">
								<!-- <li>
									<div class="comment">
										<img src="./images/detail/face.png" alt="" style="width: 80px;float: left;">
										<span class="comment_id">***</span>
										<span class="comment_star"><img src="./images/detail/star.png" alt=""><img src="./images/detail/star.png" alt=""><img src="./images/detail/star.png" alt=""></span>
									</div>
									<span class="commnet_date">2017-04-16 </span>
									<div class="show_comment">恩。音效不错。以前用过G909，重量变轻后心里感觉有点不适应。</div>
								</li> -->
							</ul>
							<div id="comment_control_page"></div>
						</div>
						<div class="detail_pic" style="display: none">
							<div id="baoxiu">
								<span></span>
								<div id="baoxiu_title">支持七天无理由退换货</div>
								<span></span>
							</div>
							<div id="baoxiu_detail">
								<p class="red">服务承诺</p>
								<p class="black">硕美科平台卖家销售并发货的商品，由平台卖家提供发票和相应的售后服务。请您放心购买！</p>
								<p class="gray">注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</p>
								<p class="red">权利声明</p>
								<p class="black">硕美科上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是硕美科重要的经营资源，未许可，禁止非法转载使用。</p>
								<p class="gray">注：本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任。</p>
								<p class="red">价格说明</p>
								<p class="black">硕美科价：硕美科价为商品的销售价，是您最终决定是否购买商品的依据。</p>
								<p class="gray">划线价：商品展示的划横线价格为参考价，该价格可能是品牌专柜标价、商品吊牌价或由品牌供应商提供的正品零售价（如厂商指导价、建议零售价等）或该商品在硕美科平台上曾经展示过的销售价；由于地区、时间的差异性和市场行情波动，品牌专柜标价、商品吊牌价等可能会与您购物时展示的不一致，该价格仅供您参考。 折扣：如无特殊说明，折扣指销售商在原价、或划线价（如品牌专柜标价、商品吊牌价、厂商指导价、厂商建议零售价）等某一价格基础上计算出的优惠比例或优惠金额；如有疑问，您可在购买前联系销售商进行咨询。 异常问题：商品促销信息以商品详情页“促销”栏中的信息为准；商品的具体售价以订单结算页价格为准；如您发现活动商品售价或促销信息有异常，建议购买前先联系销售商咨询。</p>

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
			$(function(){
				var big_pic=$('#big_pic');
				var prev=$('#left_btm');
				var next=$('#right_btm');
				var btm=$('#small_pic img');
				var index=1;
				var fff = false;
				function animate(offset){
					fff=true;
					var left=parseInt(big_pic.css('left'))+offset;
					if (offset>0) {
						offset = '+=' + offset;
					}
					else {
						offset = '-=' + Math.abs(offset);
					}
					big_pic.animate({'left':offset},300, function() {
						if(left>-100){
							big_pic.css('left', -2500);
						}
						if(left<-2600){
							big_pic.css('left', -500);
						}
						fff=false;
					});
				}
				function showBorder(){
					btm.eq(index-1).addClass('on').siblings().removeClass('on');
				}
				prev.click(function(){
					if(fff){
					//alert(fff);
					return;
				}
				$('#chose_color').css({"z-index":'-1'});
				animate(500);
				if (index==1) {index=5;}
				else{index-=1;}
				showBorder();
			})
				next.click(function(){
					if(fff){
						return;
					}
					$('#chose_color').css({"z-index":'-1'});
					animate(-500);
					if (index==5) {index=1;}
					else{index+=1;}
					showBorder();
				})
				btm.each(function(){

					$(this).bind('click', function (){
						if(fff){
							return;
						}
						$('#chose_color').css({"z-index":'-1'});
						if($(this).attr('class')=='on'){
							return;
						}else{
							var myIndex = parseInt($(this).attr('index'));
							var offset = -500 * (myIndex - index);
							animate(offset);
							index=myIndex;
							showBorder();
						}
					})
				})
			});
		</script>
		<script>
			function showdetail(){
				$('.tab_list li').click(function(){
					i=$(this).index();
					$(this).addClass('red_border').siblings().removeClass('red_border');
					$('.detail_pic').eq(i).css({'display':'block'}).siblings().css({'display':'none'});

				})
			}
			$(showdetail);
		</script>
		<script>
			function goodnum(){
				$('#num_minus').click(function(){
					var num=$('#good_num').val();
					if(num>1){
						num=num-1;
						$('#good_num').val(num);
					}
				})
				$('#num_add').click(function(){
					var num=parseInt($('#good_num').val());
					num=num+1;
					$('#good_num').val(num);
				})
			}
			$(goodnum);
		</script>
		<script>
			function chooseGood(){
				$('.btn_item_color').click(function(){
					$(this).css({"border":'1px solid red'});
					//$('#chose_color').css({"z-index":'10'});
					$(this).siblings('.btn_item_color').css({"border":'1px solid #ccc'});
				})
				$('.btn_item_tao').click(function(){
					$(this).css({"border":'1px solid red'});
					$(this).siblings('.btn_item_tao').css({"border":'1px solid #ccc'});
				})
			}
			$(chooseGood);
		</script>

		<script>
			function addshopCar(){
				var id=$("#goods_id").text();			
				var num=$("#control_much input").val();
				var price=$("#red_price").text();
				var name=$("#detail_name").text();			
				$.get('../api/shopCarApi.php',{'act':'addGoodsToShopcar','id':id,'name':name,'price':price,'num':num},function(data){

					if(data.code==100){
						alert(data.msg);
						window.location.href="./login.v.php";
					}else{

						alert(data.msg);
					//window.history.go(-1);
				}
				
			},'json');
			}
			function buyGoods(){
				var id=$("#goods_id").text();			
				var num=$("#control_much input").val();
				var price=$("#red_price").text();
				var name=$("#detail_name").text();
				$.get('../api/shopCarApi.php',{'act':'addGoodsToShopcar','id':id,'name':name,'price':price,'num':num},function(data){
				//alert(data);
				if(data.code==100){
					alert(data.msg);
					window.location.href="./login.v.php";
				}else{
					
					alert(data.msg);
					window.location.href="./shopcar.php";
				}
				
			},'json');
			}
		</script>
		<script>
			function getComment(){
				var id=$("#goods_id").text();
				$.get('../api/shopCarApi.php',{'act':'getComment','id':id},function(data){
					var rows=data.data;
					makeLi(rows);
				
				},'json');
			}
			$(getComment);
			function makeLi(arr){
				var tab="";
				for(var i in arr){
					var row=arr[i];
					tab+='<li><div class="comment"><img src="./images/detail/face.png" alt="" style="width: 80px;float: left;"><span class="comment_id">'+row.userName+'</span><span class="comment_star"><img src="./images/detail/star.png" alt=""><img src="./images/detail/star.png" alt=""><img src="./images/detail/star.png" alt=""></span></div><span class="commnet_date">'+row.time+' </span><div class="show_comment">'+row.comment+'</div></li>'
				}
				$("#comment_list").html(tab);
			}
		</script>
		</html>