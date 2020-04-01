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
                            Data Metacognitive
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <p>Latihan LP Learning Style </p>
<!------------------------------------------------------------------------------------------------>
                        <frame>

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
                                                        text: 'Population pyramid for Germany, midyear 2010'
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
                                                        min: -4,
                                                        max: 4
                                                    },
                                            
                                                    plotOptions: {
                                                        series: {
                                                            stacking: 'normal'
                                                        }
                                                    },
                                            
                                                    tooltip: {
                                                        formatter: function(){
                                                            return '<b>'+ this.series.name +', age '+ this.point.category +'</b><br/>'+
                                                                'Population: '+ Highcharts.numberFormat(Math.abs(this.point.y), 0);
                                                        }
                                                    },
                                            
                                                    series: [{
                                                        name: 'Kiri',
                                                        data: [-1, -2, -2, -3]
                                                    }, {
                                                        name: 'Kanan',
                                                        data: [1, 1, 2, 2]
                                                    }]
                                                });
                                            });
                                            
                                        });
                                </script>
                                </head>

                                <script src="jsg/highcharts.js"></script>
                                <script src="jsg/modules/exporting.js"></script>

                                <div id="container" style="min-width: 310px; max-width: auto; height: 400px; margin: 0 auto"></div>

                        <frame>
<!------------------------------------------------------------------------------------------------>
                            
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
