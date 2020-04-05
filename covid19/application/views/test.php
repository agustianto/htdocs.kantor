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
            .a, .b, .c, .d, .e, .f, .g {
              display: none;
            }
            input.invalid {
  background-color: #ffdddd;
}
          </style>
          <div class="container">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Self Assesment Covid-19</h6></div>

                <form class="user" id="user" action="<?php echo base_url('Covid/input');?>" method="post">
                  <div class="card-body a">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Input User</h1>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="id1" name="id" placeholder="NIM / NIP / NIK" value="">
                            <!-- <input type="hidden" id="q1" name="q1" value="">
                            <button type="button" onclick="two('c','b', 1, 'q1')" class="btn btn-primary">Ya</button> -->
                          </div>
                          <button type="button" onclick="two('b','a', 1, 'id')" class="btn btn-success">Next</button>
                          <script>
                            function myFunction() {
                            document.getElementById("id").value;
                            }
                          </script>
                          <!-- <input type="button" id="id" name="id" onclick="one('b','a')" class="btn btn-success" name="submit" value="Next"> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body b">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Question</h1>
                          </div>
                          <div class="form-group">
                            <!-- <input type="text" class="form-control form-control-user" id="id" name="id" placeholder="NIM / NIP / NIK" require> -->
                            Perna kontak dengan pasien positif COVID-19 (berada dalam satu ruangan yang sama/kontak dalam jarak 1 meter) Atau perna berkunjung ke negara/daerah endemis COVID-19 dalam 14 hari terakhir?
                            <input type="hidden" id="q1" name="q1" value="">
                          </div>
                          <button type="button" onclick="two('c','b', 1, 'q1')" class="btn btn-primary">Ya</button>
                          <button type="button" onclick="two('c','b', 2, 'q1')" class="btn btn-warning">Ragu</button>
                          <button type="button" onclick="two('c','b', 3, 'q1')" class="btn btn-danger">Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body c">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Question</h1>
                          </div>
                          <div class="form-group">
                            Apakah anda batuk kering ?
                            <input type="hidden" id="q2" name="q2" value="">
                          </div>
                          <button type="button" onclick="two('d','c', 1, 'q2')" class="btn btn-primary">Ya</button>
                          <button type="button" onclick="two('d','c', 2, 'q2')" class="btn btn-danger">Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body d">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Question</h1>
                          </div>
                          <div class="form-group">
                            Apakah anda pilek ?
                            <input type="hidden" id="q3" name="q3" value="">
                          </div>
                          <button type="button" onclick="two('e','d', 1, 'q3')" class="btn btn-primary">Ya</button>
                          <button type="button" onclick="two('e','d', 2, 'q3')" class="btn btn-danger">Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body e">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Question</h1>
                          </div>
                          <div class="form-group">
                            Apakah anda demam > 38°C? 
                            <input type="hidden" id="q4" name="q4" value="">
                          </div>
                          <button type="button" onclick="two('f','e', 1, 'q4')" class="btn btn-primary">Ya</button>
                          <button type="button" onclick="two('f','e', 2, 'q4')" class="btn btn-danger">Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body f">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Question</h1>
                          </div>
                          <div class="form-group">
                            Apakah anda sesak nafas?
                            <input type="hidden" id="q5" name="q5" value="">
                          </div>
                          <button type="button" onclick="two('g','f', 1, 'q5')" class="btn btn-primary">Ya</button>
                          <button type="button" onclick="two('g','f', 2, 'q5')" class="btn btn-danger">Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body g">
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <div class="p-4">
                          <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Question</h1>
                          </div>
                          <div class="form-group">
                            Apakah anda mengalami sakit tenggorokan?
                            <input type="hidden" id="q6" name="q6" value="">
                          </div>
                          <button type="button" onclick="three(1, 'q6')" class="btn btn-primary">Ya</button>
                          <button type="button" onclick="three(2, 'q6')" class="btn btn-danger">Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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
var currentTab = 'a'; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(m) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName(m);
  x[0].style.display = "inline";
}

function one(n,m) {
  // This function will figure out which tab to display
  if (!validateForm()) return false;
  var x = document.getElementsByClassName(n);
  var y = document.getElementsByClassName(m);
  x[0].style.display = "inline";
  y[0].style.display = "none";
  // showTab(0,n);
}
function two(n,m,o,p) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName(n);
  var y = document.getElementsByClassName(m);
  x[0].style.display = "inline";
  y[0].style.display = "none";
  var x = document.getElementById(p).value=o;
  // showTab(0,n);
}

function three(o,p) {
  // This function will figure out which tab to display
  var x = document.getElementById(p).value=o;
  document.getElementById("user").submit();
  // showTab(0,n);
}


function validateForm() {
  // This function deals with validation of the form fields
  // alert("TES");
  var x, y, i, valid = true;
  x = document.getElementsByClassName("a");
  y = x[0].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  return valid; // return the valid status
}
</script>
</body>

</html>


