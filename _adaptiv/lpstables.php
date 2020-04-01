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
    mysql_connect('localhost','root','');
    mysql_select_db('latih');
    $nim = $_SESSION['user'];
    $querys = mysql_query("select * from ils_angket where nim = '".$nim."'");
    $datas = mysql_fetch_array($querys);

    for ($e=0; $e <8 ; $e++) {
        $c[$e] = 0;
        $d[$e] = 0;
    }

    $f = 0;
    $g = 1;

    /*3B,5A,3A,1A*/

    for ($h=1; $h <5 ; $h++) { 
        if ($datas['rsl'.$h.''] == "1A" OR $datas['rsl'.$h.''] == " 1A") {
            $c[$f] = 1;
            $d[$f] = 1;
        } elseif ($datas['rsl'.$h.''] == "2A" OR $datas['rsl'.$h.''] == " 2A") {
            $c[$f] = 1;
            $d[$f] = 2;
        } elseif ($datas['rsl'.$h.''] == "3A" OR $datas['rsl'.$h.''] == " 3A") {
            $c[$f] = 1;
            $d[$f] = 3;
        } elseif ($datas['rsl'.$h.''] == "5A" OR $datas['rsl'.$h.''] == " 5A") {
            $c[$f] = 1;
            $d[$f] = 5;
        } elseif ($datas['rsl'.$h.''] == "7A" OR $datas['rsl'.$h.''] == " 7A") {
            $c[$f] = 1;
            $d[$f] = 7;
        } elseif ($datas['rsl'.$h.''] == "9A" OR $datas['rsl'.$h.''] == " 9A") {
            $c[$f] = 1;
            $d[$f] = 9;
        } elseif ($datas['rsl'.$h.''] == "11A" OR $datas['rsl'.$h.''] == " 11A") {
            $c[$f] = 1;
            $d[$f] = 11;
        } elseif ($datas['rsl'.$h.''] == "1B" OR $datas['rsl'.$h.''] == " 1B") {
            $c[$g] = 1;
            $d[$g] = -1;
        } elseif ($datas['rsl'.$h.''] == "2B" OR $datas['rsl'.$h.''] == " 2B") {
            $c[$g] = 1;
            $d[$g] = -2;
        } elseif ($datas['rsl'.$h.''] == "3B" OR $datas['rsl'.$h.''] == " 3B") {
            $c[$g] = 1;
            $d[$g] = -3;
        } elseif ($datas['rsl'.$h.''] == "5B" OR $datas['rsl'.$h.''] == " 5B") {
            $c[$g] = 1;
            $d[$g] = -5;
        } elseif ($datas['rsl'.$h.''] == "7B" OR $datas['rsl'.$h.''] == " 7B") {
            $c[$g] = 1;
            $d[$g] = -7;
        } elseif ($datas['rsl'.$h.''] == "9B" OR $datas['rsl'.$h.''] == " 9B") {
            $c[$g] = 1;
            $d[$g] = -9;
        } elseif ($datas['rsl'.$h.''] == "11B" OR $datas['rsl'.$h.''] == " 11B") {
            $c[$g] = 1;
            $d[$g] = -11;
        }

        $f=$f+2;
        $g=$g+2;

    }

?>

	<script type="text/javascript" src="jsg/jquery.min.js"></script>
	<script type="text/javascript">
        $(function () {
            var chart,
                categories = ['Reflective', 'Global', 'Verbal', 'Intuitive'];
                categories2 = ['Active', 'Sequential', 'Visual', 'Sensing'];
            $(document).ready(function() {
                $('#container').highcharts({
                        chart: {
                            type: 'bar'
                        },
                        title: {
                            text: 'Learning Style'
                        },
                        subtitle: {
                            text: ''
                        },
                        xAxis: [{
                            categories: categories,
                            reversed: false,
                            labels: {
                                step: 1
                            }
                        }, { // mirror axis on right side
                            opposite: true,
                            reversed: false,
                            categories: categories2,
                            linkedTo: 0,
                            labels: {
                                step: 1
                            }
                        }],
                        yAxis: {
                            title: {
                                text: null
                            },
                            labels: {
                                formatter: function(){
                                    return (Math.abs(this.value) / 1);
                                }
                            },
                            min: -11,
                            max: 11
                        },
                
                        plotOptions: {
                            series: {
                                stacking: 'normal'
                            }
                        },
                
                        tooltip: {
                            formatter: function(){
                                return '<b>'+ this.series.name +'</b> '+'Nilai: '+ Highcharts.numberFormat(Math.abs(this.point.y), 0);
                            }
                        },
                
                        series: [{
                            name: 'Kiri',
                            data: [<?php echo $d[7]; ?>, <?php echo $d[5]; ?>, <?php echo $d[3]; ?>, <?php echo $d[1]; ?>]
                        }, {
                            name: 'Kanan',
                            data: [<?php echo $d[6]; ?>, <?php echo $d[4]; ?>, <?php echo $d[2]; ?>, <?php echo $d[0]; ?>]
                        }]
                    });
                });
                
            });
	</script>
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
                    <li class="active"><a href="#">Learning Style</a>
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
                            Data Learning Style
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="container" style="min-width: 310px; max-width: auto; height: 400px; margin: 0 auto"></div>
                            </br>
                            <h3 class="text-center text-primary">Penjelasan Hasil <i>Learning Style</i></h3>
                            <p class="text-center">Nilai 1-3 diartikan saudara memiliki kondisi seimbang pada dua dimensi yang diukur. Nilai 5 atau 7 diartikan saudara memiliki kondisi yang cukup cenderung kepada salah satu dimensi. Sedangkan nilai 9 atau 11 diartikan saudara memiliki kecenderungan yang besar kepada salah satu dimensi.</p>
                            </br>
                            <div class="panel-group" id="accordion">
                            
                                <?php
                                    mysql_connect('localhost','root','');
                                    mysql_select_db('latih');

                                    $datah[0] = "Sensing";
                                    $datah[1] = "Intuitive";
                                    $datah[2] = "Visual";
                                    $datah[3] = "Verbal";
                                    $datah[4] = "Sequential";
                                    $datah[5] = "Global";
                                    $datah[6] = "Active";
                                    $datah[7] = "Reflective";

                                    for ($a=0; $a <8 ; $a++) {
                                        $_SESSION['jenis_ls'.$a.'']=""; 
                                        $query[$a] = mysql_query('select * from lp_ls where variable = "'.$datah[$a].'" AND siswa != ""');
                                    }
                                                                                                        
                                    for ($b=0; $b<8; $b++) {
                                        if ($c[$b] == 1) {

                                            $_SESSION['jenis_ls'.$b.'']=$datah[$b];

                                                echo   '
                                                        <div class="panel panel-primary" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$b.'">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    '.$datah[$b].'
                                                                </h4>
                                                            </div>
                                                            <div id="collapse'.$b.'" class="panel-collapse collapse">        
                                                            <div class="panel-body">
                                                        ';
                                                while ($data[$b] = mysql_fetch_array($query[$b])) {
                                                        echo 'O  '.$data[$b]['siswa'].'<br>';
                                                        }
                                                echo    '   </div>
                                                            </div>
                                                        </div>
                                                        ';
                                            }    
                                        
                                    }    
                                                
                                ?>
                        
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
