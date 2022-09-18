<?php
ob_start();
session_start();
include "../netting/baglan.php"; 


$kullanicisor=$db->prepare("SELECT * FROM users where kullanici_mail=:mail");
$kullanicisor->execute(array(
'mail'=> $_SESSION['kullanici_mail']
));
$say = $kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


if($say == 0){
  header("Location:login.php?giris=basarisiz");
  exit;
}







?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
  <meta name="description" content="<?php echo $ayarcek['ayar_description'];?>">
  <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'];?>">
  <meta name="author" content="<?php echo $ayarcek['ayar_author'];?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yönetici Paneli</title>
    <link rel="stylesheet" type="text/css" href="css/file.css">
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Koulen&display=swap');












    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-user"></i> <span>Yönetici Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.png" alt="..." class="img-circle profile_img">

              </div>
              <div class="profile_info">
                <span>Hoş Geldin,</span>
                <h2><?php echo $kullanicicek['kullanici_ad']." ".$kullanicicek['kullanici_soyad'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              
             <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa</a></li>
                  <li><a><i class="fa-regular fa fa-plus"></i> Yemekler <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="yemek-ekle.php">Yemek Ekle</a></li>
                      <li><a href="yemek-listele.php">Yemek Listele</a></li>
                    </ul></li>
    
               
                  
                  
                 
                </ul>
              </div>

            </div>

         
          </div>
        </div>

     








        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.png" alt=""><?php echo $kullanicicek['kullanici_ad']." ".$kullanicicek['kullanici_soyad'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <li><a href="cikis.php"><i class="fa fa-sign-out pull-right"></i> Güvenli Çıkış</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
    