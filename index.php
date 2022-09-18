<?php include "header.php"; ?>
        <div class="content">
            <div class="slider">
                <div id="demo" class="carousel slide" data-ride="carousel">

       
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                  

                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/a.jpg"  style="width: 100%;">
                      </div>
                      <div class="carousel-item">
                        <img src="img/b.jpg" style="width: 100%;">
                      </div>
                      <div class="carousel-item">
                        <img src="img/c.jpg"style="width: 100%;">
                      </div>
                    </div>
                  

                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  
                  </div>
                  <div class="kategoriler">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=salatalar">Salatalar</a></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=tatlilar">Tatlılar</a></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=corbalar">Çorbalar</a></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=etyemekleri">Et Yemekleri</a></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=balikyemekleri">Balık Yemekleri</a></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=tavukyemekleri">Tavuk Yemekleri</a></div>
                        <div class="col-md-1"><a href="yemekler.php?yemek_kategori=sebzeyemekleri">Sebze Yemekleri</a></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=makarnapilav">Makarna ve Pilavlar</a></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=soslar">Soslar</a></div>
                        <div class="col-md-1" ><a href="yemekler.php?yemek_kategori=icecekler">İçecekler</a></div> 
                    </div>
                  </div>
                  <div class="filtreleme">
                    <form action="admin/netting/islem.php" method="POST">
                      <div class="filtrefield">
                        
                        <select name="ogunn" id="">
                            <option value="" disabled>Hangi Öğün</option>
                            <option value="1">Kahvaltı</option>
                            <option value="2">Öğle Yemeği</option>
                            <option value="3">Ara Öğün</option>
                            <option value="4">Akşam Yemeği</option>

                        </select>

                        <select name="sure" id="">
                            <option value="" disabled>Hazırlama Süresi</option>
                            <option value="1">15 Dakikanın Altında </option>
                            <option value="2">30 Dakikanın Altında</option>
                            <option value="3">30 Dakika ve üzeri</option>
                        </select>
                        <button class="filtre-git" name="git">Git</button>
                      </div></form>
                  </div><br>

                  <div class="oner" id="git">
                      <center><h3>Malzemeleri girin, tarifleri listeleyin.</h3></center>
                      <center><small style="font-size:16px ;">Malzemeleriniz ile yapabileceğiniz yemekleri görmek için bulunan malzemeleri girin tarifler listelensin. 
                    </small></center>
                    <div class="container"><br>
					<div class="row">
							<?php  	
				while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)){?>
                   
                            <div class="col-md-1"> 
                           <a class="ass"  href="islem.php?urunsil=ok&urun_id=<?php echo $uruncek['urun_id']; ?>&#git ">	<div class="urunler"><center>  


                           	<?php 
                           		$veri =strlen($uruncek['urun_isim']);

                           		if($veri>7)
                           		{

                           			echo substr($uruncek['urun_isim'],0,10);
                           			echo "<div class='xx'>".substr($uruncek['urun_isim'],10,15)."</div>";
                           		
                           		

                           		}
                           		else
                           		{
                           			  	echo $uruncek['urun_isim']; 
                           		}
                       



                           ?></center></div></a> </div>

                           <?php } ?> 
                            <button data-toggle="modal" data-target="#myModal" class="deneme"><center>Malzeme Ekle</center></button>
                        </div>
					<center><a href="tarifler.php" ><button style="margin-top:10px;border:0;" class="t_gelsin" >Tarifi Göster</button></a>	</center>
                    </div>
                  </div>


            </div>
        </div>
    </div>






<div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title" style="font-family: 'Koulen', cursive;">Malzeme Ekle</h4>
                      <button type="button" class="close" style="border:0;background-color: transparent;" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    	<form action="islem.php" method="post">
                        <table border="0">
                           
                           <tr>
                           	<td><input type="text" name="urun_isim" style="width:275px;height: 36px;border: 0;border-radius: 20px 0 0 20px; padding: 15px;background-color: #dddddd;outline: none;"></td>
                           	<td><input type="submit" name="urun_ekle" value="Malzeme Ekle"style="width:175px;height: 36px; border-radius: 0 20px 20px 0;border: 0;margin-left: -2px;" ></td>
                           </tr>
            	
                        </table></form>
            
            	
            
            
            
            
            
                    </div>
                    
                
                    
                  </div>
                </div>
              </div>









<div class="container-fluid"style="margin-top:100px;">


               <?php include "footer.php"; ?></div>