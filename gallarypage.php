<!DOCTYPE html>
<html class="no-js">
<?php require_once 'head.php' ?>
<body>
	<?php require_once 'toppati.php' ?>
	<?php require_once 'bottomheader.php' ?>
<style type="text/css">
.gallery
 {
   margin: 10px !important;
    float: left;
    width: 390px;
    border: 1px solid #ccc;
 }   
 .gallery img{
    width: 100%;
    height: 200px;
    border-radius: 10px;
 }
	.gallery a img{
		transition: 1s!important;
		padding: 10px!important;
		width:400px!important;
		border-radius: 10px;
 }
	}
	.gallery img:hover{
		filter:grayscale(100%);
		transform: scale(1.1);
	}

</style>

<div id="canvas" style="background-color: white;" >
	<div id="box_wrapper">

				<section class="intro_section page_mainslider ds">
				<div class="flexslider" data-dots="false">
					<ul class="slides">

						<li>
							<img src="img/photogalary.jfif" alt="" style="opacity: 0.6;height: 450px;">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-left">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<h2 style="font-weight: 700;font-style: normal;font-family: 'Lato', sans-serif;color: #ffffff;font-size: 60px;line-height: 1.1;letter-spacing: 0px;">Gallary
														
													</h2>
												</div>
									
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		<section style="background-color: white;">

    		<div class="rows">
        		<div class="container" >

        <?php
        $con=mysqli_connect("localhost","root","","smsdb");
        $sql="select name from tblgalary";
        $res=(mysqli_query($con,$sql));
        while($row=mysqli_fetch_array($res)) 
        {
        ?>
        <div class="gallery">
            <a href=""><img src="<?php echo "../gallery/".$row['name'];?>"></a>
        </div>
    
       <?php } ?>
        			

            	</div>
            </div>
        </div>
        
    </div>
</section>



						<?php  require_once 'firstfooter.php' ?>

						<?php require_once 'secondfooter.php' ?>

		</div>
		
	</div>
	<?php require_once 'script.php'  ?>
</body>


</html>