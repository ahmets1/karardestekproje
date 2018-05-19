<?php
include "kkk3.php";
?>
<!DOCTYPE html>

<html>
<head>

<tittle><font size="5"><span style="color:Red">Kitap Öneri Karar Destek Sistemi</span></font></tittle>
<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
body{
	background-image:url("KİTAP.jpg");
	background-repeat:no-repeat;
	background-size:1500px 1500px;
}
</style>
</head>


<body >




	<div class="container"/> 

	<form class="form-signin" action="kkk2.php" action="kkkayit.php" method="POST">
	<h2 class="form-signin-heading">Giriş Formu</h2>
	<hr>
<hr>



<label>Turler</label>
<select name="tur_ad" id="tur" >
	<option value="0" selected>Tür Seciniz</option>
	<?php
		$sql= mysqli_query($baglan,"select * from turler");
		while($tumu = mysqli_fetch_array($sql)){
			echo '<option value="'.$tumu["tur_id"].'">'.$tumu["tur_ad"].'</option>';
		}
	?>

</select>
<hr>
<br>
<label>Maksimum kaç sayfa olsun: <input type="number" name="deger" min="0" max="900" value="200" />	
</br><hr>
<label>Maksimum fiyat ne kadar olsun:<input type="number" name="deger1" min="0" max="120" value="15" />

	</br><hr>
	
	
	
	
<button type="submit" name="gonder" class="btn btn-lg btn-danger btn-block">Gönder</button>

</form>


<form class="form-signin" action="kkk4.php" method="POST">
<button type="submit" name="gonderr" class="btn btn-lg btn-danger btn-block">Grafiği Göster</button>
</form
</body>


</html>


