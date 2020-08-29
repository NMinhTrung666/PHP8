<?php 
	require "../lib/dbCon.php";
	require "../lib/quantri.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<style type="text/css" media="screen">


</style>
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
	<div class="all" align="center"  >
			<table border="" cellpadding="0" cellspacing="0" >
				<tr>
					<th>Mã thể loại</th>
					<th>Tên thể loại</th>
					<th>Tên thể loại không dấu</th>
					<th>Thứ tự</th>
					<th>Ẩn hiện</th>
					<th><button type="button"  id="them">
            	<a href="themTheLoai.php">Thêm</a>
                </button></th>
					
				</tr>
				<tr>
				<?php
				$sql = showTheLoai($conn);
				while ($row=mysqli_fetch_array($sql))
		{		
		
		?>	
					<td><?php echo $row["idTL"];?></td>
					<td><?php echo $row["TenTL"];?></td>
					<td><?php echo $row["TenTL_KhongDau"];?></td>
					<td><?php echo $row["ThuTu"];?></td>
					<td><?php echo $row["AnHien"];?></td>
					<td>
					
						<button type="button" width="50px">
							<a href="suaTheLoai.php?idTL=<?php echo $row['idTL'];?>">Sửa</a>
						</button> 
					
					</td>
					<td>
					
						<button type="button" width="50px">
							<a href="xoaTheLoai.php?idTL=<?php echo $row['idTL'];?>">Xoá</a>
						</button> 
					
					</td>
					
					

				</tr>
				<?php
		}
		?>	
			</table>
            


		</div>
</body>
</html>