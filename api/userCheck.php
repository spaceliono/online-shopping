<?php
session_start();
header("content-type:text/html; charset=utf-8;");
include("../model/Db.class.php");
include("../controller/userChech.class.php");
$db=new Db();
$u=new User($db);
$res=$u->checkUserInfo();
if($res['code']==100){
	echo json_encode($res);
	exit;
}
if($res['code']==101){
	echo json_encode($res);
	exit;
}
