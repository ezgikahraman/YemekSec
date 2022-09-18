<?php include "header.php"; 
  $msor = $db->prepare("SELECT * from urun");

  $msor->execute();

  $malzemelerim = array(); 
  
  while ($MCek = $msor->fetch(PDO::FETCH_ASSOC)) {

      $malzeme = $MCek['urun_isim']; 



      $malzemelerim[] = $malzeme;
  }




 





$yemeksor=$db->prepare("SELECT * FROM yemekler WHERE yemek_malzemeler LIKE '%$malzemelerim[0]%' and yemek_malzemeler LIKE '%$malzemelerim[1]%' and yemek_malzemeler LIKE '%$malzemelerim[2]%'
and yemek_malzemeler LIKE '%$malzemelerim[3]%'and yemek_malzemeler LIKE '%$malzemelerim[4]%'and yemek_malzemeler LIKE '%$malzemelerim[5]%'and yemek_malzemeler LIKE '%$malzemelerim[6]%'and yemek_malzemeler LIKE '%$malzemelerim[7]%'
and yemek_malzemeler LIKE '%$malzemelerim[8]%'and yemek_malzemeler LIKE '%$malzemelerim[9]%'and yemek_malzemeler LIKE '%$malzemelerim[10]%'and yemek_malzemeler LIKE '%$malzemelerim[11]%'
and yemek_malzemeler LIKE '%$malzemelerim[12]%' and yemek_malzemeler LIKE '%$malzemelerim[13]%'and yemek_malzemeler LIKE '%$malzemelerim[14]%'and yemek_malzemeler LIKE '%$malzemelerim[15]%'
and yemek_malzemeler LIKE '%$malzemelerim[16]%'and yemek_malzemeler LIKE '%$malzemelerim[17]%'and yemek_malzemeler LIKE '%$malzemelerim[18]%'and yemek_malzemeler LIKE '%$malzemelerim[19]%'and yemek_malzemeler LIKE '%$malzemelerim[20]%'
");
$yemeksor->execute();

?>

<div class="container">


			<div class="sonuc">
				
				<span style="line-height: 120px;margin-left: 50px; font-size:18px;">
					    <?php 

      

        

           
        foreach ($malzemelerim as $key) {
        echo $key.", ";
        }
        





  
               ?>
				</span>



			</div>














			<div class="tarifler">
				<div class="row" style="margin-top:25px;">


				<?php while($yemekcekk=$yemeksor->fetch(PDO::FETCH_ASSOC)) { 


					?>
					<div class="col-md-4" style="margin-top:20px;">
          <a href="yemek-tarif.php?yemek_id=<?php echo $yemekcekk['yemek_id']; ?>" style="text-decoration:none;">
						<div class="yemekx">
							<center><img src="admin/<?php echo $yemekcekk['yemek_resimyol']; ?>" width="355" height="200" style="margin-left: -7px;margin-top: 20px;">
							<h4><?php echo $yemekcekk['yemek_ad'];  ?></h4></center>
							<span style="margin-left: 26px;">
							<small>

								<?php 
                          if($yemekcekk['yemek_sure'] == 1){
                            echo "15 Dakikanın Altında";
                          }
                           else if($yemekcekk['yemek_sure'] == 2){
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
						
						</div></a>
					</div>
<?php } ?>


						

						
			
					









					





					
				</div>
			</div>

</div>	








<?php include 'footer.php'; ?>