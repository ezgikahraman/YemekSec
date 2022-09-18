<?php 
ob_start();
session_start();
include "baglan.php";


if (isset($_POST['yemek_ekle'])) {


	$uploads_dir = '../yemekler';
	@$tmp_name = $_FILES['yemek_resimyol']["tmp_name"];
	@$name = $_FILES['yemek_resimyol']["name"];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$uploads_dirs = '../tarif';
	@$tmp_names = $_FILES['yemek_tarif_resimyol']["tmp_name"];
	@$names = $_FILES['yemek_tarif_resimyol']["name"];

	$benzersizads=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyols=substr($uploads_dirs, 3)."/".$benzersizads.$names;
	@move_uploaded_file($tmp_names, "$uploads_dirs/$benzersizads$names");
	


	$kaydet=$db->prepare("INSERT INTO yemekler SET
	yemek_resimyol=:yemek_resimyol,
	yemek_tarif_resimyol=:yemek_tarif_resimyol,
	yemek_ad=:yemek_ad,
	yemek_ogun=:yemek_ogun,
	yemek_sure=:yemek_sure,
	yemek_malzemeler=:yemek_malzemeler,
	yemek_kalori=:yemek_kalori,
	yemek_tarif=:yemek_tarif,
	yemek_kategori=:yemek_kategori,
	yemek_durum=:yemek_durum
	");

	$insert=$kaydet->execute(array(
		'yemek_resimyol' => $refimgyol,
		'yemek_tarif_resimyol' => $refimgyols,
		'yemek_ad' => $_POST['yemek_ad'],
		'yemek_ogun' => $_POST['yemek_ogun'],
		'yemek_sure' => $_POST['yemek_sure'],
		'yemek_malzemeler' => $_POST['yemek_malzemeler'],
		'yemek_kalori' => $_POST['yemek_kalori'],
		'yemek_tarif' => $_POST['yemek_tarif'],
		'yemek_kategori' => $_POST['yemek_kategori'],
		'yemek_durum' => $_POST['yemek_durum']
	));


	if ($insert) {

		Header("Location:../production/yemek-listele.php?durum=ok");

	} else {

		Header("Location:../production/yemek-listele.php?durum=no");
	}

}




if (isset($_POST['yemek_duzenle'])) {

$yemek_idd=$_POST['yemekidd'];

		$duzenle=$db->prepare("UPDATE yemekler SET
			yemek_ad=:yemek_ad,
	yemek_ogun=:yemek_ogun,
	yemek_sure=:yemek_sure,
	yemek_malzemeler=:yemek_malzemeler,
	yemek_kalori=:yemek_kalori,
	yemek_tarif=:yemek_tarif,
	yemek_kategori=:yemek_kategori,
	yemek_durum=:yemek_durum
			WHERE yemek_id=$yemek_idd");
		$update=$duzenle->execute(array(
		'yemek_ad' => $_POST['yemek_ad'],
		'yemek_ogun' => $_POST['yemek_ogun'],
		'yemek_sure' => $_POST['yemek_sure'],
		'yemek_malzemeler' => $_POST['yemek_malzemeler'],
		'yemek_kalori' => $_POST['yemek_kalori'],
		'yemek_tarif' => $_POST['yemek_tarif'],
		'yemek_kategori' => $_POST['yemek_kategori'],
		'yemek_durum' => $_POST['yemek_durum']
		));	

	

		if ($update) {

			Header("Location:../production/yemek-duzenle.php?yemek_id=$yemek_idd&durum=ok");

		} else {

			Header("Location:../production/yemek-duzenle.php?durum=no");
		}

}

if(isset($_POST['git'])){

	$ogun=$_POST['ogunn'];
	$suree=$_POST['sure'];
	header("Location:../../y.php?yemek_ogun=$ogun&yemek_sure=$suree");
}


if(isset($_POST['log_gir'])){
	
	$kullanici_mail= $_POST['kullanici_mail'];
	$kullanici_sifre = md5($_POST['kullanici_sifre']);

	$kullanicisor=$db->prepare("SELECT * FROM users where kullanici_mail=:mail and kullanici_sifre=:sifre");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'sifre' => $kullanici_sifre
	));
$say = $kullanicisor->rowCount();

if($say ==1){
	$_SESSION['kullanici_mail']=$kullanici_mail;
	header("Location:../production/index.php");

}
else{
	header("Location:../production/login.php?durum=no");
}




}

if($_GET['yemeksil']== "ok"){
$yemekidx=$_GET['yemek_id'];


$ksil=$db->prepare("DELETE FROM yemekler WHERE yemek_id=:id");
$kkontrol=$ksil->execute(array(
	'id' =>$yemekidx
));


if ($kkontrol) {
	Header("Location:../production/yemek-listele.php?durum=ok");
	exit;

} else {
	Header("Location:../production/yemek-listele.php?durum=no");
	exit;
}
}



 ?>