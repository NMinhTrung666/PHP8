<div id="slide-left">
        <?php
        $sql = "SELECT * FROM tin
        ORDER BY idTin DESC
        LIMIT 0,1";
            $tinmoinhat_mottin = tinmoinhat_mottin($conn);
            $row = mysqli_fetch_array($tinmoinhat_mottin);


        ?>
        	<div id="slideleft-main">
                <img src="upload/tintuc/<?php echo $row['urlHinh'];?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>"><?php echo $row['TieuDe'];?></a> </h2>
                <div class="des">
                    <?php echo $row['TomTat'];?> 
                </div>
            	<p class="tlq"><a href="#">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a></p>
            
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
            <?php 
              $tinmoinhat_namtin = tinmoinhat_namtin($conn);
              while ($row = mysqli_fetch_array($tinmoinhat_namtin)){
              
                ?>
                <li>
                <div class="title_news">
                  <a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin'];?>" class="txt_link"><?php echo $row['TieuDe'];?></a> 
                </div>
              </li>
              <?php } ?>
            
          
 
            </ul>
            </div>			
            
			<div id="gocnhin">
                
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     