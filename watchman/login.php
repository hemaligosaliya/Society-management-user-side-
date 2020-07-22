<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['login'])) 
  {
    $first_name=$_POST['first_name'];
    $password=md5($_POST['password']);
    $sql ="SELECT watchmanid FROM addwatchman WHERE first_name=first_name and password=password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':first_name', $first_name, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['smswid']=$result->watchmanid; 
}

  if(!empty($_POST["remember"])) {
//COOKIES for username
setcookie ("watchman_login",$_POST["first_name"],time()+ (10 * 365 * 24 * 60 * 60));
//COOKIES for password
setcookie ("watchmanpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
} else {
if(isset($_COOKIE["watchman_login"])) {
setcookie ("watchman_login","");
if(isset($_COOKIE["watchmanpassword"])) {
setcookie ("watchmanpassword","");
        }
      }
}
$_SESSION['login']=$_POST['first_name'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!doctype html>
<html lang="en">

<head>
<title>Society Mentainence System || Login</title>

<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/animate-css/animate.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-blue">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="mobile-logo"><a href="login.php"><img src="../assets/images/logo-icon.svg" alt="Mplify"></a></div>
                    <div class="auth-left">
                        <div class="left-top">
                           
                                <span>HOMEVILLE</span>
                         
                        </div>
                        <div class="left-slider">
                            <img src="../assets/images/login/1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="auth-right">
                        
                        <div class="card">
                            <div class="header">
                                <p class="lead">Watchman Wall</p>
                            </div>
                            <div class="body">
                                <form class="form-auth-small" action="" method="post">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">User Name</label>
                                        <input type="text" class="form-control" placeholder="User Name" required="true" name="first_name" value="<?php if(isset($_COOKIE["watchman_login"])) { echo $_COOKIE["watchman_login"]; } ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required="true" value="<?php if(isset($_COOKIE["watchmanpassword"])) { echo $_COOKIE["watchmanpassword"]; } ?>">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="fancy-checkbox element-left">
                                           <input type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["watchman_login"])) { ?> checked <?php } ?> />
                                            <span>Remember me</span>
                                        </label>                                
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">LOGIN</button>
                                    <div class="bottom">
                                        
                                        <span class="helper-text m-b-10"><i class="fa fa-home"></i> <a href="../index.php">Back Home</a></span>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>
</html>
