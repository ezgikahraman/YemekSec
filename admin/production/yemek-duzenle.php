<?php 

include 'header.php'; 

$yemeksor=$db->prepare("SELECT * FROM yemekler where yemek_id=:id");
$yemeksor->execute(array(
  'id' => $_GET['yemek_id']
));
$yemekcek=$yemeksor->fetch(PDO::FETCH_ASSOC);
?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Yemek Düzenle <small>,

            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

        
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

         

                


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yemek Resim<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <img src="../<?php echo $yemekcek['yemek_resimyol'];  ?>" height="200">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yemek Adı<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="yemek_ad" value="<?php echo $yemekcek['yemek_ad'];  ?>"  fequired="required" placeholder="Kalori Giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hangi Öğün<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="yemek_ogun" required>


                    <?php if($yemekcek['yemek_ogun']==1){ ?>
                             <option value="1" >Kahvaltı</option>
                    <option value="2" >Öğle Yemeği</option>
                    <option value="3" >Ara Öğün</option>
                     <option value="4" >Akşam Yemeği</option>
                          <?php }

                          else if($yemekcek['yemek_ogun']==2){ ?>
                            <option value="2" >Öğle Yemeği</option>
                             <option value="1" >Kahvaltı</option>
                    
                    <option value="3" >Ara Öğün</option>
                     <option value="4" >Akşam Yemeği</option>
                          <?php }
                          else if($yemekcek['yemek_ogun']==3){ ?>
                             <option value="3" >Ara Öğün</option>
                             <option value="1" >Kahvaltı</option>
                    <option value="2" >Öğle Yemeği</option>
                   
                     <option value="4" >Akşam Yemeği</option>
                          <?php }





                          else
                           {
                            ?>
                              <option value="4" >Akşam Yemeği</option>
                              <option value="1" >Kahvaltı</option>
                    <option value="2" >Öğle Yemeği</option>
                    <option value="3" >Ara Öğün</option>
                   
                           <?php } ?>
                  










                  


                </select>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hazırlanma Süresi<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="yemek_sure" required>




                      <?php if($yemekcek['yemek_sure']==1){ ?>
                          <option value="1">15 Dakikanın Altında</option>
                          <option value="2">30 dakikanın Altında</option> 
                          <option value="3">30 dakika ve üzeri</option>
                          <?php 
                        }else if($yemekcek['yemek_sure']==2){?>


                          <option value="2">30 dakikanın Altında</option> 
                          <option value="1">15 Dakikanın Altında</option>
                          <option value="3">30 dakika ve üzeri</option>

                      <?php  }
                          else
                           {
                            ?>
                             <option value="3">30 dakika ve üzeri</option>
                              <option value="2">30 dakikanın Altında</option> 
                          <option value="1">15 Dakikanın Altında</option>
                         
                           <?php } ?>


                </select>
                </div>
              </div>

 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="yemek_kategori" required>









 <?php if($yemekcek['yemek_kategori']=="salatalar"){ ?>
                    <option value="salatalar" >Salatalar</option>
                   <option value="tatlılar" >Tatlılar</option>
                    <option value="corbalar" >Çorbalar</option>
                    <option value="etyemekleri" >Et Yemekleri</option>
                   <option value="balikyemekleri" >Balık Yemekleri</option>
                    <option value="tavukyemekleri" >Tavuk Yemekleri</option>
                    <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                   <option value="makarnapilav" >Makarna ve Pilavlar</option>
                    <option value="soslar" >Soslar</option>
                    <option value="icecekler" >İçecekler</option>
                          <?php }

                else if($yemekcek['yemek_kategori']=="tatlılar"){ ?>

                   <option value="tatlılar" >Tatlılar</option>
                   <option value="salatalar" >Salatalar</option>
                    <option value="corbalar" >Çorbalar</option>
                    <option value="etyemekleri" >Et Yemekleri</option>
                   <option value="balikyemekleri" >Balık Yemekleri</option>
                    <option value="tavukyemekleri" >Tavuk Yemekleri</option>
                    <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                   <option value="makarnapilav" >Makarna ve Pilavlar</option>
                    <option value="soslar" >Soslar</option>
                    <option value="icecekler" >İçecekler</option>
                          <?php }
                           else if($yemekcek['yemek_kategori']=="etyemekleri"){ ?>
<option value="etyemekleri" >Et Yemekleri</option>
                   <option value="tatlılar" >Tatlılar</option>
                    <option value="corbalar" >Çorbalar</option>
                    
                   <option value="balikyemekleri" >Balık Yemekleri</option>
                    <option value="tavukyemekleri" >Tavuk Yemekleri</option>
                    <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                   <option value="makarnapilav" >Makarna ve Pilavlar</option>
                    <option value="soslar" >Soslar</option>
                    <option value="icecekler" >İçecekler</option>
                          <?php }

 else if($yemekcek['yemek_kategori']=="balikyemekleri"){ ?>

  <option value="balikyemekleri" >Balık Yemekleri</option>
                   <option value="tatlılar" >Tatlılar</option>
                    <option value="corbalar" >Çorbalar</option>
                    <option value="etyemekleri" >Et Yemekleri</option>
                 
                    <option value="tavukyemekleri" >Tavuk Yemekleri</option>
                    <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                   <option value="makarnapilav" >Makarna ve Pilavlar</option>
                    <option value="soslar" >Soslar</option>
                    <option value="icecekler" >İçecekler</option>
                          <?php }

 else if($yemekcek['yemek_kategori']=="tavukyemekleri"){ ?>
<option value="tavukyemekleri" >Tavuk Yemekleri</option>
                   <option value="tatlılar" >Tatlılar</option>
                    <option value="corbalar" >Çorbalar</option>
                    <option value="etyemekleri" >Et Yemekleri</option>
                   <option value="balikyemekleri" >Balık Yemekleri</option>
                    
                    <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                   <option value="makarnapilav" >Makarna ve Pilavlar</option>
                    <option value="soslar" >Soslar</option>
                    <option value="icecekler" >İçecekler</option>
                          <?php }




                           else if($yemekcek['yemek_kategori']=="sebzeyemekleri"){ ?>
 <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                   <option value="tatlılar" >Tatlılar</option>
                    <option value="corbalar" >Çorbalar</option>
                    <option value="etyemekleri" >Et Yemekleri</option>
                   <option value="balikyemekleri" >Balık Yemekleri</option>
                    <option value="tavukyemekleri" >Tavuk Yemekleri</option>
                   
                   <option value="makarnapilav" >Makarna ve Pilavlar</option>
                    <option value="soslar" >Soslar</option>
                    <option value="icecekler" >İçecekler</option>
                          <?php }


 else if($yemekcek['yemek_kategori']=="makarnapilav"){ ?>
                    <option value="makarnapilav" >Makarna ve Pilavlar</option>
                   <option value="tatlılar" >Tatlılar</option>
                    <option value="corbalar" >Çorbalar</option>
                    <option value="etyemekleri" >Et Yemekleri</option>
                   <option value="balikyemekleri" >Balık Yemekleri</option>
                    <option value="tavukyemekleri" >Tavuk Yemekleri</option>
                    <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                  
                    <option value="soslar" >Soslar</option>
                    <option value="icecekler" >İçecekler</option>
                          <?php }

 else if($yemekcek['yemek_kategori']=="soslar"){ ?>
 <option value="soslar" >Soslar</option>
                   <option value="tatlılar" >Tatlılar</option>
                    <option value="corbalar" >Çorbalar</option>
                    <option value="etyemekleri" >Et Yemekleri</option>
                   <option value="balikyemekleri" >Balık Yemekleri</option>
                    <option value="tavukyemekleri" >Tavuk Yemekleri</option>
                    <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                   <option value="makarnapilav" >Makarna ve Pilavlar</option>
                   
                    <option value="icecekler" >İçecekler</option>
                          <?php }

 else { ?>
              <option value="icecekler" >İçecekler</option>
                   <option value="tatlılar" >Tatlılar</option>
                    <option value="corbalar" >Çorbalar</option>
                    <option value="etyemekleri" >Et Yemekleri</option>
                   <option value="balikyemekleri" >Balık Yemekleri</option>
                    <option value="tavukyemekleri" >Tavuk Yemekleri</option>
                    <option value="sebzeyemekleri" >Sebze Yemekleri</option>
                   <option value="makarnapilav" >Makarna ve Pilavlar</option>
                    <option value="soslar" >Soslar</option>
                    
                          <?php } ?>




                          



















               
                  


                </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Malzemeler<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="yemek_malzemeler" value="<?php echo $yemekcek['yemek_malzemeler'];  ?>" fequired="required" placeholder="Malzemeler" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kalori<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="yemek_kalori" value="<?php echo $yemekcek['yemek_kalori'];  ?>"  fequired="required" placeholder="Kalori Giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              
        

              

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yemek Tarif <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
        </head>
        <body>
                <textarea name="yemek_tarif" placeholder="Tarif Giriniz" ><?php echo $yemekcek['yemek_tarif'];  ?></textarea>
                <script>
                        CKEDITOR.replace( 'yemek_tarif' );
                </script>
                </div>
              </div>

              




              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yemek Durum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="yemek_durum" required>

                <?php if($yemekcek['yemek_durum']==1){ ?>
                          <option value="1">Aktif</option>
                          <option value="0">Pasif</option> 
                          <?php }
                          else
                           {
                            ?>
                             <option value="0">Pasif</option> 
                             <option value="1">Aktif</option>
                           <?php } ?>

                </select>
              </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <input type="hidden" name="yemekidd" value="<?php echo $yemekcek['yemek_id']; ?>">
                <button type="submit" name="yemek_duzenle" class="btn btn-success">Yemek Duzenle</button>
              </div>
            </div>
          </form>



        </div>
      </div>
    </div>
  </div>



  <hr>
  <hr>
  <hr>



</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
