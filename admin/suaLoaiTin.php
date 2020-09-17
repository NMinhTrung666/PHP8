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
  $idLT = $_GET['idLT'];
  $sql = "SELECT * FROM loaitin
          WHERE idLT = '$idLT'";
  $loaitin = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($loaitin);       
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
<form action="xlsuaLoaiTin.php?idLT=<?php echo $idLT;?>" method="post" >

<table width="500" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><strong>Sửa loại tin</strong></td>
  </tr>
  <tr>
    <td width="100">Tên loại tin</td>
    <td width="384"><label for="fileField"></label>
      <input type="text" name="Ten" id="fileField" value="<?php echo $row['Ten'];?>" /></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><label for="textfield"></label>
      <input type="text" name="ThuTu" id="textfield" value="<?php echo $row['ThuTu'];?>" /></td>
  </tr>
  <tr>
    <td>Ân hiện</td>
    <td><label for="textfield2"></label>
      <input type="text" name="AnHien" id="textfield2" value="<?php echo $row['AnHien'];?>"/></td>
  </tr>
  <tr>
    <td>Thể loại</td>
    <td><label for="textfield2"></label>
      <input type="text" name="idTL" id="textfield3" value="<?php echo $row['idTL'];?>"/></td>
  </tr>
<!--   <tr>
    <td><input type="radio" name="AnHien" value="0" checked>Ẩn<br></td>
    <td><input type="radio" name="AnHien" value="1"> Hiện<br></td>
  </tr> -->
  <tr>
    <td colspan="2"><input type="submit" name="sua" id="button" value="Sửa" /></td>
  </tr>
</table>
</form>
</body>
<script type="text/javascript">
  
</script>
</html>