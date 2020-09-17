<?php 
	require "../lib/dbCon.php";
	require "../lib/quantri.php";
	$idTin = $_GET['idTin'];
	$sql = "DELETE FROM tin
			WHERE idTin = '$idTin'";
	mysqli_query($conn,$sql);	
	header("location:listTin.php");	
?>