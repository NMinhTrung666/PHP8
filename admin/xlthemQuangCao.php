<?php 
require "../lib/dbCon.php";
require "../lib/quantri.php";
	//Xử lí thêm thể loại
	if (isset($_POST['them'])) {
		$vitri = $_POST['vitri'];
		$MoTa = $_POST['MoTa'];
		$Url = $_POST['Url'];
		$urlHinh = $_POST['urlHinh'];
	}
	$sql = "INSERT INTO quangcao
				VALUES(null,'$vitri','$MoTa','$Url','$urlHinh','0')";

	mysqli_query($conn,$sql);
	header("location:listQuangCao.php");
	
?>