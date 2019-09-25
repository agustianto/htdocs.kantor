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

    $awal_fungsi = microtime(true);

    //Fungsi
    function khafid2 ($tabungan,$beli){
      $uang = $tabungan - $beli;
      //return $uang;
      return $uang - $beli;
    }

    //Memanggil Fungsi
    echo "</br></br>Uang saya sekarang adalah: ".khafid2(10,3);

    $akhir_fungsi = microtime(true);
    $hasil_waktu = $akhir_fungsi - $awal_fungsi;
    echo "</br></br>Waktu yg diperlukan: ".$hasil_waktu;

    $awal_faktorial = microtime(true);

    function faktorial($angka){ 
      $hasil = 1;
      if ($angka<=0){
        throw new Exception("</br></br>Nilai Harus diatas 0", 1);
      } else {
        for ($i=1; $i <= $angka; $i++){
          $hasil = $hasil * $i;
        }
        return $hasil;
      }
    }

    try {
      echo "</br></br>Nilai faktorial adalah: ".faktorial(-1);
    }
    
    catch(Exception $e){
      echo "Pesan: ".$e->getMessage();
    }

    $akhir_faktorial = microtime(true);
    $hasil_wfaktorial =  $akhir_faktorial - $awal_faktorial;
    echo "</br></br>Waktu yg diperlukan Faktorial: ".$hasil_wfaktorial;

    /**
     * Kelas Pertama Kita
     */
    class cKhafid
    {
      
      public function hitungk1($j)
      {
        echo "</br></br>Jumalah Apel ada: ".$j;
      }

      protected function hitungk2($k)
      {
        echo "</br></br>Jumalah Mangga ada: ".$k;
      }

      private function hitungk3($l)
      {
        echo "</br></br>Jumalah Anggur ada: ".$l;
      }
    }

    $kue1 = new cKhafid();
    echo $kue1->hitungk1(2);

    /**
     * 
     */
    class aKhafid extends cKhafid
    {
      
      function salam()
      {
        echo "</br></br>Selamat Siang";
      }
    }

    $kue2 = new aKhafid();
    echo $kue2->hitungk1(4);
  ?>

</div>
<div style="margin-left:75%;padding:1px 16px;height:1000px; font-family: 'Arial';">
  <h2>Login</h2>

  <form action="" method="POST">
  Username:<br>
  <input type="text" name="username" placeholder="Username">
  <br>
  Password:<br>
  <input type="text" name="password" placeholder="Password">
  <br><br>
  <input type="submit" name="login" value="Masuk">

  <?php
    if(isset($_POST['login'])){
      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    
      if ($username="admin" && $password="root"){
        session_start();
        $_SESSION["user"] = $username;
        header("Location:per8.php");
        echo "</br></br>Berhasil Login";
      } else {
        echo "</br></br>Gagal Login";
      }
    }

    echo "Memory: ".memory_get_usage();
  ?>

</div>


</body>
</html>
