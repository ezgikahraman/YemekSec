<?php include "header.php"; 
$yemeksor=$db->prepare("SELECT * FROM yemekler order by yemek_id desc");
$yemeksor->execute();

?>

<div class="container">


			<div class="tarifler">
				<div class="row" style="margin-top:25px;">


				<?php while($yemekcek=$yemeksor->fetch(PDO::FETCH_ASSOC)) { 


					?>
					<div class="col-md-4" style="margin-top:20px;">
					<a href="yemek-tarif.php?yemek_id=<?php echo $yemekcek['yemek_id']; ?>" style="text-decoration: none;"> 	<div class="yemekx">
							<center><img src="admin/<?php echo $yemekcek['yemek_resimyol']; ?>" width="355" height="200" style="margin-left: -7px;margin-top: 20px;">
							<h4><?php echo $yemekcek['yemek_ad'];  ?></h4></center>
							<span style="margin-left: 26px;">
							<small>

								<?php 
                          if($yemekcek['yemek_sure'] == 1){
                            echo "15 Dakikanın Altında";
                          }
                           else if($yemekcek['yemek_sure'] == 2){
                            echo "30 dakikanın Altında";
                          }
                         
                          else{
                              echo "30 dakika ve üzeri"; 
                          }
                          ?>










							</small>, <small><?php 
                          if($yemekcek['yemek_ogun'] == 1){
                            echo "Kahvaltı";
                          }
                           else if($yemekcek['yemek_ogun'] == 2){
                            echo "Öğle Yemeği";
                          }
                          else if($yemekcek['yemek_ogun'] == 3){
                            echo "Ara Öğün";
                          }
                          else{
                              echo "Akşam Yemeği"; 
                          }
                          ?></small></span>
						
						</div>
					</div></a> 
<?php } ?>


						

						
			
					









					





					
				</div>
			</div>

</div>	








<?php include 'footer.php'; ?>