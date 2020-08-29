<div class="thongtin-title">
	<div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">
<?php 
  $theloai = DanhSachTheLoai($conn);
  while($row_theloai = mysqli_fetch_array($theloai)){
      $idTL = $row_theloai['idTL']; 
?>
	<ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href="/tin-tuc/giao-duc/"><?php echo $row_theloai['TenTL'];?></a>
                   </h2>
                </li>
  <?php 
    $loaitin = LayLoaiTin_TheLoai($conn,$idTL);
    while($row_loaitin = mysqli_fetch_array($loaitin)){
      $idLT = $row_loaitin['idLT'];
  ?>              
                <li class="liFollow">
                   <h2>
                      <a href="index.php?p=tintrongloai&idLT=<?php echo $idLT;?>"><?php echo $row_loaitin['Ten'];?></a>
                   </h2>
                </li>
  <?php } ?>              
             </ul>
<?php } ?>

</div>




