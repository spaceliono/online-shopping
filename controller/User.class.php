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

	//注册用户信息检测
	public function regInfoCheck(){
		$this->name=$_GET['userName'];
		$this->pwd=$_GET['pwd'];
		$this->repwd=$_GET['repwd'];
		$this->code=$_GET['img_code_input'];
		$this->mobile=$_GET['mobile'];
		if(strtoupper($this->code)!=strtoupper($_SESSION['code'])){ return  array("msg"=>"验证失败！","status"=>099,"data"=>'');exit;}
		if(strlen($this->name)<1){ return  array("msg"=>"请输入用户名！","status"=>100,"data"=>'');exit;}
		if(strlen($this->pwd)<1){ return  array("msg"=>"请输入密码！","status"=>101,"data"=>'');exit;}
		if(strlen($this->repwd)<1){ return  array("msg"=> "请输入确认密码！","status"=>102,"data"=>'');exit;}
		if(strlen($this->mobile)<1){ return  array("msg"=> "请输入手机号码！","status"=>098,"data"=>'');exit;}
		if($this->repwd!=$this->pwd){ return  array("msg"=>"两次输入的密码不一致！","status"=>103,"data"=>'');exit;}

	}

	//用户注册
	public function userReg(){
		$res=array("msg"=>"添加用户失败！","status"=>104,"data"=>'');
		$time=time();
		$sql="insert into user(userName,pwd,time,mobile) values('{$this->name}','{$this->pwd}','{$time}','{$this->mobile}')";
		if($this->db->otherData($sql)>0){
			$res=array("msg"=>"添加用户成功！","status"=>105,"data"=>'');
		};
		return $res;
	}

	//登录用户信息检测
	public function loginInfoCheck(){
		
			$this->name=$_POST['name'];
			$this->pwd=$_POST['pwd'];
			if(strlen($this->name)<1){ return  array("msg"=>"请输入用户名！","status"=>100,"data"=>'');exit;}
			if(strlen($this->pwd)<1){ return  array("msg"=>"请输入密码！","status"=>101,"data"=>'');exit;}
		

		// if(isset($_POST['btn_2'])){
		// 	$this->name=$_POST['mobile_2'];
		// 	$this->pwd=$_POST['mobile_code'];
		// 	$this->code=$_POST['img_code_input'];
		// 	if(strlen($this->name)<1){ return  array("msg"=>"请输入用户名！","status"=>100,"data"=>'');exit;}
		// 	if(strlen($this->pwd)<1){ return  array("msg"=>"请输入密码！","status"=>101,"data"=>'');exit;}
		// 	if(strtoupper($this->code)!=strtoupper($_SESSION['code'])){ return  array("msg"=>"验证失败！","status"=>099,"data"=>'');exit;}
			
		// }
		
	}
	//用户登录
	public function userLogin(){
		$res=array("msg"=>"用户登录失败！","status"=>106,"data"=>'');
		$sql="select id, userName from user where userName='{$this->name}' and pwd='{$this->pwd}' ";
		$row=$this->db->selectRow($sql);
		if($row){
			$res=array("msg"=>"用户登录成功！","status"=>107,"data"=>$row);
			$_SESSION['user']=$this->name;
			$_SESSION['shopcar']=session_id();
			$_SESSION['uid']=$row['id'];
		}
		return $res;

	}
	//用户安全退出
	public function userOut(){
		$_SESSION=array();
		setcookie(session_name(),'',time()-1,'/');
		session_destroy();
		return true;
	}

}//类结束