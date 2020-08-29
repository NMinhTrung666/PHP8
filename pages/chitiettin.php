<?php 
  if(isset($_GET['idTin'])){
    $idTin = $_GET['idTin'];
    settype($idTin, 'int');
  }else{
    $idTin = 1;
  }
 CapNhatSoLanXem($conn,$idTin); 
$chitiet = ChiTietTin($conn,$idTin);
$row_chitiet = mysqli_fetch_array($chitiet);
?>
<h1 class="title"><?php echo $row_chitiet['TieuDe'];?></h1>
<div class="des">
<?php echo $row_chitiet['TomTat'];?>

</div>
<div class="chitiet">
<!--noi dung-->
  <table align="center" border="0" cellpadding="3" cellspacing="0">
  <tbody>
    <tr>
      <td><img alt="mh17-7176-1406565111.jpg" data-natural-="" src="upload/tintuc/<?php echo $row_chitiet['urlHinh'];?>" data-width="500" data-pwidth="480"></td>
    </tr>
    <?php echo $row_chitiet['Content'];?>
<!--//noi dung-->
</div>
<div class="clear"></div>
<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="21"></a>
<div class="number_count"><span id="like-total-1000000-3023795"><?php echo $row_chitiet['SoLanXem'];?></span></div>
<!--face-->
<div class="left"><div class="fb-like fb_iframe_widget" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-href="http://vnexpress.net/tin-tuc/the-gioi/ukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;href=http%3A%2F%2Fvnexpress.net%2Ftin-tuc%2Fthe-gioi%2Fukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=450"></div></div>
<!--twister-->
<div class="left"></div>
<!--google-->
<div class="left"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div></div>

<div class="clear"></div>
<div id="tincungloai">
<div class="clear"></div>
	<ul>
    	<?php 
          $tincungloai = TinCungLoai($conn,$idTin,$row_chitiet['idLT']);
          while($row_tincungloai = mysqli_fetch_array($tincungloai)){
      ?>
        <li>       
             <a href="index.php?p=chitiettin&idTin=<?php echo $row_tincungloai['idTin'];?>"><img src="upload/tintuc/<?php echo $row_tincungloai['urlHinh'];?>" alt=""></a> <br />
 			 <a class="title" href="index.php?p=chitiettin&idTin=<?php echo $row_tincungloai['idTin'];?>"><?php echo $row_tincungloai['TieuDe'];?></a>
             <span class="no_wrap">   
        </li>
        
        <?php } ?>
        
    </ul>
</div>
<div class="clear"></div> 





