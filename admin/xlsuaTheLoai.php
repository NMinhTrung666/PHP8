<?php 
require "../lib/dbCon.php";
	require "../lib/quantri.php";
	$idTL = $_GET['idTL'];
	
  if (isset($_POST['sua'])) {
    $TenTL = $_POST['TenTL'];
	$TenTL_KhongDau = utf8convert($TenTL);
    $ThuTu = $_POST['ThuTu'];
    $AnHien = $_POST['AnHien'];
  }
  $sql = "UPDATE theloai
          SET TenTL='$TenTL', TenTL_KhongDau='$TenTL_KhongDau', ThuTu='$ThuTu', AnHien='$AnHien' 
          WHERE idTL='$idTL'";
  mysqli_query($conn,$sql);
  header("location:listTheLoai.php");
?>