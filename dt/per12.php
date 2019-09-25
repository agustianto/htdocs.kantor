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

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div style="margin-left:25%;margin-right:25%;padding:1px 16px;height:0px; font-family: 'Arial';" class="container">
  <h2><-- Side Nav</h2>
  <img src="images/dt.png" alt="DTS">
  </br></br>

<!-- Pertemuan 9 -->

  <?php
    // //Konstanta
    // //define(xy, 12)
    // $xy = 12;
    // $hitungxy = 50 - $xy;
    // echo "Hasil: ".$hitungxy;

    // define("Khafid", "Selamat datang di Polije! -> ".khafid2(9,2,1)."");
    // echo "</br></br>".Khafid;

    // //Prosedur
    // function khafid(){
    //   echo "</br></br>Nama Saya: ".Khafid." Dua ".khafid2(7,2,1);
    // }

    // //Memanggil Prosedur
    // khafid();

    // $awal_fungsi = microtime(true);

    // //Fungsi
    // function khafid2 ($tabungan,$beli,$pajak){
    //   $uang = $tabungan * $beli;
    //   //return $uang;
    //   return $uang - $pajak;
    // }

    // //Memanggil Fungsi
    // echo "</br></br>Uang saya sekarang adalah: ".khafid2(10,3,1);

    // $akhir_fungsi = microtime(true);
    // $hasil_waktu = $akhir_fungsi - $awal_fungsi;
    // echo "</br></br>Waktu yg diperlukan: ".$hasil_waktu;

    // $awal_faktorial = microtime(true);

    // function faktorial($angka){ 
    //   $hasil = 1;
    //   if ($angka<=0){
    //     throw new Exception("</br></br>Nilai Harus diatas 0", 1);
    //   } else {
    //     for ($i=1; $i <= $angka; $i++){
    //       $hasil = $hasil * $i;
    //     }
    //     return $hasil;
    //   }
    // }

    // try {
    //   echo "</br></br>Nilai faktorial adalah: ".faktorial(-1);
    // }
    
    // catch(Exception $e){
    //   echo "Pesan: ".$e->getMessage();
    // }

    // $akhir_faktorial = microtime(true);
    // $hasil_wfaktorial =  $akhir_faktorial - $awal_faktorial;
    // echo "</br></br>Waktu yg diperlukan Faktorial: ".$hasil_wfaktorial;

    // /**
    //  * Kelas Pertama Kita
    //  */
    // class cKhafid
    // {
      
    //   public function hitungk1($j)
    //   {
    //     echo "</br></br>Jumalah Apel ada: ".$j;
    //   }

    //   protected function hitungk2($k)
    //   {
    //     echo "</br></br>Jumalah Mangga ada: ".$k;
    //   }

    //   private function hitungk3($l)
    //   {
    //     echo "</br></br>Jumalah Anggur ada: ".$l;
    //   }
    // }

    // $kue1 = new cKhafid();
    // echo $kue1->hitungk1(2);

    // class aKhafid extends cKhafid
    // {
      
    //   function salam()
    //   {
    //     echo "</br></br>Selamat Siang";
    //   }
    // }

    // $kue2 = new aKhafid();
    // echo $kue2->hitungk1(4);
  ?>


<!-- Pertemuan 12 -->
<!-- Array -->
  <?php
    // //Membuat Array Kosong
    // $buah = array();
    // $hobi = [];

    // //Mengisi Array 
    // $minuman1 = array("Kopi", "Teh", "Jus");
    // $makanan = ["Nasi Goreng", "Nasi Padang", "Soto"];

    // //Mengisi Array pada Indek Tertentu
    // $minuman2 = array('sehat' => "Kopi",
    //                   'baik' => "Jamu" );
    // $penjual[0] = "Khafid";
    // $penjual[2] = "Durrohman";
    // $penjual[1] = "Agustianto";

    // //Menampilkan Array
    // echo "Nama Penjual: ".$penjual[0]."</br></br>";
    // echo "Daftar Menu : </br></br>";
    // echo $minuman1[1]."</br>".$minuman2["sehat"]."</br>";

    // foreach ($makanan as $menu) {
    //   echo $menu."</br>";
    // }

    // echo "<hr>Daftar Pegawai:</br></br>";
    // for ($i=0; $i < count($penjual); $i++) { 
    //   echo $penjual[$i]."</br>";
    // }

    // echo "</br>Keterangan Posisi Array: </br>";
    // print_r($penjual);

    // echo "</br></br>";
    // echo "<pre>";
    // print_r($penjual);
    // echo "</pre>";

    // // Array Multi Dimensi
    // $metrik = [[1,2,3,4],[5,6,7,8],[9,10,11,12]];
    // echo "</br><br>Nilai Restoran: ".$metrik[1][2];
  ?>



