<form action="#" method="post" enctype="multipart/form-data">
	<table style="margin:auto; width:100%">
    	<tr>
        	<td colspan="2">Them Xe moi</td>
        </tr>
        <tr>
        	<td style="width:20%">Ten Xe</td>
            <td style="width:80%">
            	<input name="txtTenXe" type="text">
            </td>
        </tr>
        <tr>
        	<td style="width:20%">Gia Ban</td>
            <td style="width:80%">
            	<input name="txtGia" type="number">
            </td>
        </tr>
        <tr>
        	<td style="width:20%">So Luong Ton</td>
            <td style="width:80%">
            	<input name="txtSLT" type="number">
            </td>
        </tr>
        <tr>
        	<td style="width:20%">Mo Ta</td>
            <td style="width:80%">
            	<input name="txtMoTa" type="text">
            </td>
        </tr>
        <tr>
        	<td style="width:20%">Hinh Anh</td>
            <td style="width:80%">
            	<input name="txtHinh" type="file">
            </td>
        </tr>
        <tr>
        	<td style="width:20%">Hang Xe</td>
            <td style="width:80%">
            	<select name="hangxe">
                	<?php
						include("Controller/cHangXe.php");
						$p = new cHangXe();
						$hang = $p->getAllHangXe();
						
						if(mysql_num_rows($hang) > 0){
							while($r = mysql_fetch_assoc($hang)){
								echo "<option value='".$r["MaHang"]."'>".$r["TenHang"]."</option>";
							}
						}else{
							echo "0 rows";
						}
					?>
                </select>
            </td>
        </tr>
        <tr>
        	<td colspan="2" style="text-align:center">
            	<input type="submit" name="btnOK" value="Them"> |
                <input type="reset" value="Nhap Lai">
            </td>
        </tr>
    </table>
</form>

<?php
	if(isset($_REQUEST["btnOK"])){
		$ten=$_REQUEST["txtTenXe"];
		$gia=$_REQUEST["txtGia"];
		$sl=$_REQUEST["txtSLT"];
		$mota = $_REQUEST["txtMota"];
		$hangxe = $_REQUEST["hangxe"];
		$hinh = $_FILES["txtHinh"]["tmp_name"];
		$tenhinh = $_FILES["txtHinh"]["name"];
		$loaihinh = $_FILES["txtHinh"]["type"];
		include("Controller/cXe.php");
		$p = new cXe();
		$ok = $p->ThemXe($ten,$gia,$sl,$mota,$hangxe,$hinh,$tenhinh,$loaihinh);
		if($ok==1){
			echo "<script>alert('Them Thanh Cong')</script>";
		}elseif($ok==0){
			echo "<script>alert('Khong the Them')</script>";
		}elseif($ok==-1){
			echo "<script>alert('Sai loai anh upload')</script>";
		}elseif($ok==-2){
			echo "<script>alert('Don gia hoac SLT nho hon 0')</script>";
		}elseif($ok==-3){
			echo "<script>alert('Upload hinh that bai')</script>";
		}
	}
?>