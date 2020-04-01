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
                            Angket <i>Metacognitive</i>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <div class="well">
                                <h4>Keterangan Angket</h4>
                                <p>Angket ini disampaikan kepada mahasiswa JTETI UGM, dengan tujuan untuk pengembangan ilmu pengetahuan. Partisipasi dari Saudara sangat penting pada penelitian ini, melalui jawaban dari Saudara, berarti Saudara telah berpartisipasi dalam pengembangan ilmu pengetahuan. Oleh karena itu mengingat begitu besarnya peran serta Saudara dalam ketercapaian tujuan dari penelitian ini, kami harapkan Saudara berkenan meluangkan waktu untuk membaca tiap butir pertanyaan dan menjawabnya dengan lengkap dan teliti.</p>
                                <p>Angket ini berisi butir-butir pertanyaan yang berkenaan dengan proses pembelajaran yang Saudara terima di kelas. Dalam pengisian angket, Saudara dimohon untuk memberikan tanda centang (√) pada kolom yang sudah disediakan di samping setiap butir pertayaan. Angket ini sama sekali tidak ada hubungannya dengan perolehan nilai Saudara, sehingga diharapkan Saudara mengisi angket sesuai dengan keadaan yang sebenarnya.</p>
                                <p>Dalam pengisian angket saudara diminta untuk memasukan NIM (6 digit) untuk auntetifikasi</p>
                                <p><b>Keterangan: SL (Selalu), SS (Sering), KD (Kadang-Kadang), JR (Jarang), dan TP (Tidak Pernah).</b></p>
                            </div>

<!-- Awal Machine -->

