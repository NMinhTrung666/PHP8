<?php 
require "../lib/dbCon.php";
require "../lib/quantri.php";
	//Xử lí thêm thể loại
	if (isset($_POST['them'])) {
		$TenTL = $_POST['TenTL'];
		$TenTL_KhongDau = utf8convert($TenTL);
		$ThuTu = $_POST['ThuTu'];
		$AnHien = $_POST['AnHien'];
	}
	$sql = "INSERT INTO theloai
				VALUES(null,'$TenTL','$TenTL_KhongDau','$ThuTu','$AnHien')";

	mysqli_query($conn,$sql);
	header("location:listTheLoai.php");
	
?>