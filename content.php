<?php
   $con=mysqli_connect("localhost","root","","smsdb");
?>
<style type="text/css">

 .gallery
 {
    margin: 5px;
    float: left;
    width: 390px;
    border: 1px solid #ccc;
 }   
 .gallery img{
    width: 100%;
    height: 200px;
    border-radius: 10px;

 }
 .desc{
    padding: 15px;
    text-align: center;
 }

.team-area{
    margin-left: 30px;
    margin-bottom: 10px;
    float: left;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    height: 100%;
}
.single-team{
    width: 360px;
    height: 350px;
    padding: 24px;
    background:#fff;
    position: relative;
    display: flex;
    align-items: flex-end;
    transition: .6s ease-out;
    box-shadow: 0 10px 10px rgba(0,0,0,0.5);
}
.single-team:hover{
    transform: translateY(25px);
}
.single-team:hover:before{
    opacity: 1;
}
.single-team:hover .team-text{
    opacity: 1;
    transform: translateY(0);
}
.single-team:before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, #000 , transparent);
    z-index: 2;
    transition: 0.5s;
    opacity: 0;
}
.single-team img
{
    width: 100%;
    height: 350px;
    position: absolute;
    top: 0;
    left: 0;
    object-fit: cover;
}
.single-team .team-text{
    position: relative;
    z-index: 3;
    color: #fff;
    opacity: 0;
    transform: translateY(60px);
    transition: 0.5s;
}
.team-text h2{
    margin: 0;
    font-family: sans-serif;
    letter-spacing: 1px;
    color: #fff;

}
.team-text a{
    width: 150px;
    height: 50px;
    display: inline-block;
    margin: 0 5px;
    text-decoration:none; 
    color: #fff;

}
</style>
<section id="about" class="ls section_padding_top_100 section_padding_bottom_100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" >
                <p class=".moto-text_system_2" style="font-weight: 400;font-style: normal;font-family: 'Lato', sans-serif;color: #bababa;font-size: 16px;line-height: 1;letter-spacing: 0px;text-align: center;" >Municipal Homeowners Community
                </p>
                <h2 class="moto-text_system_6" style="font-weight: 700;font-style: normal;font-family: 'Lato', sans-serif;color: #333333;font-size: 37px;line-height: 1.2;margin-top: 0.5em;letter-spacing: 0px;text-align: center;">We Make Our Neighborhood a Better Place for Living
                </h2>
                <p class="moto-text_system_9" style="font-weight: 400;font-style: normal;font-family: 'Lato', sans-serif;color: #4f4f4f;font-size: 18px;line-height: 1.4;letter-spacing: 0px;text-align: center;">If you want your family and kids to live in a safe and comfortable place - Homeville is your one-stop destination.
                </p>
                <p class="moto-text_normal" style="font-weight: 400;font-style: normal;font-family: 'Lato', sans-serif;color: #828282;font-size: 14px;line-height: 1.4;letter-spacing: 0px;text-align: center;">The HOA specializes in nationwide property management and community management with a full suite of management, maintenance and real estate services for the community.
                </p>

                            
            </div>
</section>

<section class="tourb2-ab-p-3 com-colo-abou" style="background:#2F3A56;padding: 50px 0px 20px 0px;">
    <div class="container-fluid">
        <div class="row tourb2-ab-p3">
            <div class="col-md-3 col-sm-6">
                <div class="tourb2-ab-p3-1 tourb2-ab-p3-com" style=" padding: 15px 15px 10px 15px;position: relative;overflow: hidden;margin-bottom: 30px;border-radius: 2px;background-color:whitesmoke;">
                    <span style="font-size: 35px;font-weight: 600;float: left;padding-right: 15px;color:#EE0039;text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.43);">250+</span>
                                        
                    <h4 style=" font-size: 24px;font-weight: 600;padding-top: 6px;text-transform: uppercase;text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.43);color:#2F3A56;font-style: normal;font-family: 'Lato', sans-serif;">People
                    </h4>
                                        
                    <p style="display: block;float: left;width: 100%;">Begin a chat with SnapTravel and our AI powered bot will scour hundreds of sources to find you the best hotel deals. </p>
                </div>
            </div>
                                
            <div class="col-md-3 col-sm-6">
                <div class="tourb2-ab-p3-1 tourb2-ab-p3-com" style=" padding: 15px 15px 10px 15px;position: relative;overflow: hidden;margin-bottom: 30px;border-radius: 2px;background-color:whitesmoke;">
                    <span style="font-size: 35px;font-weight: 600;float: left;padding-right: 15px;color:#EE0039;;text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.43);">80</span>
                                       
                    <h4 style=" font-size: 24px;font-weight: 600;padding-top: 6px;text-transform: uppercase;text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.43);color:#2F3A56;font-style: normal;font-family: 'Lato', sans-serif;">Houses
                    </h4>
                                        
                    <p style="display: block;float: left;width: 100%;">Begin a chat with SnapTravel and our AI powered bot will scour hundreds of sources to find you the best hotel deals. 
                    </p>
                </div>
            </div>
                                 
            <div class="col-md-3 col-sm-6">
                <div class="tourb2-ab-p3-1 tourb2-ab-p3-com" style=" padding: 15px 15px 10px 15px;position: relative;overflow: hidden;margin-bottom: 30px;border-radius: 2px;background-color:whitesmoke;">
                    <span style="font-size: 35px;font-weight: 600;float: left;padding-right: 15px;color:#EE0039;text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.43);">15
                    </span>
                                        
                    <h4 style=" font-size: 24px;font-weight: 600;padding-top: 6px;text-transform: uppercase;text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.43);color:#2F3A56;font-style: normal;font-family: 'Lato', sans-serif;">Years
                    </h4>
                                        
                    <p style="display: block;float: left;width: 100%;">Begin a chat with SnapTravel and our AI powered bot will scour hundreds of sources to find you the best hotel deals. 
                    </p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="tourb2-ab-p3-1 tourb2-ab-p3-com" style=" padding: 15px 15px 10px 15px;position: relative;overflow: hidden;margin-bottom: 30px;border-radius: 2px;background-color:whitesmoke;">
                    <span style="font-size: 35px;font-weight: 600;float: left;padding-right: 15px;color:#EE0039;text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.43);">25
                    </span>
                                        
                    <h4 style=" font-size: 24px;font-weight: 600;padding-top: 6px;text-transform: uppercase;text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.43);color:#2F3A56;font-style: normal;font-family: 'Lato', sans-serif;">Extra Premises
                    </h4>
                                        
                    <p style="display: block;float: left;width: 100%;">Begin a chat with SnapTravel and our AI powered bot will scour hundreds of sources to find you the best hotel deals. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid" style="padding-left: 4px!important;">
    <div class="container-fluid parallax" style="background: url(img/parallex.jpg)  no-repeat center;background-size: cover;background-attachment: fixed;height: 500px;width:100%;margin-right: 100px; ">
    </div>
