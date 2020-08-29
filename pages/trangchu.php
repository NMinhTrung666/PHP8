<?php 
    $theloai = DanhSachTheLoai($conn);
    while($row_theloai = mysqli_fetch_array($theloai)){
        $idTL = $row_theloai['idTL'];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $row_theloai['TenTL'];?></a>
        </div>
        <div class="child-cat">
<?php 
    $loaitin = LayLoaiTin_TheLoai($conn,$idTL);
    while($row_loaitin = mysqli_fetch_array($loaitin)){
        $idLT = $row_loaitin['idLT'];
?>        
        	<a href="index.php?p=tintrongloai&idLT=<?php echo $idLT;?>"><?php echo $row_loaitin['Ten'];?></a>
<?php } ?>            
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <?php 
                    $tinmoinhat = TinMoiNhat_TheLoai($conn,$idTL);
                    $row_tinmoinhat = mysqli_fetch_array($tinmoinhat);
                ?>
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat['idTin'];?>"><?php echo $row_tinmoinhat['TieuDe'];?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat['TomTat'];?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
<?php 
    $tinmoinhat_haitin = TinMoiNhat_TheLoai_HaiTin($conn,$idTL);
    while($row = mysqli_fetch_array($tinmoinhat_haitin)){
?>
             <p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"><?php echo $row['TieuDe'];?></a>
                </a></p> 
<?php } ?>                
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>
<?php } ?>
<!-- box cat-->





