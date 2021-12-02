<?php
	include_once("ketnoi.php");
	
	class modelXe{
		
		function ViewAllXe(){
			$con;
			$p = new ketnoiDB();
			if($p->moketnoi($con)){
				$string = "select * from tblXe";
				$table = mysql_query($string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		
		function ViewAllXeByHangXe($hang){
			$con;
			$p = new ketnoiDB();
			if($p->moketnoi($con)){
				$string = "select * from tblXe where MaHang = $hang";
				$table = mysql_query($string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		
		function AddXe($ten,$gia,$sl,$mota,$hinh,$hangxe){
			$con;
			$p = new ketnoiDB();
			if($p->moketnoi($con)){
				$string = "INSERT INTO  tblxe (TenXe,DonGia,SLTon,MoTa,HinhAnh,MaHang)VALUES (N'$ten',$gia,$sl,  N'$mota',  N'$hinh', $hangxe)";
				$ok = mysql_query($string);
				$p->dongketnoi($con);
				return $ok;
			}else{
				return false;
			}
		}
	}
?>