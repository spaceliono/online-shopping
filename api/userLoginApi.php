<?php
session_start();
header("content-type:text/html; charset=utf-8;");
include("../model/Db.class.php");
include("../controller/User.class.php");
$db=new Db();
$u=new User($db);
$res=$u->loginInfoCheck();
if($res){
	echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
	exit;
}


$res=$u->userLogin();
var_dump($res);
//用户登录失败
if($res['status']==106){
	echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
	exit;	
}
//用户登录成功
if($res['status']==107){
	echo "<script>alert('".$res['msg']."');window.location.href='../view/index.v.php';</script>";
	exit;	
}
