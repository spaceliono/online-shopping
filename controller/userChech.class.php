<?php
class User{
	protected $name;
	protected $pwd;
	protected $repwd;
	protected $db;
	protected $code;

	public function __construct($db){
			$this->db=$db;
	}

	public function checkUserInfo(){
		$res=array('msg'=>"用户未登录",'code'=>100,'data'=>'');
		if(isset($_SESSION['user'])){
			$res=array('msg'=>"用户已登录",'code'=>101,'data'=>'');
		}
		return $res;
	}
}