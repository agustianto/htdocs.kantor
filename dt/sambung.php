 <?php
  //Koneksi DB
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_mhs";

    $koneksi = mysqli_connect($host, $user, $password, $database);

 	// Check connection
	if ($koneksi->connect_error) {
    	die("Koneksi Gagal: " . $koneksi->connect_error);
	}
	echo "Koneksi Berhasil";
 ?>
