<?php
session_start();
header("content-type:text/html; charset=utf-8;");
include("../model/Db.class.php");
include("../controller/User.class.php");
$db=new Db();
$u=new User($db);
$res=$u->userOut();
if($res){
	echo "<script> window.location.href='../view/index.v.php'</script>";
	//header("location: ../view/garden.v.php ");
	exit;
}
