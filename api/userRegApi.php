<?php
session_start();
header("content-type:text/html; charset=utf-8;");
include("../model/Db.class.php");
include("../controller/User.class.php");
$db=new Db();
$u=new User($db);
$res=$u->regInfoCheck();
if($res){
	echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
	exit;
}
$res=$u->userReg();
//用户添加失败
if($res['status']==104){
	echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
	exit;	
}
//用户添加成功
if($res['status']==105){
	echo "<script>alert('".$res['msg']."');window.location.href='../view/index.v.php';</script>";
	exit;	
}
