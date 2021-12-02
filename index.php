<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
	td{border:1px solid}
	a{text-decoration:none}
</style>
<title>Untitled Document</title>
</head>

<body>
	<table style="margin:auto; width:960px">
    	<tr>
        	<td colspan="2">BAI KIEM TRA THUC HANH PHP</td>
        </tr>
        <tr>
        	<td colspan="2">
            	<a href="index.php">Trang chu</a> |
                <a href="insert.php">Them San Pham</a>
            </td>
        </tr>
        <tr>
        	<td style="width:20%">
            	<?php
					include("View/vHangXe.php");
				?>
            </td>
            <td style="width:80%">
            	<?php
					include("View/vXe.php");
				?>
            </td>
        </tr>
        <tr>
        	<td colspan="2">19000001 - NHQuang - H51M15</td>
        </tr>
    </table>
</body>
</html>