<?php 
require "../lib/dbCon.php";
require "../lib/quantri.php";
	//Xử lí thêm thể loại
	if (isset($_POST['them'])) {
		$Ten = $_POST['Ten'];
		$Ten_KhongDau = utf8convert($Ten);
		$ThuTu = $_POST['ThuTu'];
		$AnHien = $_POST['AnHien'];
		$idTL = $_POST['idTL'];
	}
	$sql = "INSERT INTO loaitin
				VALUES(null,'$Ten','$Ten_KhongDau','$ThuTu','$AnHien','$idTL')";

	mysqli_query($conn,$sql);
	header("location:listLoaiTin.php");
	
?>