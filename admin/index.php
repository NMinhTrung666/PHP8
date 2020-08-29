<?php 
	ob_start();
	session_start();
	require "../lib/dbCon.php";
	require "../lib/quantri.php";
	if (!isset($_SESSION['idUser']) || $_SESSION['idGroup']!=1) {
		header("location:../index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
<table width="855px" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td id="hangtieude">TRANG QUẢN TRỊ</td>
	</tr>
	<tr>
		<td id="hang2"><?php require "menu.php"; ?></td>
	</tr>
</table>
</body>
</html>