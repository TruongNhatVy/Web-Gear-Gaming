<?php
	ob_start();
	class thuonghieu_controller{
		function getAll(){
			include ("../../Model/thuonghieu.php");
			$p = new thuonghieu;
			return $p->getAll();
		}
		function thuonghieuID($math){
			include ("../../Model/thuonghieu.php");
			$p=new thuonghieu;
			$thuonghieuID=$p->thuonghieutheoID($math);
			return $thuonghieuID;
		}
		function lockTH($math){
			$p=new thuonghieu;
			$p->lockTH($math);
			header('location:trademark.php');
		}
		function updateTH($math,$tenth){
			$p=new thuonghieu;
			$p->updateTH($math,$tenth);
		}
		function addTH($tenth){
			include ("../../Model/thuonghieu.php");
			$p=new thuonghieu;
			$p->addTH($tenth);
		}
		function thuonghieutheoID($math){
			include ("../../Model/thuonghieu.php");
			$p=new thuonghieu;
			$thuonghieuID=$p->getThuonghieuID($math);
			return $thuonghieuID;
		}
	}
?>