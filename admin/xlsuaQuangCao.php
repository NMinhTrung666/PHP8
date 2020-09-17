<?php 
require "../lib/dbCon.php";
	require "../lib/quantri.php";
	$idQC = $_GET['idQC'];
	
  if (isset($_POST['sua'])) {
    $vitri = $_POST['vitri'];
    $MoTa = $_POST['MoTa'];
    $Url = $_POST['Url'];
	$urlHinh = $_POST['urlHinh'];
  }
  $sql = "UPDATE quangcao
          SET vitri='$vitri', MoTa='$MoTa', Url='$Url', urlHinh='$urlHinh' 
          WHERE idQC='$idQC'";
  mysqli_query($conn,$sql);
  header("location:listQuangCao.php");
?>