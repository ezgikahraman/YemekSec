<?php 
include 'baglan.php';


if (isset($_POST['urun_ekle'])) {

			$kaydet=$db->prepare("INSERT INTO urun SET
			urun_isim=:urun_isim");
			$insert=$kaydet->execute(array(
				'urun_isim' => $_POST['urun_isim']));


				if ($insert) {

					Header("Location:index.php?urun=eklendi");

				} else {

					Header("Location:index.php?urun=eklenmedi");
				}

		
	
}
if($_GET['urunsil']=="ok")
{
	$idd=$_GET['urun_id'];

	$ksil=$db->prepare("DELETE FROM urun WHERE urun_id=:id");
	$kkontrol=$ksil->execute(array(
		'id' =>$idd
	));
	

	if ($kkontrol) {
		Header("Location:index.php?urun=silindi");
		exit;

	} else {
		Header("Location:index.php?urun=silinemedi");
		exit;
	}
}

/*

if (isset($_POST['denemey'])) {

			$kaydet=$db->prepare("INSERT INTO malzeme SET
			malzeme_isim=:malzeme_isim");
			$insert=$kaydet->execute(array(
				'malzeme_isim' => $_POST['malzeme_isim']));


				if ($insert) {

					Header("Location:index.php?malzeme=eklendi");

				} else {

					Header("Location:index.php?malzeme=eklenmedi");
				}

		
	
}
*/




 ?>