<!-- Membaca File dan DB -->
  <?php

    // //Membuka File
    // $nama_file = "baca.txt";
    // $nama_file2 = "baca2.txt";
    // $dokumen = fopen($nama_file,"r");
    // $dokumen2 = fopen($nama_file2, "r");
    // $isi_dokumen2 = fgetss($dokumen2);
    // echo "</br>Isi dengan Cara 2 = ".$isi_dokumen2."</br></br>";

    // if (!$dokumen) {
    //   echo "Dokemen Tidak Berhasil Dibuka</br></br>";
    //   exit;
    // } else {
    //   if (!feof($dokumen)) {
    //   $panjang_isi = filesize($nama_file);
    //   $isi_dokumen = fread($dokumen, $panjang_isi);
    //   echo "Besar file = " . $panjang_isi . "<br/>";
    //   echo "Isi dengan Cara 1 = " . $isi_dokumen;
    // }
    // }

    // fclose($dokumen);
    // fclose($dokumen2);
  ?>

  <!-- Menampilkan Data -->
<!--   <h2>Daftar Mahasiswa</h2>
  <table>
    <tr>
      <th>NO</th>
      <th>NAMA</th>
      <th>NIM</th>
      <th>JURUSAN</th>
      <th>GENDER</th>
      <th>ALAMAT</th>
    </tr> -->

    <?php
      // include "sambung.php";
      // $no = 1;
      // $mhs = mysqli_query($koneksi, "select * from mahasiswa");
      // while($d = mysqli_fetch_array($mhs)){
      //   $jenis_kelamin = $d['jenis_kelamin']=='P'?'Perempuan':'Laki-Laki';
              ?>
<!--       <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['jurusan']; ?></td>
        <td><?php echo $jenis_kelamin; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
      </tr> -->
      <?php 
    //}
    ?>
  <!-- </table> -->

  <!-- Form Inputan -->
<!--   <br/>
  <br/>
  <h3>TAMBAH DATA MAHASISWA</h3>
  <form method="post" action="">
    <table>
      <tr>      
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jenis_kel" value="L">Laki-Laki 
          <input type="radio" name="jenis_kel" value="P">Perempuan</td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td><input type="text" name="jurusan"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="simpan" Value="Simpan" class="btn btn-danger"></td>
      </tr>   
    </table>
  </form> -->

  <?php
  //   if(isset($_POST['simpan'])){
  //     $nama           = $_POST['nama'];
  //     $nim            = $_POST['nim'];
  //     $jenis_kelamin  = $_POST['jenis_kel'];
  //     $jurusan        = $_POST['jurusan'];
  //     $alamat         = $_POST['alamat'];

  //   $query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', alamat='$alamat'";

  //   mysqli_query($koneksi, $query);
  //   //header("Location:per12.php");
  // }
  ?>

</div>
<div style="margin-left:75%;padding:1px 16px;height:800px; font-family: 'Arial';" class="container">
  <h2>Login</h2>

  <form action="" method="POST">
  Username:<br>
  <input type="text" name="username" placeholder="Username" class="form">
  <br>
  Password:<br>
  <input type="text" name="password" placeholder="Password">
  <br><br>
  <input type="submit" name="login" value="Masuk" class="btn btn-primary">

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

    //echo "Memory: ".memory_get_usage();
  ?>

<!-- </div>

<div class="container"> 
<h1>Membuat Form dengan Bootstrap | <h1> 
  <form class="form-inline">
<div class="form-group">
<label for="nama">Nama Anda:</label>
<input type="text" class="form-control">
</div>
<div class="form-group">
<label for="alamat">Alamat anda:</label>
<input type="text" class="form-control" id="alamat">
</div> 
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div> -->


</body>
</html>
