
<!-- //BEDA HURUF -->
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


<!-- <h1 style="color:red">Selamat Belajar HTML</h1>
<h2 style="color:blue">Selamat Belajar HTML</h2>
<h3>Selamat Belajar HTML</h3> -->

<?php
	
	$tempat = "di Polije";
	$Tempat = "di Polije Dua";
	$TempaT = "di Polije Tiga";

	echo "<h1 style='color:red'>Belajar Frame Work CI3 dengan Kontroler Baru ".$tempat."</h1>";
	ECHO "<h2 style='color:blue'>Selamat Belajar Frame Work CI3</h2>";
	EcHo "<h3>Selamat Belajar Controller - View ".$Tempat."</h3>";
	echo $TempaT."</br></br>";
	echo date("Y/m/d")."</br></br>";

	// //Penjumlahan
	// $a = 10; $b = $c = 20; $d = 2;
	// $jumlah = ($a + $b)/$d;

	// echo $jumlah."</br></br>";

	// for ($x = 0; $x <= 10; $x++) {
 //    	echo "Tempat Ke - ".$x."<br>";
	// 	}

	$t = date("H");

	// if ($t < "20") {
 //    	echo "Selamat Pagi!";
	// }

	// //Konstanta
	// define("Khafid", "Selamat datang di Polije!");
	// echo "</br></br>".Khafid;

	// //Fungsi
	// function khafid(){
	// 	echo "</br></br>".Khafid." Dua";
	// }

	// khafid();

?>

</body>
</html>