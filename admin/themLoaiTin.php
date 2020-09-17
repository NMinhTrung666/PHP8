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
        $ltin = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($ltin);
         echo $row['TenTL'];
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
<form action="xlthemLoaiTin.php" method="post" >

<table width="500" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><strong>Thêm <?php echo $row['TenTL'];?></strong></td>
  </tr>
  <tr>
    <td width="100">Tên loại tin</td>
    <td width="384"><label for="fileField"></label>
      <input type="text" name="Ten" id="fileField"/></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><label for="textfield1"></label>
      <input type="text" name="ThuTu" id="textfield1" /></td>
  </tr>
  
  <tr>
    <td>Thể loại</td>
    <td><label for="textfield2" name="TheLoai" ><?php echo $row['TenTL'];?></label></td>
  </tr>
  <tr>
    <td>Mã thể loại</td>
    <td><label for="textfield3" name="idTL" value="<?php echo $row['idTL'];?>" ></label></td>
  </tr>
  <tr>
    <td><label class="form-check-label" for="exampleCheck1" id="fileField4" >Hiện</label></td>
    <td><input type="checkbox" value="1" class="form-check-input" id="textfield4" name="AnHien"></td>
  </tr>
  
  <tr>
    <td colspan="2"><input type="submit" name="them" id="button" value="Thêm" /></td>
  </tr>
</table>
</form>
</body>
</html>