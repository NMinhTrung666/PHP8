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
  $idTL = $_GET['idTL'];
  $sql = "SELECT * FROM theloai
          WHERE idTL = '$idTL'";
  $theloai = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($theloai);        
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
<form action="xlsuaTheLoai.php?idTL=<?php echo $idTL;?>" method="post" >

<table width="500" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><strong>Sửa Thể Loại</strong></td>
  </tr>
  <tr>
    <td width="100">Tên thể loại</td>
    <td width="384"><label for="fileField"></label>
      <input type="text" name="TenTL" id="fileField" value="<?php echo $row['TenTL'];?>" /></td>
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
    <td colspan="2"><input type="submit" name="sua" id="button" value="Sửa" /></td>
  </tr>
</table>
</form>
</body>
</html>