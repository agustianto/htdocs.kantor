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

<div style="margin-left:25%;margin-right:25%;padding:1px 16px;height:0px; font-family: 'Arial';">
  <h2><-- Side Nav</h2>
  <img src="images/dt.png" alt="DTS">
  </br></br>

<!-- Pertemuan 13 -->
  <!-- <h3>Penggunaan PhpSpreadsheet</h3> -->
  <?php
    // require 'vendor/autoload.php';

    // use PhpOffice\PhpSpreadsheet\Spreadsheet;
    // use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    // $spreadsheet = new Spreadsheet();
    // $sheet = $spreadsheet->getActiveSheet();
    // $sheet->setCellValue('A1', 'Hello World !');

    // $writer = new Xlsx($spreadsheet);
    // $writer->save('hello world.xlsx');
  ?>

<!-- Bootstrap -->
  <h1>Cara Menggunakan Bootstrap | DigiTalent</h1>
  <button class="btn btn-danger">TOMBOL MERAH</button>
  <button class="btn btn-primary">TOMBOL BIRU</button>


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

    //echo "Memory: ".memory_get_usage();
  ?>

</div>


</body>
</html>
