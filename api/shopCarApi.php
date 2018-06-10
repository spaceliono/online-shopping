<?php
session_start();
header("content-type:text/html;chanset=utf-8;");
include("../model/Db.class.php");
include("../controller/Shopcar.class.php");
$db=new Db();
$s=new shopCar($db);

$res=$s->checkUserInfo();

if($res['code']==100){
	echo json_encode($res);
	exit;
}

if(isset($_GET['act'])){
	//echo "123";
	if($_GET['act']=='addGoodsToShopcar'){
		$res=$s->addGoodsToShopcar();
		echo json_encode($res);
		exit;
	}
	if($_GET['act']=='initShopCar'){
		$res=$s->initShopCar();
		echo json_encode($res);
		exit;
	}
	if($_GET['act']=='delgoods'){
		$res=$s->delgoods();
		echo json_encode($res);
		exit;
	}
	if($_GET['act']=='changeNum'){
		$res=$s->changeNum();
		echo json_encode($res);
		exit;
	}
	if($_GET['act']=='initComment'){
		$res=$s->initComment();
		echo json_encode($res);
		exit;
	}
	if($_GET['act']=='initComment2'){
		$res=$s->initComment2();
		echo json_encode($res);
		exit;
	}
	if($_GET['act']=='addComment'){
		$res=$s->addComment();
		echo json_encode($res);
		exit;
	}
	if($_GET['act']=='getComment'){
		$res=$s->getComment();
		echo json_encode($res);
		exit;
	}
}