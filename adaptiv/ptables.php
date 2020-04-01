<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
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
</head>

<body>
    
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
                            <li class="active"><a href="dashboard.php">Home</a></li>
                            <li class="active"><a href="index.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
            
        <div id="page-wrapper">
            <!-- <div class="navbar navbar-default navbar-static-top">
                <div class="navbar-collapse collapse">
                    <!-/- <h4 class="page-header">Materi Pelajaran</h4> -/->
                    <ul class="nav navbar-nav">
                            <li class="active"><a href="#"><h5>Materi</h5></a></li>
                            <li><a href="#"><h5>Pengayaan</h5></a></li>
                            <li><a href="#"><h5>Latihan</h5></a></li>
                            <li><a href="#"><h5>Tugas</h5></a></li>
                    </ul>
                </div>
            </div> -->

            <div class="col-lg-6" style="padding-left: 0px">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Metacognitive</a>
                    </li>
                    <li><a href="#">Learning Style</a>
                    </li>
                    <li><a href="#">Learning Path</a>
                    </li>
                    </ul>
            </div>


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Metacognitive
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                                        <tr>
                                            <th width="100px">NIM</th>
                                            <th>rsm1</th>
                                            <th>rsm2</th>
                                            <th>rsm3</th>
                                            <th>rsm4</th>
                                            <th>rsm5</th>
                                            <th>rsm6</th>
                                            <th>rsm7</th>
                                            <th>rsm8</th>
                                            <th width="200px">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            mysql_connect('localhost','root','');
                                            mysql_select_db('latih');
                                            $query = mysql_query('select * from dangket');
                                            while ($data=mysql_fetch_array($query)) {
                                                
                                                if ($data['mhasil'] == "RM")
                                                    $jenis = "Regulation of Metacognitive";
                                                elseif ($data['mhasil'] == "KM")
                                                    $jenis = "Knowledge of Metacognitive";

                                                echo "<tr>";
                                                echo "<td>".$data['nim'].'</td>';
                                                echo "<td>".$data['rsm1'].'</td>';
                                                echo "<td>".$data['rsm2'].'</td>';
                                                echo "<td>".$data['rsm3'].'</td>';
                                                echo "<td>".$data['rsm4'].'</td>';
                                                echo "<td>".$data['rsm5'].'</td>';
                                                echo "<td>".$data['rsm6'].'</td>';
                                                echo "<td>".$data['rsm7'].'</td>';
                                                echo "<td>".$data['rsm8'].'</td>';
                                                echo "<td>".$jenis.'</td>';
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
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

</body>
</html>
