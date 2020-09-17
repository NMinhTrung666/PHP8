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
  $idTin = $_GET['idTin'];
  $sql = "SELECT * FROM tin
          WHERE idTin = '$idTin'";
  $tin = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($tin);    
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
    <td width="100">Tiêu đề</td>
    <td width="384"><label for="fileField"></label>
      <input type="text" name="Ten" id="fileField" value="<?php echo $row['TieuDe'];?>" /></td>
  </tr>
  <tr>
    
    <td>Tóm tắt</td>
    <td><label for="textfield"></label>
      <textarea class="form-control" id="textfield" rows="3" name="TomTat"><?php echo $row['TomTat'];?></textarea></td>
  </tr>
  <tr>
    <td>Hình</td>
    <td><label for="textfield2"></label>
      <input type="text" name="urlHinh" id="textfield2" value="<?php echo $row['urlHinh'];?>"/></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><label for="textfield2"></label>
      <textarea class="form-control" id="textfield3" rows="10" name="Content"><?php echo $row['Content'];?></textarea></td>
  </tr>
  <tr>
    <td>Mã thể loại</td>
    <td><label for="textfield2"></label>
      <input type="text" name="idTL" id="textfield4" value="<?php echo $row['idTL'];?>"/></td>
  </tr>
  <tr>
    <td>Mã loại tin</td>
    <td><label for="textfield2"></label>
      <input type="text" name="idLT" id="textfield5" value="<?php echo $row['idLT'];?>"/></td>
  </tr>
  <tr>
    <td>Ẩn hiện</td>
    <td><label for="textfield2"></label>
      <input type="text" name="AnHien" id="textfield6" value="<?php echo $row['AnHien'];?>"/></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="sua" id="button" value="Sửa" /></td>
  </tr>
</table>
</form>
</body>
</html> 