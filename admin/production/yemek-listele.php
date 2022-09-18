<?php include 'header.php'; 


$yemeksor=$db->prepare("SELECT * FROM yemekler  ORDER BY yemek_id DESC");
$yemeksor->execute();




?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Yemek Ayarları<small>
                      <?php  
                      if($_GET['durum']=="ok")
                      {?>
                        <b style="color:green;font-size:15px;">Durum Başarılı...</b>
                      <?php  }
                      else if($_GET['durum']=="no")
                        {?>

                         <b style="color:red;font-size:15px;">Durum Başarısız...</b>
                     <?php  }
                    

?>
                    </small></h2>
                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />


                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Yemek Resim</th>
                          <th>Tarif Resim</th>
                          <th>Yemek Adı</th>
                          <th>Hangi Öğün</th>
                          <th>Hazırlanma Süresi</th>
                          <th>Kategori</th>
                          <th>Malzemeler</th>
                          <th>Kalori</th>
                          <th>Tarif</th>
                          <th>Durum</th>
           
                          <th>Düzenle</th>
                          <th>Sil</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php while($yemekcek=$yemeksor->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                          <td style="width:50px"><center><img src="../<?php echo $yemekcek['yemek_resimyol']; ?> " height="150" ></center></td>
                          <td style="width:50px"><center><img src="../<?php echo $yemekcek['yemek_tarif_resimyol']; ?> " height="150" ></center></td>
<td><?php echo $yemekcek['yemek_ad']; ?></td>

                          <td><?php 
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
                          ?></td>





                          <td><?php 
                          if($yemekcek['yemek_sure'] == 1){
                            echo "15 Dakikanın Altında";
                          }
                           else if($yemekcek['yemek_sure'] == 2){
                            echo "30 dakikanın Altında";
                          }
                         
                          else{
                              echo "30 dakika ve üzeri"; 
                          }
                          ?></td>
                          <td><?php echo $yemekcek['yemek_kategori']; ?></td>
                          <td><?php echo $yemekcek['yemek_malzemeler']; ?></td>
                          <td><?php echo $yemekcek['yemek_kalori']; ?></td>
                        


<td style="width: 300px;">
<?php $aciklama=  $yemekcek['yemek_tarif'];  

  echo substr($aciklama, 0,360)."...";

?>




  </td>   
                          
                          
                          <td><center><?php 

                   if ($yemekcek['yemek_durum']==1) {?>

                    <button class="btn btn-success btn-xs" style="margin-top:60px">Aktif</button>

               

              <?php } else {?>

                <button class="btn btn-danger btn-xs" style="margin-top:60px">Pasif</button>


              <?php } ?></center></td>
                         <td><center><a href="yemek-duzenle.php?yemek_id=<?php echo $yemekcek['yemek_id']; ?>"><button class="btn btn-primary btn-xs"style="margin-top:60px">Düzenle</button></a> </center></td>
                       
                         <td><center><a href="../netting/islem.php?yemeksil=ok&yemek_id=<?php echo $yemekcek['yemek_id']; ?>" name="yemek_sil"><button class="btn btn-danger btn-xs"style="margin-top:60px">Sil</button></a> </center></td>
                        </tr>
                      
                       
                     <?php } ?>
                      
                      
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>




       

         
        
          </div>
        </div>
<?php include "footer.php" ?>






