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
                    <li class="active"><a href="#">Metacognitive</a>
                    </li>
                    <li><a href="lpstables.php">Learning Style</a>
                    </li>
                    <li><a href="lp.php">Learning Path</a>
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

                        <?php
                            mysql_connect('localhost','root','');
                            mysql_select_db('latih');
                            $nim = $_SESSION['user'];
                            $querys = mysql_query("select * from meta_angket where nim = '".$nim."'");
                            $datas = mysql_fetch_array($querys); 

                            if ($datas['mhasil'] == "RM") {
                                $jeniss = "Regulation of Metacognitive";
                            } elseif ($datas['mhasil'] == "KM") {
                                 $jeniss = "Knowledge of Metacognitive";
                            } else {
                                 $jeniss = "Salah";
                            }
                        ?>

                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="panel-heading" class="panel panel-primary">
                                <h2 class="text-center text-primary">
                                    <?php echo $jeniss; ?>   
                                </h2>
                                </br>
                                <p class="text-center">Pembagian jenis metacognitive dibagi menjadi dua bagian, bagian pertama adalah Knowledge of Metacognitive, sendangkan bagian kedua adalah Regulation of Metacognitive. <b>Berikut adalah karakter metacognitive anda:</b></p>
                            </div> 

                            <?php
                            if ($datas['mhasil'] == "KM") {
                            echo '
                                <div class="panel-heading" class="panel panel-primary">
                                    <h4 class="panel-title text-right">
                                        Knowledge of Metacognitive                
                                    </h4>
                                </div> 
                                <div class="panel-group" id="accordion">
                               '; 
                           
                                mysql_connect('localhost','root','');
                                mysql_select_db('latih');
                                $query = mysql_query('select * from lp_meta where kelas = "KM"');
                                $no = 1;
                                while ($data=mysql_fetch_array($query)) {
                                $no++;                    
                                echo   '
                                        <div class="panel panel-primary" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$no.'">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    '.$data['variable'].'
                                                </h4>
                                            </div>
                                            <div id="collapse'.$no.'" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    '.$data['siswa'].'
                                                </div>
                                            </div>
                                        </div>
                                        ';             
                                }
                            echo '
                                </div>
                                ';
                            }
                            ?>
                        
                            

                            <?php
                            if ($datas['mhasil'] == "RM") {
                            echo '
                                <div class="panel-heading" class="panel panel-primary">
                                    <h4 class="panel-title text-right">
                                        Regulation of Metacognitive                
                                    </h4>
                                </div> 
                                <div class="panel-group" id="accordion1">
                               '; 

                                mysql_connect('localhost','root','');
                                mysql_select_db('latih');
                                $query = mysql_query('select * from lp_meta where kelas = "RM"');
                                $no = 1;
                                while ($data=mysql_fetch_array($query)) {
                                $no++;                    
                                echo   '
                                        <div class="panel panel-primary" data-toggle="collapse" data-parent="#accordion1" href="#collapse1'.$no.'">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    '.$data['variable'].'
                                                </h4>
                                            </div>
                                            <div id="collapse1'.$no.'" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    '.$data['guru'].'
                                                </div>
                                            </div>
                                        </div>
                                        ';             
                                }
                            echo '
                                </div>
                                ';
                            }
                            ?>
                        
                            


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