</div>
<div class="container-fluid" style="background-color: white;">
    <div class="row">
        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-bg-position="left top" style="margin-top: 20px;margin-bottom: 28px;">
        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto">
            <div class="moto-widget-text-content moto-widget-text-editable">
                <p class="moto-text_system_2">Community advantages</p>
                <p class="moto-text_system_2">&nbsp;</p>
                <h2 class="moto-text_system_6">Welcome to the <br>Homeville Association</h2>
            </div>
        </div>
                
        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-medium moto-spacing-bottom-auto moto-spacing-left-auto">
            <div class="moto-widget-text-content moto-widget-text-editable">
                <p class="moto-text_normal">Homeville is a community of close to one hundred single-family homes located within walking distance of the local public school, theaters, restaurants and other amenities of the downtown.</p>
            </div>
        </div>
        </div>
                
    <div class="moto-widget moto-widget-row__column moto-cell col-sm-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-container="container" >
        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto">
            <div class="moto-widget-text-content moto-widget-text-editable">
                <p class="moto-text_system_8">
                    <span class="moto-content-image-plugin-wrapper moto-spacing-top-zero moto-spacing-right-zero moto-spacing-bottom-small moto-spacing-left-zero">
                        <span class="moto-content-image-container">
                            <img class="moto-content-image" width="44" height="51" src="img/home1.png"></span>
                        </span>
                </p>
                <h3 class="moto-text_system_8">
                    <a target="_self" data-action="url" class="moto-link" href="#" style="color: #4f4f4f;">Community</a>
                </h3>
                <p class="moto-text_normal">&nbsp;</p>
                <p class="moto-text_normal">Residents gather in several groups that meet to enjoy discussion and activities of mutual interest.</p>
           </div>
        </div>
    </div>

    <div class="moto-widget moto-widget-row__column moto-cell col-sm-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-container="container" >
        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto">
            <div class="moto-widget-text-content moto-widget-text-editable">
                <p class="moto-text_system_8">
                    <span class="moto-content-image-plugin-wrapper moto-spacing-top-zero moto-spacing-right-zero moto-spacing-bottom-small moto-spacing-left-zero">
                        <span class="moto-content-image-container">
                            <img class="moto-content-image" width="44" height="51" src="img/home2.png"></span>
                        </span>
                </p>
                <h3 class="moto-text_system_8">
                    <a target="_self" data-action="url" class="moto-link" href="#" style="color: #4f4f4f;">Neighborhood</a>
                </h3>
                <p class="moto-text_normal">&nbsp;</p>
                <p class="moto-text_normal">Interior homes front on wide sidewalks, not streets, and each house has, at a minimum, a double garage.</p>
            </div>
        </div>
    </div>

    <div class="moto-widget moto-widget-row__column moto-cell col-sm-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-container="container" >
        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto">
            <div class="moto-widget-text-content moto-widget-text-editable">
                <p class="moto-text_system_8">
                    <span class="moto-content-image-plugin-wrapper moto-spacing-top-zero moto-spacing-right-zero moto-spacing-bottom-small moto-spacing-left-zero">
                        <span class="moto-content-image-container">
                            <img class="moto-content-image"width="44" height="51" src="img/home3.png"></span>
                        </span>
                </p>
                <h3 class="moto-text_system_8">
                    <a target="_self" data-action="url" class="moto-link" href="#" style="color: #4f4f4f;">Accessibility</a>
                </h3>
                <p class="moto-text_normal">&nbsp;</p>
                <p class="moto-text_normal">Our community is a home to people of all ages and physical abilities. Strollers, wheelchairs can be easily used.</p>
            </div>
        </div>
    </div>

    <div class="moto-widget moto-widget-row__column moto-cell col-sm-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-container="container" >
        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto">
            <div class="moto-widget-text-content moto-widget-text-editable">
                <p class="moto-text_system_8">
                    <span class="moto-content-image-plugin-wrapper moto-spacing-top-zero moto-spacing-right-zero moto-spacing-bottom-small moto-spacing-left-zero">
                        <span class="moto-content-image-container">
                            <img class="moto-content-image" width="44" height="51" src="img/home4.png"></span>
                        </span>
                </p>
                <h3 class="moto-text_system_8">
                    <a target="_self" data-action="url" class="moto-link" href="#" style="color: #4f4f4f;">Energy</a>
                </h3>
                <p class="moto-text_normal">&nbsp;</p>
                <p class="moto-text_normal">Homes were constructed with photovoltaic panels and solar water heaters that are at street level.</p>
            </div>
        </div>
    </div>

    <section  style="background-color: white;">
    <div class="moto-widget-text-content moto-widget-text-editable" >
        <div class="container"  style="background-color: white;margin: auto;overflow: auto;">
            <p class="moto-text_system_2" style="text-align: center;">&nbsp;</p>
            <div class="col-md-12">
                    <div class="spe-title1" style="text-align: center;">
                        <font>See<span> Pictures of </span>Our Community</font>
                            <div class="title-line">
                                <div class="tl-11"></div>
                                <div class="tl-22"><i class="fa fa-gg"></i></div>
                                <div class="tl-33"></div>
                            </div>
                    </div>
            </div>

        <?php
        $sql="select name from tblgalary";
        $res=(mysqli_query($con,$sql));
        while($row=mysqli_fetch_array($res)) 
        {
        ?>
        <div class="gallery">
            <img src="<?php echo "../gallery/".$row['name'];?>">
        </div>
    
       <?php } ?>
        
          
    <div class="text-center">
        <a title="view more" href="gallarypage.php">
            <span style="letter-spacing:1px;">View More</span>
                <span style="padding-left:10px;"><i class="fa fa-paper-plane-o animated fadeInLeft infinite"></i></span>
        </a>
    </div>     
