<?php 
	require "../lib/dbCon.php";
	require "../lib/quantri.php";
	$idQC = $_GET['idQC'];
	$sql = "DELETE FROM quangcao
			WHERE idQC = '$idQC'";
	mysqli_query($conn,$sql);	
	header("location:listQuangCao.php");	
?>