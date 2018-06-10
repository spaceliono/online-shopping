<?php
session_start();
header("content-type:text/html;chanset=utf-8;");
include("../model/Db.class.php");
include("../controller/address.class.php");
$db=new Db();
$a=new address($db);
$act=$_GET['act'];
if($act=="save_msg"){
	$rows=$a->save();
	echo json_encode($rows);
}
if($act=="get_msg"){
	$rows=$a->getAddress();
	echo json_encode($rows);
}