<?php if(isset($_POST['Submit'])){
    mysql_connect('localhost','khafid_khafid','khafid');
    mysql_select_db('khafid_tesis');

    /*$nim = $_POST['nim'];*/
    session_start();
    $nim = $_COOKIE[$_SESSION['user']];

$query = mysql_query("select * from test where nim = '".$nim."'");
    $aa = mysql_fetch_array($query); 
    $ss = $aa['nim'];
    if ($nim != $ss) {

    $query = mysql_query("select * from dat_test where nim = '".$nim."'");
    while ($datau=mysql_fetch_array($query)) {

    /*
    SM1: 5,10,12,16,17,20,32,46 (8)         :6,11,13,17,18,21,33,47
    SM2: 3,14,27,33 (4)                     :4,15,28,34
    SM3: 15,18,26,29,35 (5)                 :16,19,27,30,36
    SM4: 4,6,8,22,23,42,45 (7)              :5,7,9,23,24,43,46
    SM5: 9,13,30,31,37,39,41,43,47,48 (10)  :10,14,31,32,38,40,42,44,48,49
    SM6: 1,2,11,21,28,34,49 (7)             :2,3,12,22,29,35,50
    SM7: 25,40,44,51,52 (5)                 :26,41,45,52,53
    SM8: 7,19,24,36,38,50 (5)               :8,20,25,36,39,51
    */

    $vsm[0] = $datau['m5']+$datau['m10']+$datau['m12']+$datau['m16']+$datau['m17']+$datau['20']
    
    }

    for ($v=0; $v <82 ; $v++) { 
        $pr[$v] = 0;
    }

    $query = mysql_query('select * from test');
    while ($data=mysql_fetch_array($query)) {

        if ($data['mhasil'] == 'RM')
            $pr[80]++;
        elseif ($data['mhasil'] == 'KM')
            $pr[81]++;

        if ($data['rsm1'] == '5' && $data['mhasil'] == 'RM')
            $pr[0]++;
        elseif ($data['rsm1'] == '4' && $data['mhasil'] == 'RM')
            $pr[1]++;
        elseif ($data['rsm1'] == '3' && $data['mhasil'] == 'RM')
            $pr[2]++;
        elseif ($data['rsm1'] == '2' && $data['mhasil'] == 'RM')
            $pr[3]++;
        elseif ($data['rsm1'] == '1' && $data['mhasil'] == 'RM')
            $pr[4]++;

        if ($data['rsm1'] == '5' && $data['mhasil'] == 'KM')
            $pr[5]++;
        elseif ($data['rsm1'] == '4' && $data['mhasil'] == 'KM')
            $pr[6]++;
        elseif ($data['rsm1'] == '3' && $data['mhasil'] == 'KM')
            $pr[7]++;
        elseif ($data['rsm1'] == '2' && $data['mhasil'] == 'KM')
            $pr[8]++;
        elseif ($data['rsm1'] == '1' && $data['mhasil'] == 'KM')
            $pr[9]++;

        //======================================================//

        if ($data['rsm2'] == '5' && $data['mhasil'] == 'RM')
            $pr[10]++;
        elseif ($data['rsm2'] == '4' && $data['mhasil'] == 'RM')
            $pr[11]++;
        elseif ($data['rsm2'] == '3' && $data['mhasil'] == 'RM')
            $pr[12]++;
        elseif ($data['rsm2'] == '2' && $data['mhasil'] == 'RM')
            $pr[13]++;
        elseif ($data['rsm2'] == '1' && $data['mhasil'] == 'RM')
            $pr[14]++;

         if ($data['rsm2'] == '5' && $data['mhasil'] == 'KM')
            $pr[15]++;
        elseif ($data['rsm2'] == '4' && $data['mhasil'] == 'KM')
            $pr[16]++;
        elseif ($data['rsm2'] == '3' && $data['mhasil'] == 'KM')
            $pr[17]++;
        elseif ($data['rsm2'] == '2' && $data['mhasil'] == 'KM')
            $pr[18]++;
        elseif ($data['rsm2'] == '1' && $data['mhasil'] == 'KM')
            $pr[19]++;

         //======================================================//

        if ($data['rsm3'] == '5' && $data['mhasil'] == 'RM')
            $pr[20]++;
        elseif ($data['rsm3'] == '4' && $data['mhasil'] == 'RM')
            $pr[21]++;
        elseif ($data['rsm3'] == '3' && $data['mhasil'] == 'RM')
            $pr[22]++;
        elseif ($data['rsm3'] == '2' && $data['mhasil'] == 'RM')
            $pr[23]++;
        elseif ($data['rsm3'] == '1' && $data['mhasil'] == 'RM')
            $pr[24]++;

        if ($data['rsm3'] == '5' && $data['mhasil'] == 'KM')
            $pr[25]++;
        elseif ($data['rsm3'] == '4' && $data['mhasil'] == 'KM')
            $pr[26]++;
        elseif ($data['rsm3'] == '3' && $data['mhasil'] == 'KM')
            $pr[27]++;
        elseif ($data['rsm3'] == '2' && $data['mhasil'] == 'KM')
            $pr[28]++;
        elseif ($data['rsm3'] == '1' && $data['mhasil'] == 'KM')
            $pr[29]++;

        //======================================================//

        if ($data['rsm4'] == '5' && $data['mhasil'] == 'RM')
            $pr[30]++;
        elseif ($data['rsm4'] == '4' && $data['mhasil'] == 'RM')
            $pr[31]++;
        elseif ($data['rsm4'] == '3' && $data['mhasil'] == 'RM')
            $pr[32]++;
        elseif ($data['rsm4'] == '2' && $data['mhasil'] == 'RM')
            $pr[33]++;
        elseif ($data['rsm4'] == '1' && $data['mhasil'] == 'RM')
            $pr[34]++;

        if ($data['rsm4'] == '5' && $data['mhasil'] == 'KM')
            $pr[35]++;
        elseif ($data['rsm4'] == '4' && $data['mhasil'] == 'KM')
            $pr[36]++;
        elseif ($data['rsm4'] == '3' && $data['mhasil'] == 'KM')
            $pr[37]++;
        elseif ($data['rsm4'] == '2' && $data['mhasil'] == 'KM')
            $pr[38]++;
        elseif ($data['rsm4'] == '1' && $data['mhasil'] == 'KM')
            $pr[39]++;

        //======================================================//

        if ($data['rsm5'] == '5' && $data['mhasil'] == 'RM')
            $pr[40]++;
        elseif ($data['rsm5'] == '4' && $data['mhasil'] == 'RM')
            $pr[41]++;
        elseif ($data['rsm5'] == '3' && $data['mhasil'] == 'RM')
            $pr[42]++;
        elseif ($data['rsm5'] == '2' && $data['mhasil'] == 'RM')
            $pr[43]++;
        elseif ($data['rsm5'] == '1' && $data['mhasil'] == 'RM')
            $pr[44]++;

        if ($data['rsm5'] == '5' && $data['mhasil'] == 'KM')
            $pr[45]++;
        elseif ($data['rsm5'] == '4' && $data['mhasil'] == 'KM')
            $pr[46]++;
        elseif ($data['rsm5'] == '3' && $data['mhasil'] == 'KM')
            $pr[47]++;
        elseif ($data['rsm5'] == '2' && $data['mhasil'] == 'KM')
            $pr[48]++;
        elseif ($data['rsm5'] == '1' && $data['mhasil'] == 'KM')
            $pr[49]++;

        //======================================================//

        if ($data['rsm6'] == '5' && $data['mhasil'] == 'RM')
            $pr[50]++;
        elseif ($data['rsm6'] == '4' && $data['mhasil'] == 'RM')
            $pr[51]++;
        elseif ($data['rsm6'] == '3' && $data['mhasil'] == 'RM')
            $pr[52]++;
        elseif ($data['rsm6'] == '2' && $data['mhasil'] == 'RM')
            $pr[53]++;
        elseif ($data['rsm6'] == '1' && $data['mhasil'] == 'RM')
            $pr[54]++;

        if ($data['rsm6'] == '5' && $data['mhasil'] == 'KM')
            $pr[55]++;
        elseif ($data['rsm6'] == '4' && $data['mhasil'] == 'KM')
            $pr[56]++;
        elseif ($data['rsm6'] == '3' && $data['mhasil'] == 'KM')
            $pr[57]++;
        elseif ($data['rsm6'] == '2' && $data['mhasil'] == 'KM')
            $pr[58]++;
        elseif ($data['rsm6'] == '1' && $data['mhasil'] == 'KM')
            $pr[59]++;

        //======================================================//

        if ($data['rsm7'] == '5' && $data['mhasil'] == 'RM')
            $pr[60]++;
        elseif ($data['rsm7'] == '4' && $data['mhasil'] == 'RM')
            $pr[61]++;
        elseif ($data['rsm7'] == '3' && $data['mhasil'] == 'RM')
            $pr[62]++;
        elseif ($data['rsm7'] == '2' && $data['mhasil'] == 'RM')
            $pr[63]++;
        elseif ($data['rsm7'] == '1' && $data['mhasil'] == 'RM')
            $pr[64]++;

        if ($data['rsm7'] == '5' && $data['mhasil'] == 'KM')
            $pr[65]++;
        elseif ($data['rsm7'] == '4' && $data['mhasil'] == 'KM')
            $pr[66]++;
        elseif ($data['rsm7'] == '3' && $data['mhasil'] == 'KM')
            $pr[67]++;
        elseif ($data['rsm7'] == '2' && $data['mhasil'] == 'KM')
            $pr[68]++;
        elseif ($data['rsm7'] == '1' && $data['mhasil'] == 'KM')
            $pr[69]++;

        //======================================================//

        if ($data['rsm8'] == '5' && $data['mhasil'] == 'RM')
            $pr[70]++;
        elseif ($data['rsm8'] == '4' && $data['mhasil'] == 'RM')
            $pr[71]++;
        elseif ($data['rsm8'] == '3' && $data['mhasil'] == 'RM')
            $pr[72]++;
        elseif ($data['rsm8'] == '2' && $data['mhasil'] == 'RM')
            $pr[73]++;
        elseif ($data['rsm8'] == '1' && $data['mhasil'] == 'RM')
            $pr[74]++;

        if ($data['rsm8'] == '5' && $data['mhasil'] == 'KM')
            $pr[75]++;
        elseif ($data['rsm8'] == '4' && $data['mhasil'] == 'KM')
            $pr[76]++;
        elseif ($data['rsm8'] == '3' && $data['mhasil'] == 'KM')
            $pr[77]++;
        elseif ($data['rsm8'] == '2' && $data['mhasil'] == 'KM')
            $pr[78]++;
        elseif ($data['rsm8'] == '1' && $data['mhasil'] == 'KM')
            $pr[79]++;
    }

    for ($p=0; $p <82 ; $p++) { 
        $ppr[$p] = $pr[$p]/($pr[80]+$pr[81]);
    }

    for ($k=0; $k<8; $k++){
        if ($vsm[$k]>-1 && $vsm[$k]<11)
            $vsmr[$k] = 1;
        elseif ($vsm[$k]>10 && $vsm[$k]<21)
            $vsmr[$k] = 2;
        elseif ($vsm[$k]>20 && $vsm[$k]<31)
            $vsmr[$k] = 3;
        elseif ($vsm[$k]>30 && $vsm[$k]<41)
            $vsmr[$k] = 4;
        elseif ($vsm[$k]>40 && $vsm[$k]<51)
            $vsmr[$k] = 5;
    }

    //======================================================// 1

    if ($vsmr[0] == 1){
        $var[0] = $ppr[4];
        $var[1] = $ppr[9];
    }
    elseif ($vsmr[0] == 2){
        $var[0] = $ppr[3];
        $var[1] = $ppr[8];
    }
    elseif ($vsmr[0] == 3){
        $var[0] = $ppr[2];
        $var[1] = $ppr[7];
    }
    elseif ($vsmr[0] == 4){
        $var[0] = $ppr[1];
        $var[1] = $ppr[6];
    }
    elseif ($vsmr[0] == 5){
        $var[0] = $ppr[0];
        $var[1] = $ppr[5];
    }
    
    //======================================================// 2

    if ($vsmr[1] == 1){
        $var[2] = $ppr[14];
        $var[3] = $ppr[19];
    }
    elseif ($vsmr[1] == 2){
        $var[2] = $ppr[13];
        $var[3] = $ppr[18];
    }
    elseif ($vsmr[1] == 3){
        $var[2] = $ppr[12];
        $var[3] = $ppr[17];
    }
    elseif ($vsmr[1] == 4){
        $var[2] = $ppr[11];
        $var[3] = $ppr[16];
    }
    elseif ($vsmr[1] == 5){
        $var[2] = $ppr[10];
        $var[3] = $ppr[15];
    }
    
    //======================================================// 3

    if ($vsmr[2] == 1){
        $var[4] = $ppr[24];
        $var[5] = $ppr[29];
    }
    elseif ($vsmr[2] == 2){
        $var[4] = $ppr[23];
        $var[5] = $ppr[28];
    }
    elseif ($vsmr[2] == 3){
        $var[4] = $ppr[22];
        $var[5] = $ppr[27];
    }
    elseif ($vsmr[2] == 4){
        $var[4] = $ppr[21];
        $var[5] = $ppr[26];
    }
    elseif ($vsmr[2] == 5){
        $var[4] = $ppr[20];
        $var[5] = $ppr[25];
    }
    
    //======================================================// 4

    if ($vsmr[3] == 1){
        $var[6] = $ppr[34];
        $var[7] = $ppr[39];
    }
    elseif ($vsmr[3] == 2){
        $var[6] = $ppr[33];
        $var[7] = $ppr[38];
    }
    elseif ($vsmr[3] == 3){
        $var[6] = $ppr[32];
        $var[7] = $ppr[37];
    }
    elseif ($vsmr[3] == 4){
        $var[6] = $ppr[31];
        $var[7] = $ppr[36];
    }
    elseif ($vsmr[3] == 5){
        $var[6] = $ppr[30];
        $var[7] = $ppr[35];
    }
    
    //======================================================// 5


    if ($vsmr[4] == 1){
        $var[8] = $ppr[44];
        $var[9] = $ppr[49];
    }
    elseif ($vsmr[4] == 2){
        $var[8] = $ppr[43];
        $var[9] = $ppr[48];
    }
    elseif ($vsmr[4] == 3){
        $var[8] = $ppr[42];
        $var[9] = $ppr[47];
    }
    elseif ($vsmr[4] == 4){
        $var[8] = $ppr[41];
        $var[9] = $ppr[46];
    }
    elseif ($vsmr[4] == 5){
        $var[8] = $ppr[40];
        $var[9] = $ppr[45];
    }
    
    //======================================================// 6


    if ($vsmr[5] == 1){
        $var[10] = $ppr[54];
        $var[11] = $ppr[59];
    }
    elseif ($vsmr[5] == 2){
        $var[10] = $ppr[53];
        $var[11] = $ppr[58];
    }
    elseif ($vsmr[5] == 3){
        $var[10] = $ppr[52];
        $var[11] = $ppr[57];
    }
    elseif ($vsmr[5] == 4){
        $var[10] = $ppr[51];
        $var[11] = $ppr[56];
    }
    elseif ($vsmr[5] == 5){
        $var[10] = $ppr[50];
        $var[11] = $ppr[55];
    }
    
    //======================================================// 7


    if ($vsmr[6] == 1){
        $var[12] = $ppr[64];
        $var[13] = $ppr[69];
    }
    elseif ($vsmr[6] == 2){
        $var[12] = $ppr[63];
        $var[13] = $ppr[68];
    }
    elseif ($vsmr[6] == 3){
        $var[12] = $ppr[62];
        $var[13] = $ppr[67];
    }
    elseif ($vsmr[6] == 4){
        $var[12] = $ppr[61];
        $var[13] = $ppr[66];
    }
    elseif ($vsmr[6] == 5){
        $var[12] = $ppr[60];
        $var[13] = $ppr[65];
    }
    
    //======================================================// 8

    if ($vsmr[7] == 1){
        $var[14] = $ppr[74];
        $var[15] = $ppr[79];
    }
    elseif ($vsmr[7] == 2){
        $var[14] = $ppr[73];
        $var[15] = $ppr[78];
    }
    elseif ($vsmr[7] == 3){
        $var[14] = $ppr[72];
        $var[15] = $ppr[77];
    }
    elseif ($vsmr[7] == 4){
        $var[14] = $ppr[71];
        $var[15] = $ppr[76];
    }
    elseif ($vsmr[7] == 5){
        $var[14] = $ppr[70];
        $var[15] = $ppr[75];
    }
    
    //======================================================// end

    $varsu[0] = $var[0] * $var[2] * $var[4] * $var[6] * $var[8] * $var[10] * $var[12] * $var[14] * $ppr[80]; 
    $varsu[1] = $var[1] * $var[3] * $var[5] * $var[7] * $var[9] * $var[11] * $var[13] * $var[15] * $ppr[81];

    if ($varsu[0] > $varsu[1])
        $type = 'RM';
    elseif ($varsu[1] > $varsu[0])
        $type = 'KM';
    elseif ($varsu[1] == $varsu[0])
        $type = 'RM';

    mysql_query("INSERT INTO `test`(`nim`,`m1`,`m2`,`m3`,`m4`,`m5`,`m6`,`m7`,`m8`,`m9`,`m10`,`m11`,`m12`,`m13`,`m14`,`m15`,`m16`,`m17`,`m18`,`m19`,`m20`,`m21`,`m22`,`m23`,`m24`,`m25`,`m26`,`m27`,`m28`,`m29`,`m30`,`m31`,`m32`,`m33`,`m34`,`m35`,`m36`,`m37`,`m38`,`m39`,`m40`,`m41`,`m42`,`m43`,`m44`,`m45`,`m46`,`m47`,`m48`,`m49`,`m50`,`m51`,`m52`,`sm1`,`sm2`,`sm3`,`sm4`,`sm5`,`sm6`,`sm7`,`sm8`,`rsm1`,`rsm2`,`rsm3`,`rsm4`,`rsm5`,`rsm6`,`rsm7`,`rsm8`,`mhasil`) 
        VALUES ('$ss','$perta[2]','$perta[3]','$perta[4]','$perta[5]','$perta[6]','$perta[7]','$perta[8]','$perta[9]','$perta[10]','$perta[11]','$perta[12]','$perta[13]','$perta[14]','$perta[15]','$perta[16]','$perta[17]','$perta[18]','$perta[19]','$perta[20]','$perta[21]','$perta[22]','$perta[23]','$perta[24]','$perta[25]','$perta[26]','$perta[27]','$perta[28]','$perta[29]','$perta[30]','$perta[31]','$perta[32]','$perta[33]','$perta[34]','$perta[35]','$perta[36]','$perta[37]','$perta[38]','$perta[39]','$perta[40]','$perta[41]','$perta[42]','$perta[43]','$perta[44]','$perta[45]','$perta[46]','$perta[47]','$perta[48]','$perta[49]','$perta[50]','$perta[51]','$perta[52]','$perta[53]',' $vsm[0]',' $vsm[1]',' $vsm[2]',' $vsm[3]',' $vsm[4]',' $vsm[5]',' $vsm[6]',' $vsm[7]',' $vsmr[0]',' $vsmr[1]',' $vsmr[2]',' $vsmr[3]',' $vsmr[4]',' $vsmr[5]',' $vsmr[6]',' $vsmr[7]','$type')");

} elseif ($nim == $ss) {
    echo '
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Anda sudah pernah mengisi angket. Terimakasih. :)
            </div>';
} else {
   header("location:index.php");
}}


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
                                            <th width="250px">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            mysql_connect('localhost','khafid_khafid','khafid');
                                            mysql_select_db('khafid_tesis');
                                            $query = mysql_query('select * from meta_table');
                                            $no = 1;
                                            while ($data=mysql_fetch_array($query)) {
                                                echo "<tr>";
                                                echo "<td>".$no++.'</td>';
                                                echo "<td>".$data['pertanyaan'].'</td>';
                                                echo "<td>";
                                                    echo '<label class="radio-inline">
                                                            <input type="radio" name="ori'.$no.'" value="5" required checked>SL
                                                            </label>';
                                                    echo '<label class="radio-inline">
                                                            <input type="radio" name="ori'.$no.'" value="4" required>SS
                                                            </label>';
                                                    echo '<label class="radio-inline">
                                                            <input type="radio" name="ori'.$no.'" value="3" required>KD
                                                            </label>';
                                                    echo '<label class="radio-inline">
                                                            <input type="radio" name="ori'.$no.'" value="2" required>JR
                                                            </label>';
                                                    echo '<label class="radio-inline">
                                                            <input type="radio" name="ori'.$no.'" value="1" required>TP
                                                            </label>';
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
