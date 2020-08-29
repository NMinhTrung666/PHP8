<?php 

	function tinmoinhat_mottin($conn){
		$sql = "SELECT * FROM tin
				ORDER BY idTin DESC
				LIMIT 0,1";
		return mysqli_query($conn,$sql);
	}
	function tinmoinhat_namtin($conn){
		$sql = "SELECT * FROM tin
				ORDER BY idTin DESC
				LIMIT 1,8";
		return mysqli_query($conn,$sql);
	}
	function tinxemnhieu($conn){
		$sql = "SELECT * FROM tin
				ORDER BY SoLanXem DESC
				LIMIT 0,6";
		return mysqli_query($conn,$sql);
	}
	function tinmoinhat_loaitin($conn,$idLT){
		$sql = "SELECT * FROM tin
				WHERE idLT=$idLT
				ORDER BY idTin DESC
				LIMIT 0,1
				";
		return mysqli_query($conn,$sql);
	}
	function tinmoinhat_loaitin_bontin($conn,$idLT){
		$sql = "SELECT * FROM tin
				WHERE idLT=$idLT
				ORDER BY idTin DESC
				LIMIT 1,4
				";
		return mysqli_query($conn,$sql);
	}
	function tenloaitin($conn,$idLT){
		$sql = "SELECT Ten FROM loaitin
				WHERE idLT = $idLT;
				";
		return mysqli_query($conn,$sql);
	}
	function QuangCao($conn,$vitri){
		$sql ="SELECT * FROM quangcao
				WHERE vitri = $vitri";
		return mysqli_query($conn,$sql);

	}
	function DanhSachTheLoai($conn){
		$sql ="SELECT * FROM theloai
				";
		return mysqli_query($conn,$sql);	
	}
	function LayLoaiTin_TheLoai($conn,$idTL){
		$sql ="SELECT * FROM loaitin
				WHERE idTL=$idTL;
				";
		return mysqli_query($conn,$sql);
	}
	function TinMoiNhat_TheLoai($conn,$idTL){
		$sql = "SELECT * FROM tin
				WHERE idTL = $idTL
				ORDER BY idTin DESC
				LIMIT 0,1
		";
		return mysqli_query($conn,$sql);
	}
	function TinMoiNhat_TheLoai_HaiTin($conn,$idTL){
		$sql = "SELECT * FROM tin
				WHERE idTL = $idTL
				ORDER BY idTin DESC
				LIMIT 1,3
		";
		return mysqli_query($conn,$sql);
	}
	function TinTheoLoai($conn,$idLT){
		$sql = "SELECT * FROM tin
				WHERE idLT = $idLT
				ORDER BY idTin DESC
				";
		return mysqli_query($conn,$sql);		
	}
	function breadCrumb($conn,$idLT){
		$sql = "SELECT TenTL, Ten
				FROM theloai as t, loaitin as l
				WHERE t.idTL = l.idTL
				AND idLT=$idLT
				";
		return mysqli_query($conn,$sql);
	}
	function TinTheoLoai_PhanTrang($conn,$idLT,$from,$sotin1trang){
		$sql = "SELECT * FROM tin
				WHERE idLT = $idLT
				ORDER BY idTin DESC
				LIMIT $from,$sotin1trang
				";
		return mysqli_query($conn,$sql);		
	}
	function ChiTietTin($conn,$idTin){
		$sql = "SELECT * FROM tin
				WHERE idTin = $idTin
				";
		return mysqli_query($conn,$sql);		
	}
	function TinCungLoai($conn,$idTin,$idLT){
		$sql = "SELECT * FROM tin
				WHERE idTin <> $idTin
				AND idLT = $idLT
				ORDER BY RAND()
				LIMIT 0,3 
				";
		return mysqli_query($conn,$sql);		
	}	
	function CapNhatSoLanXem($conn,$idTin){
		$sql = "UPDATE tin
				SET SoLanXem = SoLanXem+1
				WHERE idTin = $idTin
				";
		mysqli_query($conn,$sql);		
	}
	function TimKiem($conn,$tukhoa){
		$sql = "SELECT * FROM tin
				WHERE TieuDe REGEXP '$tukhoa'
				ORDER BY idTin DESC
				";
		return mysqli_query($conn,$sql);		
	}
	function DangNhap($conn,$username,$password){
		$sql = "SELECT * FROM users
				WHERE Username = $username
				AND Password = $password
				";
		return mysqli_query($conn,$sql);		
	}
?>