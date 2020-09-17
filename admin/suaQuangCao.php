<?php 
	ob_start();
	session_start();
	require "../lib/dbCon.php";
	require "../lib/quantri.php";

	if (!isset($_SESSION['idUser']) || $_SESSION['idGroup']!=1) {
		header("location:../index.php");
	}
?>
<?php 
  $idQC = $_GET['idQC'];
  $sql = "SELECT * FROM quangcao
          WHERE idQC = '$idQC'";
  $quangcao = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($quangcao);        
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
<form action="xlsuaQuangCao.php?idQC=<?php echo $idQC;?>" method="post" >

<table width="500" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><strong>Sửa Quảng Cáo</strong></td>
  </tr>
  <tr>
    <td width="100">Vị trí</td>
    <td width="384"><label for="fileField"></label>
      <input type="text" name="vitri" id="fileField" value="<?php echo $row['vitri'];?>" /></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><label for="textfield"></label>
      <input type="text" name="MoTa" id="textfield" value="<?php echo $row['MoTa'];?>" /></td>
  </tr>
  <tr>
    <td>Url</td>
    <td><label for="textfield2"></label>
      <input type="text" name="Url" id="textfield2" value="<?php echo $row['Url'];?>"/></td>
  </tr>
  <tr>
    <td>Hình</td>
    <td><label for="textfield2"></label>
      <input type="text" name="urlHinh" id="textfield2" value="<?php echo $row['urlHinh'];?>"/></td>
  </tr>
  
  <tr>
    <td colspan="2"><input type="submit" name="sua" id="button" value="Sửa" /></td>
  </tr>
</table>
</form>
</body>
</html>