</div>
</div>
</section>
<section  style="background-color: white;">
    <div class="moto-widget-text-content moto-widget-text-editable" >
        <div class="container"  style="background-color: white;margin: auto;overflow: auto;">
            <p class="moto-text_system_2" style="text-align: center;">&nbsp;</p>
            <div class="col-md-12">
                    <div class="spe-title1" style="text-align: center;">
                        <font>See<span> Events of </span>Our Homeville</font>
                            <div class="title-line">
                                <div class="tl-11"></div>
                                <div class="tl-22"><i class="fa fa-gg"></i></div>
                                <div class="tl-33"></div>
                            </div>
                    </div>
            </div>

        <?php
        $sql="select name,description from tblevent";
        $res=(mysqli_query($con,$sql));
        while($row=mysqli_fetch_array($res)) 
        {
        ?>
        <div class="gallery">
            <img src="<?php echo "../events/".$row['name'];?>">
            <div class="desc"><?php echo $row['description']; ?></div>
        </div>
    
       <?php } ?>
        
          
    <div class="text-center">
        <a title="view more" href="eventpage.php">
            <span style="letter-spacing:1px;">View More</span>
                <span style="padding-left:10px;"><i class="fa fa-paper-plane-o animated fadeInLeft infinite"></i></span>
        </a>
    </div>     
</div>
</div>
</section>
<section>
    <div class="rows pad-bot-redu tb-space" style="background-color: white;">
        <div class="container"  style="background-color: white;">
            <div class="col-md-12">
                <div class="spe-title1" style="text-align: center;">
                    <font>See<span> & Book</span>Your Aminities</font>
                        <div class="title-line">
                            <div class="tl-11"></div>
                            <div class="tl-22"><i class="fa fa-gg"></i></div>
                            <div class="tl-33"></div>
                        </div>
                </div>
            </div>
        </div>
        
            <?php
                $sql="select image,name from showamenities";
                $res=(mysqli_query($con,$sql));
                while($row=mysqli_fetch_array($res)) 
                {
                ?>
                <div class="team-area">
                    <div class="single-team">
                        <img src="<?php echo "../amenitise/".$row['image'];?>">
                    <div class="team-text">
                    <h2><?php echo $row['name']; ?></h2>
                    <p><a href="user/book-amenities.php">Book Your Amenities</a></p>
                </div>
                    </div>
    </div> 
       <?php } ?>
                   
    </div>
           
    </div>
        
</div>
</section>

</div>
</div>
