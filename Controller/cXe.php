<?php
	include("Model/mXe.php");
	
	class cXe{
		
		function getAllXe(){
			$p = new modelXe();
			$tbl = $p->ViewAllXe();
			return $tbl;
		}
		
		function getOneXeByHangXe($hang){
			$p = new modelXe();
			$tbl = $p->ViewAllXeByHangXe($hang);
			return $tbl;
		}
		
		function ThemXe($ten,$gia,$sl,$mota,$hangxe,$hinh,$tenhinh,$loaihinh){
			if($loaihinh=="image/jpeg" || $loaihinh=="image/png"){
				if($gia>0 && $sl>0){
					$tenhinh = "19000001".$tenhinh;
					if(move_uploaded_file($hinh,"image/".$tenhinh)){
						$p = new modelXe();
						$ok = $p->AddXe($ten,$gia,$sl,$mota,$hinh,$hangxe);
						if($ok){
							return 1; // insert thanh cong;
						}else{
							return 0; //insert that bai;
						}
					}else{
						return -3; //Upload hinh that bai
					}
				}else{
					return -2; // Don gia hoac SLT nho hon 0
				}
			}else{
				return -1; //Sai loai anh upload
			}
		}
	}
?>