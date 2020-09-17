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
	<div class="theloai" align="center" style="margin-top: 10px; margin-bottom: 10px;  " >
		<?php
				$sql = showTheLoai($conn);
				while ($row=mysqli_fetch_array($sql))
		{		
		
		?>		
				<a href="listOneLoaiTin.php?idTL=<?php echo $row['idTL'];?>" style="border: 1px solid black; padding: 5px; background-color: blue; color: white;"><label><?php echo $row["idTL"];?></label>
					<span><?php echo $row["TenTL"];?></span></a>
					

					
				<?php
		}
		?>	 </div>
	<div class="all" align="center"  >
			<table border="" cellpadding="0" cellspacing="0" >
				<tr>
					<th>Mã loại tin</th>
					<th>Tên loại tin</th>
					<th>Tên loại tin không dấu</th>
					<th>Thứ tự</th>
					<th>Ẩn hiện</th>
					<th>Mã thể loại</th>
				</tr>
				<tr>
				<?php
				$sql = showLoaiTin($conn);
				while ($row=mysqli_fetch_array($sql))
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
</body>
</html>