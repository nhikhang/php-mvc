<?php
	include("Controller/cHangXe.php");
	$p = new cHangXe();
	$hang = $p->getAllHangXe();
	
	if(mysql_num_rows($hang) > 0){
		while($r = mysql_fetch_assoc($hang)){
			echo "<br><a href='index.php?MaHang=".$r["MaHang"]."'>".$r["TenHang"]."</a><br>";
		}
	}else{
		echo "0 rows";
	}
?>

