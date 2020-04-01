<?php
session_start();
//ini_set("session_asdasdsd", 3600);
if(isset($_SESSION['user'])){
    header("location:dashboard.php");
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

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="NIM (6 Digit Only)" name="nim" type="text" pattern="[0-9][0-9][0-9][0-9][0-9][0-9]" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>
</html>

<?php 

/*session_start(); setcookie( $_SESSION['user'], $_SESSION['user'],time()-(3600));*/

if(isset($_POST['Submit'])){
    mysql_connect('localhost','root','');
    mysql_select_db('latih');
    $uss = $_POST['nim'];
    $pas = $_POST['password'];
    if ($uss == $pas){
        //setcookie($uss,$uss,time()+(36000*360),"/");
        $_SESSION['user']=$uss;
        $_SESSION['pass']=$pas;
        header("location:dashboard.php");
    }
    elseif ($uss == '098765') {
        //setcookie($uss,$uss,time()+(36000*360),"/");
        $_SESSION['userad']=$uss;
        $_SESSION['passad']=$pas;
        header("location:ptables.php");
    }
}
                    
?>