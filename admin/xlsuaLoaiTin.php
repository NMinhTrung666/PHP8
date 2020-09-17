<?php 
require "../lib/dbCon.php";
	require "../lib/quantri.php";
	$idLT = $_GET['idLT'];
	
  if (isset($_POST['sua'])) {
    $Ten = $_POST['Ten'];
    $ThuTu = $_POST['ThuTu'];
    $AnHien = $_POST['AnHien'];
	$idTL = $_POST['idTL'];
  }
  $sql = "UPDATE loaitin
          SET Ten='$Ten', ThuTu='$ThuTu', AnHien='$AnHien', idTL='$idTL' 
          WHERE idLT='$idLT'";
  mysqli_query($conn,$sql);
  header("location:listLoaiTin.php");
?>