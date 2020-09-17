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
	<?php
        // BƯỚC 1: TÌM TỔNG SỐ RECORDS
		$result = mysqli_query($conn, 'select count(idTin) as total from tin');
		$row = mysqli_fetch_assoc($result);
		$total_records = $row['total'];
		// BƯỚC 2: TÌM LIMIT VÀ CURRENT_PAGE
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 10;
		// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
		// tổng số trang
		$total_page = ceil($total_records / $limit);
		// Giới hạn current_page trong khoảng 1 đến total_page
		if ($current_page > $total_page){
			$current_page = $total_page;
		}
		else if ($current_page < 1){
			$current_page = 1;
		}
		// Tìm Start
		$start = ($current_page - 1) * $limit;
		// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
		// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
		$result = mysqli_query($conn, "SELECT * FROM tin LIMIT $start, $limit");
		
    ?>
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
					<th>Mã tin tức</th>
					<th>Tiêu đề</th>
					<th>Tóm tắt</th>
					<th>Hình</th>
					<th>Loại tin</th>
					<th>Số lần xem</th>
					<th>Ẩn hiện</th>
					<th><button type="button"  id="them">
            	<a href="themTin.php">Thêm</a>
                </button></th>
					
				</tr>
				<tr>
				<?php
				// BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
				while ($row=mysqli_fetch_assoc($result))
		{		
		
		?>	
					<td><?php echo $row["idTin"];?></td>
					<td><?php echo $row["TieuDe"];?></td>
					<td><?php echo $row["TomTat"];?></td>
					<td><?php echo $row["urlHinh"];?></td>
					<td><?php echo $row["idLT"];?></td>
					<td><?php echo $row["SoLanXem"];?></td>
					<td><?php echo $row["AnHien"];?></td>
					<td>
					
						<button type="button" width="50px">
							<a href="suaTin.php?idTin=<?php echo $row['idTin'];?>">Sửa</a>
						</button> 
					
					</td>
					<td>
					
						<button type="button" width="50px">
							<a href="xoaTin.php?idTin=<?php echo $row['idTin'];?>">Xoá</a>
						</button> 
					
					</td>
					
					

				</tr>
				<?php
		}        
		?>	
			</table>
		</div>
		<div class="pagination">
           <?php
            // PHẦN HIỂN THỊ PHÂN TRANG
			// BƯỚC 7: HIỂN THỊ PHÂN TRANG
			// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
			if ($current_page > 1 && $total_page > 1){
				echo '<a href="listTin.php?page='.($current_page-1).'">Prev</a> | ';
			}
			// Lặp khoảng giữa
			for ($i = 1; $i <= $total_page; $i++){
			// Nếu là trang hiện tại thì hiển thị thẻ span
			// ngược lại hiển thị thẻ a
				if ($i == $current_page){
					echo '<span>'.$i.'</span> | ';
				}
				else{
					echo '<a href="listTin.php?page='.$i.'">'.$i.'</a> | ';
				}
			}
			// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
			if ($current_page < $total_page && $total_page > 1){
				echo '<a href="listTin.php?page='.($current_page+1).'">Next</a> | ';
			}
           ?>
        </div>
</body>
</html>