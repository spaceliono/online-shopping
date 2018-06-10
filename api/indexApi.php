<?php
session_start();
header("content-type:text/html;chanset=utf-8;");
include("../model/Db.class.php");
include("../controller/Goods.class.php");
$db=new Db();
$g=new Goods($db);

$rows1=$g->getGoodsByCid2(7,4);
$rows2=$g->getGoodsByCid2(8,10);
$rows3=$g->getGoodsByCid2(9,7);
$rows4=$g->getGoodsByCid2(10,6);
$rows5=$g->getGoodsByCid2(11,3);
$rows6=$g->getGoodsByCid2(12,4);
$res1=$g->getGoodsByCid1(13,12);
$res2=$g->getGoodsByCid1(14,20);
$res3=$g->getGoodsByCid1(13,16);
$res4=$g->getGoodsByCid1(14,4);