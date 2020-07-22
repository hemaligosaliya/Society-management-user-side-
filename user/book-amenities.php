<?php
$con=mysqli_connect("localhost","root","","smsdb");
session_start();

include('includes/dbconnection.php');
if (strlen($_SESSION['smsuid']==0)) 
{
  header('location:logout.php');
} 
else
{

  if(isset($_POST['submit']))
  {
	$smsaid=$_SESSION['smsuid'];
	$name=$_POST['name'];
	$contact=$_POST['contact'];
    $email=$_POST['email'];
    $flatno=$_POST['flatno'];
	$block=$_POST['block'];
	$date=$_POST['date'];

	$query="insert into tblamenities(said,contact,email,flatno,block,date) values('$name','$contact','$email','$flatno','$block','$date')";
	$data=mysqli_query($con,$query);
        $sql="select name from showamenities where said=".$name;
        $res=(mysqli_query($con,$sql));
        $row=mysqli_fetch_array($res);
        $bname=$row['name'];
        echo $bname;
    require 'PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->SMTPDebug = true;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'homevilleresidential@gmail.com';                 // SMTP username
    $mail->Password = 'homeville123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('homevilleresidential@gmail.com', 'HOMEVILLE');
    $mail->addAddress($email);     // Add a recipient
    $mail->addReplyTo('homevilleresidential@gmail.com');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');//kya q]uery me change kiya dikha

    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Welcome '.$_SESSION['smsuid'];
    $mail->Body    = 'Your '.$bname.' is book at this '.$date.' <b>THANK YOU</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($mail->send())
    {

        echo '<script>window.location.replace("http://localhost/Society%20Management%20System%20Project/sms/user/book-amenities.php");</script>';
    }
    }
}
?>
<html lang="en">

<head>
<title>homeville || Book Your Amenities</title>

<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/animate-css/animate.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">

<style>
    td.details-control {
    background: url('../assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('../assets/images/details_close.png') no-repeat center center;
    }
</style>

</head>
<body class="theme-blue">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
        <p>Please wait...</p>
    </div>
</div>

<div class="overlay" style="display: none;"></div>
<div id="wrapper">

    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Use Amenities</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">amenities</li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            
        <div class="row clearfix">
                <div class="col-md-12">
                    
                        <div class="body">
                           
                            <form id="basic-form" method="post">
<div class="card">
                        <div class="header">
                            <font style="font-weight: bold;font-size:20px;">Book here..</font>
                              <button type="submit" class="btn btn-primary" name="submit" id="submit" style="margin-left: 80%;width:80px;font-weight: bold;">Add</button>
                        </div>
                    
                    </div>
                            	<div class="form-group">
                                    <label>Name</label>
                                <select type="text" name="name" id="name" value="" class="form-control" required="true">
                                <option value="">Choose Amenities</option>
                                <?php
                                    $sql="select said,name from showamenities";
                                    $res=(mysqli_query($con,$sql));
                                    while($row=mysqli_fetch_array($res))
                                    {
                                ?>
                                <option value="<?php echo $row['said'];?>"><?php echo $row['name'];?></option>
                                <?php
                                    }
                                ?>
                                </select>
                                <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="date"  class="form-control" required="true">
                                </div>
                                <div class="form-group">
                                    <label>contact</label>
                                    <input type="text" name="contact" id="contact" class="form-control" required="true"></div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required="true"></div>

                                <div class="form-group">
                                    <label>Flat No</label>
                                    <input type="text" name="flatno" id="flatno" class="form-control" required="true"></div>
                                
                                <div class="form-group">
                                <label>Block</label>
								<select type="text" name="block" id="block" value="" class="form-control" required="true">
								<option value="">Choose Block</option>
                                <?php 
                                $sql2 = "SELECT * from   tblblocks ";
								$query2 = $dbh -> prepare($sql2);
								$query2->execute();
								$result2=$query2->fetchAll(PDO::FETCH_OBJ);
								foreach($result2 as $row)
								{          
    							?>  
								<option value="<?php echo htmlentities($row->BlockName);?>"><?php echo htmlentities($row->BlockName);?></option>
 								<?php } ?> 
  								</div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

        
        </div>
    </div>
    
</div>

<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/bundles/morrisscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>
</html>