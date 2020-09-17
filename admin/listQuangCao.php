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
					<th>Mã quảng cáo</th>
					<th>Vị trí</th>
					<th>Mô tả</th>
					<th>Url</th>
					<th>Hình</th>
					<th>Số lần click</th>
					<th><button type="button"  id="them">
            	<a href="themQuangCao.php">Thêm</a>
                </button></th>
					
				</tr>
				<tr>
				<?php
				$sql = showQuangCao($conn);
				while ($row=mysqli_fetch_array($sql))
		{		
		
		?>	
					<td><?php echo $row["idQC"];?></td>
					<td><?php echo $row["vitri"];?></td>
					<td><?php echo $row["MoTa"];?></td>
					<td><?php echo $row["Url"];?></td>
					<td><?php echo $row["urlHinh"];?></td>
					<td><?php echo $row["SoLanClick"];?></td>
					<td>
					
						<button type="button" width="50px">
							<a href="suaQuangCao.php?idQC=<?php echo $row['idQC'];?>">Sửa</a>
						</button> 
					
					</td>
					<td>
					
						<button type="button" width="50px">
							<a href="xoaQuangCao.php?idQC=<?php echo $row['idQC'];?>">Xoá</a>
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