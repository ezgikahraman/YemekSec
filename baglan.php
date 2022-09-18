


 <?php 


try{
		        $db = new PDO('mysql:host=sql202.byetcluster.com;dbname=epiz_31913977_yemeksec;charset=utf8','epiz_31913977','PJnIF7IMlluOh0');
		        //echo "başarılı";
			}catch(PDOException $e){
				echo 'Hata: '.$e->getMessage();
			}
			
  ?>