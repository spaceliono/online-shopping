<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>服务---商家说明</title>
	<script src="./js/jquery-3.2.1.min.js"></script>
	<script src="./js/hm.js"></script>
	<style>
</style>
<link rel="stylesheet" type="text/css" href="./css/service.css">
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
		<div class="left_title">
			<img class="left_p" src="./images/title.png" alt="" align="middle">
				服务
			<img class="right_p" src="./images/title.png" alt="">
			<img class="left_pic" src="./images/out_title.png" alt="">
		</div>
		<ul class="box">
			<ul class="left_box">
				<li class="server1">
					<div class="serverTitle1">
						<a id="serverTitle1" onclick="show_cate()" href="javascript:void(0);">售后服务<img style="margin-left:50px" src="./images/img/put_up.gif" alt=""><img style="margin-left:50px;display: none" src="./images/img/put_down.gif" alt=""></a>
						<a id="serverTitle2" onclick="hidd_cate()" style="display: none" href="javascript:void(0);">售后服务<img style="margin-left:50px" src="./images/img/put_down.gif" alt=""></a>
					</div>
					<ul class="shouhou" id="shouhou" style="display:block;width:105px;height: 210px;">
						<li><a  onclick="show_shangjia(this)" href="javascript:void(0);">商家说明</a></li>
						<li><a  onclick="show_fahuo(this)" href="javascript:void(0);">关于发货</a></li>
						<li><a  onclick="show_qianshou(this)" href="javascript:void(0);">关于签收</a></li>
						<li><a  onclick="show_tuihuanhuo(this)" href="javascript:void(0);">退换货通知</a></li>
						<li><a  onclick="show_fapiao(this)" href="javascript:void(0);">发票/收据说明</a></li>
					</ul>
				</li>				
				<li class="server2"  onclick="show_connet(this)"><a id="server2" href="javascript:void(0);">联系客服</a></li>
				<script>
					function show_cate(){
						// var da=document.getElementById('serverTitle');
						// alert(da);
						$("#serverTitle1").css('display','none');
						$("#serverTitle2").css('display','block');
						$(".server1 ul").animate({
							    height:'toggle'
							},10);
					}	
					function hidd_cate(){
						// var da=document.getElementById('serverTitle');
						// alert(da);
						$("#serverTitle2").css('display','none');
						$("#serverTitle1").css('display','block');
						$(".server1 ul").animate({
							    height:'toggle'
							},10);
					}			
					
				</script>
			</ul>
			
			<ul class="right_box" id="right_box" style="display: none">
				<div class="font_size_color">联系客服</div>
				<li>
					<img src="./images/img/wechat.gif" alt="">
					<p>关注硕美科微信</p>
					<span>Somic1999</span>
				</li>
				<li>
					<img src="./images/img/weibo.gif" alt="">
					<p>关注硕美科微博</p>
					<span>SOMIC硕美科</span>
				</li>
				<li>
					<img src="./images/img/qq.gif" alt="">
					<p>加入硕美科官方粉丝群</p>
					<span>378052209</span>
				</li>
				<li>
					<img src="./images/img/phone.gif" alt="">
					<p>顾客咨询热线</p>
					<span>400-689-9993</span>
				</li>
			</ul>
			<ul class="right_box_shangjia" id="right_box_shangjia" style="display: block">
				<div class="font_size_color">商家说明</div>
				<p><br></p>
				<span class="text_red">首先感谢所有用户一直以来对硕美科产品的支持，不论是什么原因导致需要换货或退货，我们都感到万分的歉意和遗憾。但请您放心，无论什么问题请您及时联系我们，我们都会尽快帮您妥善处理。</span>
				<br><br>
				<span class="text_red">注：售后服务均以买家签收商品的时间算起。</span>
				<br><br>
				<span class="text_gray">1、由于影音电器，3C数码商品升级较快，产品包装如有变动更改，恕不能另行通知，还请各位买家见谅。</span>
				<br><br>
				<span class="text_gray">2、由于商品参数均是申请产品型号时系统自动生成的，导致与商品参数存在出入，还请各位买家以本商城“商品参数”栏目描述为准。</span>
				<br><br>
				<span class="text_gray">3、如果亲们收到与“产品规格”描述不符合，本店将严格遵守7天无理由退换货原则给予买家处理问题。</span>
			</ul>
			<ul class="right_box_fahuo" id="right_box_fahuo" style="display: none;">
				<div class="font_size_color">关于发货</div>
				<p><br></p>
				<span class="text_red">发货时间</span>
				<br><br>
				<span class="text_gray">所有订单在买家拍下付款后72小时内发货，每日发货截止时间为下午18:00。如遇国家法定假期，货物将有所延误，我们将及时联系买家。</span>
				<br><br>
				<span class="text_red">配送物流</span>
				<br><br>
				<span class="text_gray">默认快递为申通，（港澳台以及海外地区均不能发货）买家请务必看清楚，或咨询客服人员。</span>
				<br><br>
				<span class="text_red">确认物流</span>
				<br><br>
				<span class="text_gray">为了避免延误您的购物时间，还请亲们购物前务必查询确认清楚自己的收货地址有哪些快递能到达，亲们可将物流公司名备注在订单内，客服将以您备注的物流信息为准，恕不能为每位买家逐一查询或者保证默认快递可到达。</span>
				<br><br>
				<span class="text_red">到货说明</span>
				<br><br>
				<span class="text_gray">我们尽量为每一位买家做到，拍下付款后48小时内发货，如遇到货物短缺或个别突发情况，我们将尽快和您取得联系进行协商事宜。</span>
				<br><br>
				<span class="text_gray">	我们没办法向买家保证任何到货时间，以下地区大概时间为：广东省内地区：1-3天到达，近郊有可能晚一天时间</span>
				<br>
				<span class="text_gray">广东省外地区一般到达时间为：2-6天</span>
				<br>
				<span class="text_gray">具体到货时间请以申通官网为准，其他如遇天气情况问题影响收货时间，还请各位买家谅解！</span>
				<br><br>
				<p class="text_red">注：买家确定快递可到达时，意外发现快递实际不到达，造成的时间延误，或产生的其他费用，本商城将不承担任何责任。</p>
			</ul>
			<ul class="right_box_qianshou" id="right_box_qianshou" style="display: none;">
				<div class="font_size_color">关于签收</div>
				<p><br></p>
				<span class="text_red">请亲们在收货时注意以下几点：</span>
				<br><br>
				<span class="text_gray">1、货品外包装完好无损，封口处无二次封装痕迹（双方预先同意发货前验货除外）。</span>
				<br><br>
				<span class="text_gray">2、请务必在当地物流人员面前拆包检查，确认商品外包装是否完好，仔细检测核对包装内所有物件，商品无损坏。</span>
				<br><br>
				<span class="text_gray">3、如签收商品时发现有损坏或其他因素，在您拒收的同时请第一时间与我们联系。包装损坏或商品物件脱落，请拒绝收货并及时联系我们。</span>
				<br><br>
				<span class="text_gray">4、如有代签事宜视同本人签收，有部分买家因收货不方便，让家人、朋友、门卫代为签收的，请叮嘱代收人收货时务必检查好商品。</span>
				<br><br>
				<span class="text_gray">5、如买家签收后有任何疑问或者不满意的，请买家及时联系我们，我们将尽快给予您满意的答复。</span>
				<br><br>
				<span class="text_red">特别提醒</span>
				<br><br>
				<span class="text_gray">&nbsp;&nbsp;&nbsp;&nbsp;因考虑到各地区快递人员的服务规范不一，再次建议买家跟快递人员友善商量好后签收检查货物。如不当面检查签收，到时候发现商品存在问<br>题或包装有缺陷，快递公司不再承担任何责任。为了让您有一个愉快的购物流程，希望大家多多配合。</span>				
			</ul>
			<ul class="right_box_tuihuanhuo" id="right_box_tuihuanhuo" style="display:none ">
				<div class="font_size_color">退换货须知</div>
				<p><br></p>
				<span class="text_red">申请退换货基本条件</span>
				<br><br>
				<span class="text_gray">1、退换商品应保持收货时的商品原貌（商品本身有质量问题的除外）。</span>
				<br>
				<span class="text_gray">2、退换货商品应保持商品外包装完好、原商品、附带商品以及附属配件齐全。</span>
				<br>
				<span class="text_gray">3、顾客需提供购买凭证（发票、收据、出货单、网络订单号），故障产品图片等有效凭证。</span>
				<p><br></p>
				<span class="text_red">不符合申请退换货情况</span>
				<br><br>
				<span class="text_gray">1、商品自身携带的商品序列号与商户出售时约定的不符合。</span>
				<br>
				<span class="text_gray">2、商品包装损坏以及质保标签、机身条形码被涂改、撕毁或无法辨认。</span>
				<br>
				<span class="text_gray">3、未按商品说明使用或私自将商品拆卸、修理引起的商品损坏。</span>
				<br>
				<span class="text_gray">4、因个人原因导致商品跌落、碰撞、挤压而造成的故障或破损等人为损坏现象。</span>
				<br>
				<span class="text_gray">5、请顾客退换货时为商品安全负责，如退换货过程中发生运输损坏或包装破损等问题，恕无法为您履行退换货服务。</span>
				<p><br></p>
				<span class="text_red">七天无理由退换货以及商品维修服务</span>
				<br><br>
				<span class="text_gray">1、商品七天内非质量问题，在保证商品本身、配件、包装及赠品完好无损且没有使用过，不影响二次销售，可接受客户退款要求。但往返运费需</span>
				<br>
				<span class="text_gray">2、商品七天内出现质量问题，将按顾客要求进行退换货，为了避免有运费纠纷，买家需联系我们的售后客服，配合完成初步检测，并登记发货回<br>来的产品条形码（质量问题运费由卖家承担）。</span>
				<br>
				<span class="text_gray">3、头戴耳机交易成功一年内出现质量问题，可以免费维修（来回运费由买家承担）。音乐耳塞、手机耳塞、键鼠、音响在交易成功一个月内出现质<br>量问题，可进行换货服务（来回运费由买家承担）。</span>
			</ul>
			<ul class="right_box_fapiao" id="right_box_fapiao" style="display: none">
				<div class="font_size_color">发票/收据说明</div>
				<p><br></p>
				<span class="text_gray">本商城所售商品均可开具增值税发票以及收据，请买家与我们的客服人员联系，<br>登记发票抬头。所有票据是由公司财务部审核确认后才能开出，时间较长。</span>
				<br><br>
				<span class="text_gray">开发票的时间为：</span>
				<br><br>
				<span class="text_gray">当月购买的商品，次月月中或月尾开出发票并邮寄，如遇特殊情况，我们的客服会及时与您联系。</span>
			</ul>
		</ul>
		<script>
			function show_shangjia(e){
			    // $("#right_box").eq(i).css('display','block').siblings().css('display','none');			
			    var obj=document.getElementById('right_box_shangjia');
			    obj.style.display="block";
		        var obj=document.getElementById('right_box_fahuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_qianshou');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_tuihuanhuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_fapiao');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box');
			    obj.style.display='none';
			    $(e).css('color','#C8124D').parent().siblings().children().css('color','#666666');	
			    $(e).css('color','#C8124D').parent().parent().parent().siblings().children().css('color','#666666');	    
			}
			function show_fahuo(e){			
				var obj=document.getElementById('right_box_fahuo');
				obj.style.display="block";
			    var obj=document.getElementById('right_box_shangjia');
				obj.style.display='none';	
				var obj=document.getElementById('right_box_qianshou');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_tuihuanhuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_fapiao');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box');
			    obj.style.display='none';	
			    $(e).css('color','#C8124D').parent().siblings().children().css('color','#666666');   
			    $(e).css('color','#C8124D').parent().parent().parent().siblings().children().css('color','#666666'); 
			}
			function show_qianshou(e){			
				var obj=document.getElementById('right_box_qianshou');
				obj.style.display="block";
			    var obj=document.getElementById('right_box_shangjia');
				obj.style.display='none';	
				var obj=document.getElementById('right_box_fahuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_tuihuanhuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_fapiao');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box');
			    obj.style.display='none';	  
			    $(e).css('color','#C8124D').parent().siblings().children().css('color','#666666');  
			    $(e).css('color','#C8124D').parent().parent().parent().siblings().children().css('color','#666666');
			}
			function show_tuihuanhuo(e){			
				var obj=document.getElementById('right_box_tuihuanhuo');
				obj.style.display="block";
			    var obj=document.getElementById('right_box_shangjia');
				obj.style.display='none';	
				var obj=document.getElementById('right_box_qianshou');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_fahuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_fapiao');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box');
			    obj.style.display='none';	    
			    $(e).css('color','#C8124D').parent().siblings().children().css('color','#666666');
			    $(e).css('color','#C8124D').parent().parent().parent().siblings().children().css('color','#666666');
			}
			function show_fapiao(e){			
				var obj=document.getElementById('right_box_fapiao');
				obj.style.display="block";
			    var obj=document.getElementById('right_box_shangjia');
				obj.style.display='none';	
				var obj=document.getElementById('right_box_qianshou');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_tuihuanhuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_fahuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box');
			    obj.style.display='none';	    
			    $(e).css('color','#C8124D').parent().siblings().children().css('color','#666666');
			    $(e).css('color','#C8124D').parent().parent().parent().siblings().children().css('color','#666666');
			}
			function show_connet(e){			
				var obj=document.getElementById('right_box');
				obj.style.display="block";
			    var obj=document.getElementById('right_box_shangjia');
				obj.style.display='none';	
				var obj=document.getElementById('right_box_fahuo');
				obj.style.display='none';
				var obj=document.getElementById('right_box_qianshou');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_tuihuanhuo');
			    obj.style.display='none';
			    var obj=document.getElementById('right_box_fapiao');
			    obj.style.display='none';	
			    $("#server2").css('color','#C8124D').parent().siblings().children().children().children().css('color','#666666'); 
			}
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