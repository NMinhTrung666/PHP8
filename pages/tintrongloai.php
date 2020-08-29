<?php  
    if(isset($_GET['idLT'])){
        $idLT = $_GET['idLT'];
    }
    if(isset($_GET['trang'])){
        $trang = $_GET['trang'];
    }else{
        $trang = 1;
    }
?>
<?php 
    $bc = breadCrumb($conn,$idLT);
    $row_bc = mysqli_fetch_array($bc);
?>
<div><a href="./">Trang chủ</a>>><a href="#"> <?php echo $row_bc['TenTL']; ?></a>>><a href="#"><?php echo $row_bc['Ten']; ?></a></div>
<?php 
    $sotin1trang = 5;   
    $from = ($trang-1)*$sotin1trang;
    $tintheoloai = TinTheoLoai_PhanTrang($conn,$idLT,$from,$sotin1trang);
    while($row_tintheoloai = mysqli_fetch_array($tintheoloai)){
?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tintheoloai['idTin'];?>"><?php echo $row_tintheoloai['TieuDe'];?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tintheoloai['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $row_tintheoloai['TomTat'];?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<?php } ?>


<!-- box cat-->

<div id="phantrang">
<?php 
    $tin = TinTheoLoai($conn,$idLT);
    $tongsotin = mysqli_num_rows($tin);
    $sotrang = ceil($tongsotin/$sotin1trang);
    for($i=1;$i<=$sotrang;$i++){
?>
    <a <?php if($trang==$i){echo "style='background-color:red'";}?> href="index.php?p=tintrongloai&idLT=<?php echo $idLT;?>&trang=<?php echo $i;?>"><?php echo $i; ?></a>

<?php } ?>
</div>


