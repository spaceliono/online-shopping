<?php
header("content-type:text/html;chanset=utf-8;");
class address{
	protected $db;
	protected $tab;
	protected $pid;
	protected $name;
	protected $img;
	
	public function __construct($db,$tab='address'){
		$this->db=$db;
		$this->tab=$tab;
		
	}
	public function save(){
		$res=array('msg'=>"保存失败",'code'=>100,'data'=>'');
		$name=$_GET['username'];
		$phone=$_GET['userphone'];
		$province=$_GET['province'];
		$city=$_GET['city'];
		$district=$_GET['district'];
		$street=$_GET['street'];
		$uid=$_SESSION['uid'];
		$sql="select * from {$this->tab} where uid='{$uid}'";
		$row=$this->db->selectRow($sql);
		if($row){
			$sql="update {$this->tab} set username='{$name}',phone='{$phone}',province='{$province}',city='{$city}',district='{$district}',street='{$street}' where uid='{$uid}'";
		}else{

			$sql="insert into {$this->tab}(uid,username,phone,province,city,district,street) values('{$uid}','{$name}','{$phone}','{$province}','{$city}','{$district}','{$street}')";
		}
		if($this->db->otherData($sql)){
			$res=array('msg'=>"保存成功",'code'=>101,'data'=>'');
		}
		return $res;
	}
	public function getAddress(){
		$uid=$_SESSION['uid'];
		$sql="select * from {$this->tab} where uid='{$uid}'";
		$row=$this->db->selectRow($sql);
		return $row;
	}
}