<?php
	include("Controller/cXe.php");
	$p = new cXe();
	if(isset($_REQUEST["MaHang"])){
		$hang = $_REQUEST["MaHang"];
		$xe = $p->getOneXeByHangXe($hang);
	}else{
		$xe = $p->getAllXe();
	}
	
	if(mysql_num_rows($xe) > 0){
		echo "<table style='margin:auto; width=500px'>";
		$dem = 0;
		while($r = mysql_fetch_assoc($xe)){
			if($dem==0){
				echo "<tr>";
			}
			echo "<td style='text-align:center'>";
			echo $r["TenXe"]."<br>";
			echo "<img src='image/".$r["HinhAnh"]."' width='75px' height='50px'><br>";
			echo $r["DonGia"]."<br>";
			echo $r["SLTon"]."<br>";
			echo "</td>";
			$dem++;
			if($dem==4){
				echo "</tr>";
				$dem = 0;
			}
		}
		echo "</table>";
	}else{
		echo "0 rows";
	}
?>


