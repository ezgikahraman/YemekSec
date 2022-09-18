<?php  include "header.php"; 
$yemekid=$_GET['yemek_id'];
$yemeksor=$db->prepare("SELECT * FROM yemekler where yemek_id=:id");
$yemeksor->execute(array(
'id'=> $yemekid));
$yemekcek=$yemeksor->fetch(PDO::FETCH_ASSOC);
?>

<div class="container"  style="clear:both;background-color:#fff8dc;">
    <div class="row">
    <br>
        <div class="col-md-12" style="margin-top:20px;" > <center> <h2><?php echo $yemekcek['yemek_ad']; ?></h2> </center> <br>
        <center> <img src="admin/<?php echo $yemekcek['yemek_resimyol']; ?>"  height="300"></center><br><br>
    </div>

    </div>
    <div class="row">
        <div class="col-md-12">
        <?php echo $yemekcek['yemek_tarif']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <center>  <img src="admin/<?php echo $yemekcek['yemek_tarif_resimyol']; ?>" height="300" ></center>
        <br>
        <br>

       <center><h5>Kalori: <small> <?php echo $yemekcek['yemek_kalori']; ?></small></h5></center> 
        </div>
    </div>
</div>
































<?php  include "footer.php"; ?>