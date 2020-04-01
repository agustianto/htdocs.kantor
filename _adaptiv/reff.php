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
                        <a class="navbar-brand" href="dashboard.html"><span>Khafid</span>project</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="dashboard.php">Home</a></li>
<!--                             <li><a href="portfolio.html">Produk</a></li>
                            <li><a href="contact.html">Contact</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <div id="page-wrapper">

            <!-- Clopase Table -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Pustaka
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                        <div class="panel-group" id="accordion">
                        
                         <?php
                            mysql_connect('localhost','root','');
                            mysql_select_db('latih');
                            $query = mysql_query('select * from reff');
                            $no = 1;
                            while ($data=mysql_fetch_array($query)) {
                            $no++;                    
                            echo   '<p>
                                    '.$data['con_reff'].'
                                    </p>';             
                            }
                        ?>
                    
                        </div>
                        </div>        
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- Clopase Table -->    

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Panels and Wells -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Panels and Wells - Use for reference -->

</body>

</html>
