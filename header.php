<?php include("baglan.php");


$urunsor=$db->prepare("SELECT * FROM urun");
$urunsor->execute();






 ?>
<html>
<head>
    <title> </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mekle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        
        <div class="menu-field"><div class="container">
            <div class="logo"></div>
            <div class="menu">
                
                <ul>
                    <a href="index.php"> <li class="res">Anasayfa</li></a>    
                    <a href="tumyemekler.php"> <li>Yemekler</li></a>
                    <a href="hakkimizda.php"><li>Hakkımızda</li></a>
                    <a href="iletisim.php"><li>İletişim</li></a>     
                </ul>
            </div>
        </div> 
    </div>