<?php
header("content-type:text/html;chanset=utf-8;");
class Goods{
	protected $db;
	protected $tab;
	protected $pid;
	protected $name;
	protected $img;
	public function __construct($db,$tab='goods_list',$size=1,$nums=5){
		$this->db=$db;
		$this->tab=$tab;
	}
	public function getGoodsByCid2($cid2,$num='all'){
		$sql="select * from {$this->tab} where cid2='{$cid2}' order by id asc  ";
		if($num!='all'){
			$sql.="  limit 0 , {$num}";
		}
		return $this->db->selectRows($sql);
	}
	public function getGoodsByCid1($cid1,$num='all'){
		$sql="select * from {$this->tab} where cid1='{$cid1}' order by id desc  ";
		if($num!='all'){
			$sql.="  limit 0 , {$num}";
		}
		return $this->db->selectRows($sql);
	}
	public function getGoodsDetailById(){
		$id=0;
		if(isset($_GET['id'])){
			$id=$_GET['id'];
		}
		if((int)$id<1){$id=1;}
		$sql="select * from {$this->tab} where id={$id}";
		return $this->db->selectRow($sql);
	}
}
