<?php
header("content-type:text/html;chanset=utf-8;");
class shopCar{
	protected $db;
	protected $tab;
	protected $pid;
	protected $name;
	protected $img;
	
	public function __construct($db,$tab='goods_shopcar',$size=1,$nums=5){
		$this->db=$db;
		$this->tab=$tab;
		
	}
	public function checkUserInfo(){
		$res=array('msg'=>"用户未登录",'code'=>100,'data'=>'');
		if(isset($_SESSION['user'])&&isset($_SESSION['shopcar'])){
			$res=array('msg'=>"用户已登录",'code'=>101,'data'=>'');
		}
		return $res;
	}
	public function addGoodsToShopcar(){
		$res=array('msg'=>"商品加入购物车失败！",'code'=>102,'data'=>'');
		$goodid=$_GET['id'];
		$name=$_GET['name'];
		$price=$_GET['price'];
		$num=$_GET['num'];
		$uid=$_SESSION['uid'];
		$time=time();
		$sql="select goodid,num,price from {$this->tab} where goodid='{$goodid}' and uid='{$uid}' and good_status='1'";
		$row=$this->db->selectRow($sql);
		
		if($row){
			$newNum=$num+$row['num'];
			$sql="update {$this->tab} set num='{$newNum}' where goodid='{$goodid}' and uid='{$uid}' and good_status='1'";
		}else{
			$sql="insert into {$this->tab}(uid,goodid,goodname,price,num,time,good_status) values('{$uid}','{$goodid}','{$name}','{$price}','{$num}','{$time}',1)";
		}
		if($this->db->otherData($sql)){
			$res=array('msg'=>"商品加入购物车成功！",'code'=>103,'data'=>$sql);
		}
		return $res;	
	}
	public function initShopCar(){
		$uid=$_SESSION['uid'];
		$res=array('msg'=>"取商品失败",'code'=>104,'data'=>$uid);
		$sql="select car.id,car.goodid,car.goodname,car.price,car.num,g.img,g.pcs from {$this->tab} as car,goods_list as g where car.good_status='1' and car.goodid=g.id and car.uid={$uid}";
		$rows=$this->db->selectRows($sql);
		if($rows){
			foreach($rows as $key=>$val){
				$rows[$key]["img"] = htmlspecialchars_decode($val["img"]);
			}
			$res=array('msg'=>"取商品成功",'code'=>105,'data'=>$rows);
		}
		return $res;
	}
	public function delgoods(){
		$res=array('msg'=>"商品删除失败",'code'=>110,'data'=>'');
		$goodid=$_GET['id'];
		$uid=$_SESSION['uid'];
		$sql="delete from {$this->tab} where good_status='1' and uid='{$uid}' and goodid='{$goodid}'";		
		//$sql="delete from {$this->tab} where good_status='1' and uid='{this->uid}' and goodid='{this->goodid}'";
		$rows=$this->db->otherData($sql);
		if($rows>0){
			$res=array('msg'=>"商品删除成功",'code'=>111,'data'=>'');
		}
		return $res;
	}
	public function changeNum(){
		$res=array('msg'=>"数量失败",'code'=>106,'data'=>'');
		$num=$_GET['num'];
		$goodid=$_GET['id'];
		$uid=$_SESSION['uid'];
		//$sql="update {$this->tab} set num='{$num}' where goodid='{$goodid}' and uid='{$uid}' and good_status='1'";
		$sql="update {$this->tab} set num='{$num}' where good_status='1' and goodid='{$goodid}' and uid='{$uid}'";
		$rows=$this->db->otherData($sql);
		if($rows){
			$res=array('msg'=>"数量成功",'code'=>107,'data'=>'');
		}
		return $res;
	}
	public function initComment(){
		$uid=$_SESSION['uid'];
		$sql="select car.id,car.goodid,car.goodname,car.price,car.num,g.img,g.pcs from {$this->tab} as car,goods_list as g where car.good_status='2' and car.goodid=g.id and car.uid={$uid}";
		$rows=$this->db->selectRows($sql);
		if($rows){
			foreach($rows as $key=>$val){
				$rows[$key]["img"] = htmlspecialchars_decode($val["img"]);
			}
			$res=array('msg'=>"取商品成功",'code'=>112,'data'=>$rows);
		}
		return $res;
	}
	public function addComment(){
		$id=$_GET['id'];
		$comment=$_GET['comment'];
		$sql="update {$this->tab} set good_status='3',comment='{$comment}' where id='{$id}'";
		$rows=$this->db->otherData($sql);
		if($rows){
			$res=array('msg'=>"ok");
		}
		return $res;
	}
	public function initComment2(){
		$uid=$_SESSION['uid'];
		$sql="select car.id,car.goodid,car.goodname,car.price,car.num,g.img,g.pcs,car.comment from {$this->tab} as car,goods_list as g where car.good_status='3' and car.goodid=g.id and car.uid={$uid}";
		$rows=$this->db->selectRows($sql);
		if($rows){
			foreach($rows as $key=>$val){
				$rows[$key]["img"] = htmlspecialchars_decode($val["img"]);
			}
			$res=array('msg'=>"取商品成功",'code'=>113,'data'=>$rows);
		}
		return $res;
	}
	public function getComment(){
		$goodid=$_GET['id'];
		$sql="select c.comment,c.time,u.userName,c.time from {$this->tab} as c,user as u where goodid={$goodid} and c.uid=u.id and good_status='3'";
		$rows=$this->db->selectRows($sql);
		if($rows){
			foreach($rows as  $key => $val){
				$rows[$key]["time"] = date("Y-m-d H:i:s",$val["time"]);
			}
			$res=array('msg'=>"ok",'code'=>114,'data'=>$rows);
		}
		return $res;
	}
}
