<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['smswid']==0)) {
  header('location:logout.php');
  } else{
    

?>
<!doctype html>
<html lang="en">

<head>
<title>Society Mentainence System || Dashboard</title>

<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/animate-css/animate.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="../assets/vendor/parsleyjs/css/parsley.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">

</head>
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">

   <?php include_once('includes/header.php');?>

  <?php include_once('includes/sidebar.php');?>

 <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Dashboard</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Dashboard</li>
                          
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                
                
            
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card modal-open">
                        <div class="body">
                            <div class="number">
                                 <?php 
$sql ="SELECT ID from tblvisitor";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totvisitor=$query->rowCount();
?>
                                <h6><i class="fa fa-eye m-r-10"></i><a href="manage-allotment.php">Total Visitor</a></h6>
                                <span><?php echo htmlentities($totvisitor);?></span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="421215" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            
         
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="../assets/vendor/parsleyjs/js/parsley.min.js"></script>
    
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/bundles/morrisscripts.bundle.js"></script>
<script>
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();

        // initialize after multiselect
        $('#basic-form').parsley();
    });
    </script>
</body>
</html>

<?php }  ?>