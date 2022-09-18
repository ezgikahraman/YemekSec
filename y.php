<?php include "header.php"; 

$yemek_kogun=$_GET['yemek_ogun'];
$yemek_ksure=$_GET['yemek_sure'];

$yemeksor=$db->prepare("SELECT * FROM yemekler where  yemek_ogun=:ogun&&yemek_sure=:sure");
$yemeksor->execute(array(
'ogun'=> $yemek_kogun,
'sure' => $yemek_ksure
));



?>

<div class="container">


			<div class="sonucx" >
				
				<center><h1 style="font-size: 85px;font-weight: bold;"><?php 

					if($kategori=="salatalar")
					{
						echo "SALATALAR";
					}
					else if($kategori=="tatlilar")
						{
						echo "TATLILAR";
					}
						else if($kategori=="corbalar")
						{
						echo "ÇORBALAR";
					}
						else if($kategori=="etyemekleri")
						{
						echo "ET YEMEKLERİ";
					}
						else if($kategori=="balikyemekleri")
						{
						echo "BALIK YEMEKLERİ";
					}
						else if($kategori=="tavukyemekleri")
						{
						echo "TABUK YEMEKLERİ";
					}
						else if($kategori=="sebzeyemekleri")
						{
						echo "SEBZE YEMEKLERİ";
					}
						else if($kategori=="makarnapilav")
						{
						echo "MAKARNA VE PİLAVLAR";
					}
						else if($kategori=="soslar")
						{
						echo "SOSLAR";
					}
						else if($kategori=="icecekler")
						{
						echo "İÇECEKLER";
					}


				 ?></h1></center>



			</div>














			<div class="tarifler">
				<div class="row" style="margin-top:25px;">


				<?php while($yemekcek=$yemeksor->fetch(PDO::FETCH_ASSOC)) { 


					?>
					<div class="col-md-4" style="margin-top:20px;">
					<a href="yemek-tarif.php?yemek_id=<?php echo $yemekcek['yemek_id']; ?>" style="text-decoration: none;"> <div class="yemekx">
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
						
						</div></a>
					</div>
<?php } ?>


						

						
			
					









					





					
				</div>
			</div>

</div>	








<?php include 'footer.php'; ?>