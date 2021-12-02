<?php
	include("Model/mHangXe.php");
	
	class cHangXe{
		
		function getAllHangXe(){
			$p = new modelHangXe();
			$tbl = $p->ViewAllHangXe();
			return $tbl;
		}
	}
?>