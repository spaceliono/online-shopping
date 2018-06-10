<?php
session_start();
header("content-type:text/html;chanset=utf-8;");
include("../model/Db.class.php");
include("../controller/Goods.class.php");
$db=new Db();
$g=new Goods($db);

$row=$g->getGoodsDetailById();
// var_dump($row);
