<!DOCTYPE html>
<html>
<head>
<style>

body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #111;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  font-family: "Arial";
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/*ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}*/

</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div style="margin-left:25%;margin-right:25%;padding:1px 16px;height:0px; font-family: 'Arial';">
  <h2><-- Side Nav</h2>
  <img src="images/dt.png" alt="DTS">
  </br></br>
  <?php
  
  // $tempat = "di Polije";
  // $Tempat = "di Polije Dua";
  // $TempaT = "di Polije Tiga";

  // echo "<h1 style='color:red'>Selamat Belajar HTML ".$tempat."</h1>";
  // ECHO "<h2 style='color:blue'>Selamat Belajar HTML</h2>";
  // EcHo "<h3>Selamat Belajar HTML ".$Tempat."</h3>";
  // echo $TempaT."</br></br>";
  // echo date("Y/m/d")."</br></br>";

  // //Penjumlahan
  // $a = 10; $b = $c = 20; $d = 2;
  // $jumlah = ($a + $b)/$d;

  // echo $jumlah."</br></br>";

  // for ($x = 0; $x <= 10; $x++) {
  //     echo "Tempat Ke - ".$x."<br>";
  //   }

  // $t = date("H");

  // if ($t < "20") {
  //     echo "Selamat Pagi!";
  // }

  //Konstanta
  //define(xy, 12)
  $xy = 12;
  $hitungxy = 50 - $xy;
  echo "Hasil: ".$hitungxy;

  define("Khafid", "Selamat datang di Polije! -> ".khafid2(9,2)."");
  echo "</br></br>".Khafid;

  //Prosedur
  function khafid(){
    echo "</br></br>Nama Saya: ".Khafid." Dua ".khafid2(7,2);
  }

  //Memanggil Prosedur
  khafid();

  //Fungsi
  function khafid2 ($tabungan,$beli){
    $uang = $tabungan - $beli;
    //return $uang;
    return $uang - $beli;
  }

  //Memanggil Fungsi
  echo "</br></br>Uang saya sekarang adalah: ".khafid2(10,3);

  function faktorial($angka){ 
    $hasil = 1;
    for ($i=1; $i <= $angka; $i++){
      $hasil = $hasil * $i;
    }
    return $hasil;
  }

  echo "</br></br>Nilai faktorial adalah: ".faktorial(5);
?>

</div>
<div style="margin-left:75%;padding:1px 16px;height:1000px; font-family: 'Arial';">
  <h2>div kanan</h2>
  <br>
  <form action="" method="POST">
  <input type="submit" name="kembali" value="Kembali">
  </form>

  <?php
    if(isset($_POST['kembali'])){
      header("Location:per9.php");
    }
  ?>

</div>


</body>
</html>
