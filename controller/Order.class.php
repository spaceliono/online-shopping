<?php
//header("content-type:text/html;chanset=utf-8;");
class Order{
	protected $db;
	protected $tab;
	protected $name;
	protected $img;
	protected $uid;
	protected $price;
	protected $allprice;
	public function __construct($db,$tab='goods_shopcar'){
		$this->db=$db;
		$this->tab=$tab;
	}
	// public function_POSTOrder(){
	// 	$uid=$_SESSION['uid'];
	// 	//$sql="select * from {$this->tab} where uid='{$uid}' order by id desc  ";
	// 	$sql="select car.id,car.goodid,car.goodname,car.price,car.num,g.img,g.pcs from {$this->tab} as car,goods_list as g where car.good_status='1' and car.goodid=g.id and car.uid={$uid}";
	// 	return $this->db->selectRows($sql);
	// }
	public function pushOrder(){

		$array=$_POST['goodsid'];

		$username=$_POST['username'];
		$userphone=$_POST['userphone'];
		$province=$_POST['province'];
		$city=$_POST['city'];
		$district=$_POST['district'];
		$street=$_POST['street'];
		$addr=$province.$city.$district.$street;
		$orderid=uniqid().rand(10000,999999);
		$time=time();
		$uid=$_SESSION['uid'];
		$n=0;
		$money=0;
		$res=array('msg'=>"购买失败",'code'=>100,'data'=>'');
		foreach ($array as $goodid) {
			$sql_sel="select price,num from {$this->tab} where good_status='1' and uid={$uid} and goodid={$goodid}";
			$row=$this->db->selectRow($sql_sel);
			if($row){$money+=floatval($row['price'])*intval($row['num']);}
			$sql_up="update {$this->tab} set good_status='2',orderid='{$orderid}',time='{$time}' where uid={$uid} and goodid={$goodid}";
			$row=$this->db->otherData($sql_up);
			if($this->db->otherData($sql_up)>0){
				$n++;
			}
		}
		$sql_in="insert into goods_order(uid,username,userphone,orderid,money,order_status,pay_status,time,addr) values('{$uid}','{$username}','{$userphone}','{$orderid}','{$money}','2','2','{$time}','{$addr}') ";
	
		if($this->db->otherData($sql_in)>0){$n++;}
		if($n>0){
			$res=array("msg"=>"购买成功",'code'=>101,'data'=>'');
		}
		
		return $res;


		// $sql="update {$this->tab} set status='2' where uid='{$uid}'";
		// $rows=$this->db->otherData($sql);
		// return $rows;
		// if($this->db->otherData($sql)){
		// 	$res=array('msg'=>"购买成功",'code'=>101,'data'=>'');
		// }
		// return $res;
	}
	// public function pushOrder(){
	// 	$uid=$_SESSION['uid'];
	// 	$orderid=unipid().rand(10000,999999);
	// 	$time=time();

	// }
}