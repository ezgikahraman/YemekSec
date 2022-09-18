<?php 

include 'header.php'; 

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Yemek Ekleme <small>

            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

        
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

            <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yemek Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="yemek_resimyol"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tarif Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="yemek_tarif_resimyol"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yemek Adı<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="yemek_ad"  fequired="required" placeholder="Yemek adını giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hangi Öğün<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="yemek_ogun" required>

                  <option value="1" >Kahvaltı</option>
                   <option value="2" >Öğle Yemeği</option>
                    <option value="3" >Ara Öğün</option>
                     <option value="4" >Akşam Yemeği</option>
                
                  


                </select>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hazırlanma Süresi<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="yemek_sure" required>

                  <option value="1" >15 Dakikanın Altında</option>
                   <option value="2" >30 dakikanın Altında</option>
                    <option value="3" >30 dakika ve üzeri</option>
               
                  


                </select>
                </div>
              </div>

 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="yemek_kategori" required>

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

               
                  


                </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Malzemeler<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="yemek_malzemeler"  fequired="required" placeholder="Malzemeler" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kalori<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="yemek_kalori"  fequired="required" placeholder="Kalori Giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              
        

              

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yemek Tarif <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
        </head>
        <body>
                <textarea name="yemek_tarif" placeholder="Tarif Giriniz"></textarea>
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

                  <option value="1" >Aktif</option>
                  <option value="0" >Pasif</option>
                  


                </select>
              </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="yemek_ekle" class="btn btn-success">Yemek Ekle</button>
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
