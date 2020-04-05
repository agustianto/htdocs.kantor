<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Covid-19</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/sb/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/sb/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>
<!-- End Head -->

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <style type="text/css">
            .S1, .S2, .S3{
              display: none;
            }
            .S1, .S2{
              color: red;
            }
          </style>
          <div class="container">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Self Assesment Covid-19</h6></div>
                <div class="card-body S1">
                  <div class="row text-center">
                    <div class="col-lg-12">
                      <div class="p-4">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4"><b>Result</b></h1>
                        </div>
                        <div class="form-group">
                          <strong>
                            <ul>
                              <p>Anda kemungkinan terkena virus Covid-19</p></br>
                              <p>Hubungi hotline RS Soebandi No telepon (0331) 487441</p></br>
                              <p>Lakukan social distancing, gunakan masker, cuci tangan dengan teratur,</br>lakukan isolasi diri di rumah</p>               
                              </ul>
                              <br>
                              <a href="<?php echo base_url('Covid');?>"><button class="btn btn-primary">Check up lagi</button></a> <a href="<?php echo base_url('Covid/history/'.$id);?>"><button class="btn btn-success">History</button></a><br>
                              <br>
                            </strong>
                          </div>
                          <!-- <input type="button" id="id" name="id" onclick="one('b','a')" class="btn btn-success" name="submit" value="Next"> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body S3">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><b>Result</b></h1>
                          </div>
                          <div class="form-group">
                            <strong>
                              
                                <p>Anda kemungkinan tidak terkena virus Covid-19</p></br>
                                <p>Jaga kesehatan dan tetap waspada dengan melakukan social distancing atau tetap berada di rumah, cuci tangan secara teratur, minum vitamin, istirahat yang cukup, dan makan makanan bergizi</p></br>
                                <p>Jika anda merasa tidak sehat dan muncul gejala deman 38°C,batuk, pilek dan sesak </br> tidak mereda maka periksakan diri ke puskesmas atau dokter terdekat</p>        
                              
                              <br>
                              <a href="<?php echo base_url('Covid');?>"><button class="btn btn-primary">Check up lagi</button></a> <a href="<?php echo base_url('Covid/history/'.$id);?>"><button class="btn btn-success">History</button></a><br>
                              <br>
                            </strong>
                          </div>
                          <!-- <input type="button" id="id" name="id" onclick="one('b','a')" class="btn btn-success" name="submit" value="Next"> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body S2">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><b>Result</b></h1>
                          </div>
                          <div class="form-group">
                            <strong>
                              
                                <p>Anda kemungkinan terkena virus Covid-19</p>>
                                <p>Lakukan social distancing, gunakan masker, cuci tangan dengan teratur,</br>lakukan isolasi diri di rumah</p>     
                                  <p>Jika terjadi perubahan dalam kurun waktu 14 hari, </br>muncul gejala deman 38°C, batuk, pilek dan sesak </br> tidak mereda maka periksakan diri ke puskesmas atau dokter terdekat</p>       
                                
                                <br>
                                <a href="<?php echo base_url('Covid');?>"><button class="btn btn-primary">Check up lagi</button></a> <a href="<?php echo base_url('Covid/history/'.$id);?>"><button class="btn btn-success">History</button></a><br>
                                <br>
                              </strong>
                            </div>
                            <!-- <input type="button" id="id" name="id" onclick="one('b','a')" class="btn btn-success" name="submit" value="Next"> -->
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/sb/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/sb/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/sb/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('asset/sb/js/sb-admin-2.min.js') ?>"></script>
    <script type="text/javascript">
var currentTab =  "<?php echo $s ?>";// Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(m) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName(m);
  x[0].style.display = "inline";
}
</script>
</body>

</html>


