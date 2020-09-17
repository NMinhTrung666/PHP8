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
          $sql = "SELECT * FROM loaitin
                  WHERE idTL = '$idTL'";
        $loaitin = mysqli_query($conn,$sql);
    ?>
   
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <div class="theloai" align="center" style="margin-top: 10px; margin-bottom: 10px;  " >
    <a href="listLoaiTin.php" style="border: 1px solid black; padding: 5px; background-color: blue; color: white;">
          <span>All</span></a>
    <?php
        $sql = showTheLoai($conn);
        while ($row=mysqli_fetch_array($sql))
    {   
    
    ?>    
        <a href="listOneLoaiTin.php?idTL=<?php echo $row['idTL'];?>" style="border: 1px solid black; padding: 5px; background-color: blue; color: white;"><label><?php echo $row["idTL"];?></label>
          <span><?php echo $row["TenTL"];?></span></a>
          

          
        <?php
    }
    ?>   </div>

  <div class="all" align="center" id="my" >
      <table border="" cellpadding="0" cellspacing="0" >
        <tr>
          <th>Mã loại tin</th>
          <th>Tên loại tin</th>
          <th>Tên loại tin không dấu</th>
          <th>Thứ tự</th>
          <th>Ẩn hiện</th>
          <th>Mã thể loại</th>
          <th><button onclick="myFunction()">Thêm</button></th>
          
        </tr>
        <tr>

        <?php
        while ($row=mysqli_fetch_array($loaitin))
    {   
    
    ?>  
          <td><?php echo $row["idLT"];?></td>
          <td><?php echo $row["Ten"];?></td>
          <td><?php echo $row["Ten_KhongDau"];?></td>
          <td><?php echo $row["ThuTu"];?></td>
          <td><?php echo $row["AnHien"];?></td>
          <td><?php echo $row["idTL"];?></td>
          <td>
          
            <button type="button" width="50px">
              <a href="suaLoaiTin.php?idLT=<?php echo $row['idLT'];?>">Sửa</a>
            </button> 
          
          </td>
          <td>
          
            <button type="button" width="50px">
              <a href="xoaLoaiTin.php?idLT=<?php echo $row['idLT'];?>">Xoá</a>
            </button> 
          
          </td>       
        </tr>
        <?php
    }
    ?>  
      </table>
    </div>
    <div class="themloaitin" id="myDIV">
      <?php echo $row["idTL"];?>
      <form action="xlthemLoaiTin.php" method="post" >

      <table width="500" border="0" align="center">
        <tr>
          <td colspan="2" align="center"><strong>Thêm loại tin</strong></td>
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
          <td>Mã thể loại</td>
          <td><input type="text" name="idTL" id="textfield3" value="<?php echo $idTL;?>" /></td>
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
    </div>
</body>
 <style type="text/css">
  .themloaitin{
    display: none;
  }
</style>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("my");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
  }
}
</script>
</html>