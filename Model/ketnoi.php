<?php
	class ketnoiDB{
		function moketnoi(& $con){
			$con = mysql_connect("localhost","nghuuquang","19000001");
			if($con){
				return mysql_select_db("dbQuanLyXe");
			}else{
				return false;
			}
		}
		
		function dongketnoi($con){
			mysql_close($con);
		}
	}
?>