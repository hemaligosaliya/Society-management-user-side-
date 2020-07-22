
<!DOCTYPE html>
<html class="no-js">
<?php require_once 'head.php' ?>
<body>
	<?php require_once 'toppati.php' ?>
	<?php require_once 'bottomheader.php' ?>
<style type="text/css">

	*
	{
		margin: 0;
		padding: 0;
		font-family: "open sans",sans-serif;
		
	}
	.about-section
	{
		width: 100%;
		background :#f1f1f1;
		margin-top: -10px
		padding: 40px 0;
	}
	.inner-width
	{
		max-width: 1000px;
		overflow: hidden;
		padding: 0 20px;
		margin: auto;
		
	}
	.about-section h1
	{
		text-align: center;
		font-style: normal;
		font-weight: 900;
		font-size: 40px;
		font-family: arial;
		letter-spacing: 1px;
		text-decoration: none;
		padding-top: 10px;
	}
	.border
	{
		width: 100px;
		height: 3px;
		background :#e74c3c;
		margin: 40px auto;
	}
	.about-section-row
	{
		display: flex;
		flex-wrap: wrap;
	}
	.about-section-col
	{
		flex: 50%;
	}
	.about
	{
		padding-right: 30px;
	}
	.about p
	{
		text-align: justify;
		margin-bottom: 20px;
	}
	.about p
	{
		text-align: justify;
		margin-bottom: 20px;
	}
	.about a
	{
		display: inline-block;
		color: #e74c3c;
		text-decoration: none;
		border :2px solid #e74c3c;
		border-radius: 24px;
		padding :8px 40px;
		transition: 0.4s linear;
	}
	.about a:hover
	{
		color: #fff;
		background :#e74c3c;
	}

	.image-section
	{
		
		width: 100%;
		
	}
	.image-section img
	{
		width: 100%;
		padding: 10px;
		border-radius: 50%;
		box-shadow: 0 0 10px #999999;
	}

	@media screen and (max-width:700px)
	{
		.about-section-col
		{
			flex: 100%;
			margin: 10px 0;
		}
		.about,.image
		{
			padding: 0;
		}
		.about
		{
			text-align: center;
		}
	}
	@keyframes cnt{
		0%{
			width: 300px;
			color: #ffffff;
		}
		50%{
			color: #a39e9e;
		}
		70%{
			color: #ccc;
		}
		100%{
			color: #ffffff;
		}
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
													<h2 style="font-weight: 700;font-style: normal;font-family: 'Lato', sans-serif;color: #ffffff;font-size: 60px;line-height: 1.1;letter-spacing: 0px;">About Us
														
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
			<div class="about-section">
		<div class="inner-width">
			<h1 style=" color: #2A3C54;">HomeVille</h1>
			<div class="border"></div>
			<div class="about-section-row">
				<div class="about-section-col">
					<div class="about">
						<p>
							Apartment buildings are multi-story buildings where three or more residences are contained within one structure. Such a building may be called an apartment building, apartment complex, flat complex, block of flats, tower block, high-rise or, occasionally, mansion block (in British English), especially if it consists of many apartments for rent. A high-rise apartment building is commonly referred to as a residential tower, apartment tower, or block of flats in Australia.
						</p>
						<p>
							A high-rise building is defined by its height differently in various jurisdictions. It may be only residential, in which case it might also be called a tower block, or it might include other functions such as hotel, offices, or shops. There is no clear difference between a tower block and a skyscraper, although a building with fifty or more stories is generally considered a skyscraper.
						</p>
						
					</div>
				</div>
				<div class="about-section-col">
					<dir class="image-section">
						<img src="img/photogalary.jfif">
					</dir>
				</div>
			</div>
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