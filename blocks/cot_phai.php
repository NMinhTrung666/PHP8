
<!-- box cat -->
<?php 
    $idLT = 5;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php $ten = tenloaitin($conn,$idLT);
             $row = mysqli_fetch_array($ten);
             echo $row['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
            $tinmoinhat_loaitin = tinmoinhat_loaitin($conn,$idLT);
            $row = mysqli_fetch_array($tinmoinhat_loaitin);
            ?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"> <?php echo $row['TieuDe'];?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'];?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <?php 
            $tinmoinhat_loaitin_bontin = tinmoinhat_loaitin_bontin($conn,$idLT);
            while($row = mysqli_fetch_array($tinmoinhat_loaitin_bontin)){
            ?>
            <div class="col2">
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"><?php echo $row['TieuDe'];?></a></h3>
            
           
            </div> 
           <?php } ?>
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php 
    $idLT = 10;
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php $ten = tenloaitin($conn,$idLT);
             $row = mysqli_fetch_array($ten);
             echo $row['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
            $tinmoinhat_loaitin = tinmoinhat_loaitin($conn,$idLT);
            $row = mysqli_fetch_array($tinmoinhat_loaitin);
            ?>
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"> <?php echo $row['TieuDe'];?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'];?></div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <?php 
            $tinmoinhat_loaitin_bontin = tinmoinhat_loaitin_bontin($conn,$idLT);
            while($row = mysqli_fetch_array($tinmoinhat_loaitin_bontin)){
            ?>
            <div class="col2">
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"><?php echo $row['TieuDe'];?></a></h3>
            
           
            </div> 
           <?php } ?>
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php 
    $idLT = 7;
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php $ten = tenloaitin($conn,$idLT);
             $row = mysqli_fetch_array($ten);
             echo $row['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
            $tinmoinhat_loaitin = tinmoinhat_loaitin($conn,$idLT);
            $row = mysqli_fetch_array($tinmoinhat_loaitin);
            ?>
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"> <?php echo $row['TieuDe'];?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'];?></div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <?php 
            $tinmoinhat_loaitin_bontin = tinmoinhat_loaitin_bontin($conn,$idLT);
            while($row = mysqli_fetch_array($tinmoinhat_loaitin_bontin)){
            ?>
            <div class="col2">
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"><?php echo $row['TieuDe'];?></a></h3>
            
           
            </div> 
           <?php } ?>
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php 
    $idLT = 8;
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php $ten = tenloaitin($conn,$idLT);
             $row = mysqli_fetch_array($ten);
             echo $row['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
            $tinmoinhat_loaitin = tinmoinhat_loaitin($conn,$idLT);
            $row = mysqli_fetch_array($tinmoinhat_loaitin);
            ?>
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"> <?php echo $row['TieuDe'];?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'];?></div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <?php 
            $tinmoinhat_loaitin_bontin = tinmoinhat_loaitin_bontin($conn,$idLT);
            while($row = mysqli_fetch_array($tinmoinhat_loaitin_bontin)){
            ?>
            <div class="col2">
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"><?php echo $row['TieuDe'];?></a></h3>
            
           
            </div> 
           <?php } ?>
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

