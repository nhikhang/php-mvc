<?php
	include_once("ketnoi.php");
	
	class modelHangXe{
		
		function ViewAllHangXe(){
			$con;
			$p = new ketnoiDB();
			if($p->moketnoi($con)){
				$string = "select * from tblHangXe";
				$table = mysql_query($string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
	}
?>