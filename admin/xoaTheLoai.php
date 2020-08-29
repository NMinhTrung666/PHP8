<?php 
	require "../lib/dbCon.php";
	require "../lib/quantri.php";
	$idTL = $_GET['idTL'];
	$sql = "DELETE FROM theloai
			WHERE idTL = '$idTL'";
	mysqli_query($conn,$sql);	
	header("location:listTheLoai.php");	
?>