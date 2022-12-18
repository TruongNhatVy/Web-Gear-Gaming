<?php
	ob_start();
	class danhmuc_controller{
		function getAll(){
			include ("../../Model/danhmuc.php");
			$p=new danhmuc;
			$danhmuc=$p->getAll();
			return $danhmuc;
		}
		function danhmucID($madm){
			include ("../../Model/danhmuc.php");
			$p=new danhmuc;
			$danhmucID=$p->danhmuctheoID($madm);
			return $danhmucID;
		}
		function lockDM($madm){
			$p=new danhmuc;
			$p->lockDM($madm);
			header('location:category.php');
		}
		function updateDM($madm,$tendm){
			$p=new danhmuc;
			$p->updateDM($madm,$tendm);
		}
		function addDM($tendm,$anh){
			include ("../../Model/danhmuc.php");
			$p=new danhmuc;
			$p->addDM($tendm,$anh);
		}
		function danhmuctheoID($madm){
			include ("../../Model/danhmuc.php");
			$p=new danhmuc;
			$danhmucID=$p->getDanhmucID($madm);
			return $danhmucID;
		}
	}
?>