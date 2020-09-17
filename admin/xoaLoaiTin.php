<?php 
	require "../lib/dbCon.php";
	require "../lib/quantri.php";
	$idLT = $_GET['idLT'];
	$sql = "DELETE FROM loaitin
			WHERE idLT = '$idLT'";
	mysqli_query($conn,$sql);	
	header("location:listLoaiTin.php");	
?>