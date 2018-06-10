<?php
session_start();
header("content-type:text/html;chanset=utf-8;");
include("../model/Db.class.php");
include("../controller/Order.class.php");
$db=new Db();
$g=new Order($db);



$res=$g->pushOrder();
if($res){
	echo "<script>alert('".$res['msg']."');window.location.href='../view/mycenter.php';</script>";
	exit;
}
		// alert(1);
		// var_dump($res);
		// var_dump($rows);
		// echo json_encode($res);


?>