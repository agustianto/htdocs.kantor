<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:index.php");
}
elseif(isset($_SESSION['user'])){
    $nim = $_SESSION['user'];
    mysql_connect('localhost','root','');
    mysql_select_db('latih');
    $query2 = mysql_query("select * from ils_angket where nim = '".$_SESSION['user']."'");
        $a2 = mysql_fetch_array($query2); 
        $s2 = $a2['nim'];
        if ($s2!="") {
            header("location:lpmtables.php");
        }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adaptive Learning</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Laman Isian Mahasiswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Angket <i>Learning Style</i>
                             
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <div class="well">
                                <h4>Keterangan Angket</h4>
                                <p>Angket ini disampaikan kepada mahasiswa JTETI UGM, dengan tujuan untuk pengembangan ilmu pengetahuan. Partisipasi dari Saudara sangat penting pada penelitian ini, melalui jawaban dari Saudara, berarti Saudara telah berpartisipasi dalam pengembangan ilmu pengetahuan. Oleh karena itu mengingat begitu besarnya peran serta Saudara dalam ketercapaian tujuan dari penelitian ini, kami harapkan Saudara berkenan meluangkan waktu untuk membaca tiap butir pertanyaan dan menjawabnya dengan lengkap dan teliti.</p>
                                <p>Angket ini berisi butir-butir pertanyaan yang berkenaan dengan proses pembelajaran yang Saudara terima di kelas. Dalam pengisian angket, Saudara dimohon untuk memberikan tanda centang (√) pada kolom yang sudah disediakan di samping setiap butir pertayaan. Angket ini sama sekali tidak ada hubungannya dengan perolehan nilai Saudara, sehingga diharapkan Saudara mengisi angket sesuai dengan keadaan yang sebenarnya.</p>
                                <p>Dalam pengisian angket saudara diminta untuk memasukan NIM (6 digit) untuk auntetifikasi</p>
                            </div>

<!-- Awal Machine -->

            <?php if(isset($_POST['Submit'])){

                for ($w=0; $w <4 ; $w++) { 
                    $rsl[$w] = 0;
                    $rsl2[$w] = 0;
                    $rsl3[$w] = 0;
                    $vrsl[$w] = 0;
                }

                for ($y=2; $y < 46; $y++) { 
                    $perta[$y] = $_POST['oril'.$y.''];
                }
                
                /*
                Sensing-Intuitive   38, 6, 18, 14, 2, 10, 34, 26, 22, 42, 30    : 39, 7, 19, 15, 3, 11, 35, 27, 23, 43, 31
                Visual-Verbal       7, 31, 23, 11, 15, 27, 19, 3, 35, 43, 39    : 8, 31, 24, 12, 16, 28, 20, 4, 36, 44, 40
                Sequential-Global   20, 36, 44, 8, 12, 32, 24, 28, 4, 16, 40    : 21, 37, 45, 9, 13, 33, 25, 29, 5, 17, 41
                Active-Reflective   25, 1, 29, 5, 17, 37, 13, 9, 21, 33, 41     : 26, 2, 30, 6, 18, 38, 14, 10, 22, 34, 42
                */

                $rsl[0] = $perta[39] + $perta[7] + $perta[19] + $perta[15] + $perta[3] + $perta[11] + $perta[35] + $perta[27] + $perta[23] + $perta[43] + $perta[31];
                $rsl[1] = $perta[8] + $perta[31] + $perta[24] + $perta[12] + $perta[16] + $perta[28] + $perta[20] + $perta[4] + $perta[36] + $perta[44] + $perta[40];
                $rsl[2] = $perta[21] + $perta[37] + $perta[45] + $perta[9] + $perta[13] + $perta[33] + $perta[25] + $perta[29] + $perta[5] + $perta[17] + $perta[41];
                $rsl[3] = $perta[26] + $perta[2] + $perta[30] + $perta[6] + $perta[18] + $perta[38] + $perta[14] + $perta[10] + $perta[22] + $perta[34] + $perta[42];
                
                $rsl2[0] = (11-$rsl[0]);
                $rsl2[1] = (11-$rsl[1]);
                $rsl2[2] = (11-$rsl[2]);
                $rsl2[3] = (11-$rsl[3]);

                for ($i=0; $i <4 ; $i++) { 
                    if ($rsl[$i]>$rsl2[$i]){
                        $rsl3[$i] = $rsl[$i]-$rsl2[$i];
                        $vrsl[$i] = ''.$rsl3[$i].'A';
                    }
                    elseif ($rsl[$i]<$rsl2[$i]){
                        $rsl3[$i] = $rsl2[$i]-$rsl[$i];
                        $vrsl[$i] = ''.$rsl3[$i].'B';
                    }
                }

                $query = mysql_query("select * from ils_angket where nim = '".$nim."'");
                $aa = mysql_fetch_array($query); 
                $ss = $aa['nim'];
                if ($ss == '') {
                mysql_query("INSERT INTO `ils_angket`(`nim`,`ls1`,`ls2`,`ls3`,`ls4`,`ls5`,`ls6`,`ls7`,`ls8`,`ls9`,`ls10`,`ls11`,`ls12`,`ls13`,`ls14`,`ls15`,`ls16`,`ls17`,`ls18`,`ls19`,`ls20`,`ls21`,`ls22`,`ls23`,`ls24`,`ls25`,`ls26`,`ls27`,`ls28`,`ls29`,`ls30`,`ls31`,`ls32`,`ls33`,`ls34`,`ls35`,`ls36`,`ls37`,`ls38`,`ls39`,`ls40`,`ls41`,`ls42`,`ls43`,`ls44`,`tls1`,`tls2`,`tls3`,`tls4`,`rsl1`,`rsl2`,`rsl3`,`rsl4`) 
                    VALUES ('$nim','$perta[2]','$perta[3]','$perta[4]','$perta[5]','$perta[6]','$perta[7]','$perta[8]','$perta[9]','$perta[10]','$perta[11]','$perta[12]','$perta[13]','$perta[14]','$perta[15]','$perta[16]','$perta[17]','$perta[18]','$perta[19]','$perta[20]','$perta[21]','$perta[22]','$perta[23]','$perta[24]','$perta[25]','$perta[26]','$perta[27]','$perta[28]','$perta[29]','$perta[30]','$perta[31]','$perta[32]','$perta[33]','$perta[34]','$perta[35]','$perta[36]','$perta[37]','$perta[38]','$perta[39]','$perta[40]','$perta[41]','$perta[42]','$perta[43]','$perta[44]','$perta[45]',' $rsl[0]',' $rsl[1]',' $rsl[2]',' $rsl[3]',' $vrsl[0]',' $vrsl[1]',' $vrsl[2]',' $vrsl[3]')");
                header("location:dashboard.php");
                } elseif ($query != '') {
                    echo '
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Anda sudah pernah mengisi angket. Terimakasih. :)
                        </div>';
                }   
            }

            ?>

<!-- Batas Machine -->

                            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                                <!-- <input class="form-control" placeholder="NIM" name="nim" type="text" pattern="[0-9][0-9][0-9][0-9][0-9][0-9]" autofocus required> -->
                                </br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Pertanyaan</th>
                                            <!-- <th width="250px">Keterangan</th -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            mysql_connect('localhost','root','');
                                            mysql_select_db('latih');
                                            $query = mysql_query('select * from ils_table');
                                            $no = 1;
                                            while ($data=mysql_fetch_array($query)) {
                                                echo "<tr>";
                                                echo "<td>".$no++.'</td>';
                                                echo "<td><b>".$data['pertanyaan'].'</b></td>';
                                                echo "</tr>";
                                                
                                                echo "<tr>";
                                                echo "<td></td>";
                                                echo "<td>";
                                                    echo '<input type="radio" name="oril'.$no.'" value="1" required checked> '.$data['opti1'].'';
                                                echo "</td>";                                
                                                echo "</tr>";

                                                echo "<tr>";
                                                echo "<td></td>";
                                                echo "<td>";
                                                    echo '<input type="radio" name="oril'.$no.'" value="0" required /*checked*/> '.$data['opti2'].'';
                                                echo "</td>";
                                                echo "</tr>";
                                                
                                            }
                                        ?>
                                    </tbody>

                                </table>
                                <!-- <button type="button" name="submitangket" class="btn btn-primary btn-lg btn-block">Simpan</button> -->
                                <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                            </div>
                        </form>
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
    <!-- <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script> -->

</body>
</html>
