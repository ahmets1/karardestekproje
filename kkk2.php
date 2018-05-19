<?php

require("kkk3.php");
if(!$baglan){ 
	die("Bağlantı Başarısız".mysqli_connect_error());
}
else
{
	//echo "Bağlantı Başarılı";
}
$gonder = $_POST["gonder"];
if(isset($gonder)){
		//$kitap_ad = $_POST['kitap_ad'];
		$tur_ad = $_POST['tur_ad'];
		$deger = $_POST['deger'];
		$deger1 = $_POST['deger1'];
	
	

		$sql="SELECT  kitaplar.kitap_ad, turler.tur_ad, kitaplar.fiyat, kitaplar.sayfa
FROM kitaplar, turler, kitap_tur 
WHERE kitap_tur.kitap_id=kitaplar.kitap_id and kitap_tur.tur_id=turler.tur_id and kitap_tur.tur_id='".$tur_ad."' and kitaplar.sayfa<'".$deger."' and kitaplar.fiyat<'".$deger1."'";

	//$sql1="SELECT kitaplar.kitap_ad,kitaplar.sayfa,turler.tur_ad FROM kitaplar,turler,kitap_tur WHERE kitap_tur.tur_id=turler.tur_id and kitap_tur.kitap_id=kitaplar.kitap_id and kitaplar.sayfa>'".$deger."'"

		//echo $sql;
		
		$srg=mysqli_query($baglan,$sql) or die("MySQL error: " . mysqli_error($baglan));
		if(mysqli_num_rows($srg)>0){
				while($row=mysqli_fetch_array($srg)){ 
			

				echo "<hr>Kitap Adı: ".$row["kitap_ad"]."</br>Kitap Türü:".$row["tur_ad"]. "</br>Fiyatı:".$row["fiyat"]."</br>Sayfası: ".$row["sayfa"];"<hr></br>";
				}		

		}else{
			//echo "Kayıt Bulunamadı";
		} 
		
}
mysqli_close($baglan); 
?>
