<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:index.php");
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Adaptive Learning</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- Core CSS - Include with every page -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Page-Level Plugin CSS - Tables -->
<link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<!-- SB Admin CSS - Include with every page -->
<link href="css/sb-admin.css" rel="stylesheet">
<!-- css moderana-->
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<!-- Theme skin moderana-->
<link href="skins/default.css" rel="stylesheet" />

<?php
/*    mysql_connect('localhost','root','');
    mysql_select_db('latih');
    $nim = "305389";
    $querys = mysql_query("select * from ils_angket where nim = '".$nim."'");
    $datas = mysql_fetch_array($querys);*/
?>

</head>
<body>
    
    <!-- <div id="container" style="min-width: 310px; max-width: auto; height: 400px; margin: 0 auto"></div> -->

        <div id="wrapper">
       <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><span>Khafid</span>project</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="dashboard.php">Home</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
            
        <div id="page-wrapper">
            <div class="col-lg-6" style="padding-left: 0px">
                <ul class="nav nav-tabs">
                    <li><a href="lpmtables.php">Metacognitive</a>
                    </li>
                    <li><a href="lpstables.php">Learning Style</a>
                    </li>
                    <li class="active"><a href="#">Learning Path</a>
                    </li>
                </ul>
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Learning Path
                        </div>

                        <!-- /.panel-heading -->
<!--                         <div class="panel-body">
                        </br>
                            <div class="col-lg-6">
                                <input class="form-control" placeholder="Matakuliah" name="Matakuliah" type="text" autofocus>
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control" placeholder="SKS" name="SKS" type="text" autofocus>
                            </div>
                        </div> -->

                        <div class="panel-body">
                            <div class="panel-body">    
                            <div class="table-responsive ">
                                <table class="table table-striped">
                                    <thead>
                                        <tr style = "background-color: #428bca; color:white;">
                                            <th>Tahapan</th>
                                            <th>Pembelajaran</th>
                                            <th>Waktu</th>
                                            <th>Metode</th>
                                            <th>Sifat</th>
                                            <th>E-Learning</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php    
                                        mysql_connect('localhost','khafid_khafid','khafid');
                                        mysql_select_db('khafid_tesis');

                                        /*$querya = mysql_query("select * from lp_a where Variabel = '".$valua[$a]."'");*/

                                        $meta = "KM";

                                        $valu[0] = "Kegiatan Awal";
                                        $valu[1] = "Kegiatan Inti";
                                        $valu[2] = "Kegiatan Akhir";

                                        $jam[0] = 0.17;
                                        $jam[1] = 0.50;
                                        $jam[2] = 0.33;

                                        $co = $ca = 0;

                                        for ($b=0; $b <8 ; $b++) { 
                                            $ls[$b] = $_SESSION['jenis_ls'.$b.''];
                                        }
                                        

                                        for ($a=0; $a <3 ; $a++) { 
                                            $query = mysql_query("select * from lp where Jenis = '".$valu[$a]."'");
                                                echo '
                                                    <tr>
                                                        <td><b>'.$valu[$a].'</b></td>
                                                        <td></td>
                                                        <td>'.$jam[$a].'</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                ';

                                                while ($data = mysql_fetch_array($query)) {

                                                     echo '
                                                            <tr>
                                                                <td>'.$data['Tahapan'].'</td>
                                                                <td>'.$data['Pem_Dosen'].'</td>
                                                                <td></td>
                                                                <td>';

                                                        echo ''.$ls[0].' '.$ls[1].' '.$ls[2].' '.$ls[3].' '.$ls[4].' '.$ls[5].' '.$ls[6].' '.$ls[7].'';

                                                        echo    '</td>
                                                                <td>';

                                                                    if ($co == 1) {
                                                                        if ($meta == "KM") {
                                                                            echo "Prioritas";
                                                                        }
                                                                    } elseif ($co == 2) {
                                                                        if ($meta == "KM") {
                                                                            echo "Prioritas";
                                                                        }
                                                                    } elseif ($co == 3) {
                                                                        if ($meta == "KM") {
                                                                            echo "Prioritas";
                                                                        }
                                                                    } elseif ($co == 4) {
                                                                        if ($meta == "KM" or $meta == "KM") {
                                                                            echo "Prioritas";
                                                                        }
                                                                    } elseif ($co == 5) {
                                                                        if ($meta == "KM" or $meta == "KM") {
                                                                            echo "Prioritas";
                                                                        }
                                                                    } elseif ($co == 6) {
                                                                        if ($meta == "RM") {
                                                                            echo "Prioritas";
                                                                        }
                                                                    } elseif ($co == 7) {
                                                                        if ($meta == "RM") {
                                                                            echo "Prioritas";
                                                                        }
                                                                    } elseif ($co == 8) {
                                                                        if ($meta == "KM" or $meta == "KM") {
                                                                            echo "Prioritas";
                                                                        }
                                                                    } 

                                                        echo   '</td>
                                                                <td>'.$data['eLearning'].'</td>
                                                            </tr>
                                                        ';
                                                    $co++;
                                                }
                                           
                                        }
                                       
                                       
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        
                        </div>
                        <!-- /.panel-body -->

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

    <script src="jsg/highcharts.js"></script>
    <script src="jsg/modules/exporting.js"></script>

</body>
</html>
