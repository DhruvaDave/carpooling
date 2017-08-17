
<?php
error_reporting(0);
include_once('control.php');
if(isset($_SESSION['id']))
{
$n = $_SESSION['name'];
$i = $_SESSION['id'];
}

?>





<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<title>Car Poolings</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
	<style type="text/css">
	#link
	{
	   padding-left:55%;
	   color:#990099;
	}
	#ca
	{
	    height:50px;
		width:50px;
		color:#FFFFFF;
	}
	</style>

	
	</head>
<body>

<?php 
if(isset($i))
{
echo "Welcome: ".$n; 
}
?>
<!--start header-->
<div class="h_bg">
<div class="wrap">          
<div class="wrapper">
<div class="header">
<div id="link">
 <a href="reg.php" > Registration </a> | <a href="createcarpool.php" > Create Carpool </a> | <a href="search.php"> Search </a> | <a href="profile.php?pr_id=<?php echo $i;?>"> Profile </a>| <a href="package1.php"> Package </a> | <?php if($i>0)
	  {
	      ?>
		  <a href="logout.php">Logout </a>
	    <?php
	  }
	  
	  else
	  {
	  ?>
	   <a href="login.php">Login </a> 
	   <?php
	  }
	  
	   ?>
	  
	  
	  
	   </div>
	<div class="logo">
	
		<img src="../logo/images (5).jpg" height="80" width="100"> <div id="ca">
	CarPooling
	</div> </a>
		
	</div>
	<div class="cssmenu">
	<ul>
	   <li class="active"><a href="home.php"><span>Home</span></a></li>
	    <li><a href=""><span>Cars</span></a>
		
		<ul>
		 <?php
					
						?>
	         <li class="has-sub"><a href="price.php"><span>By Price</span></a>
	          <ul>
			  
	             
			  
	               <li>
				   <?php
				     foreach($see as $c)
					 {
				   ?>
				   <a href="price.php?pid=<?php echo $c['car_price']; ?>"><span><?php echo $c['car_price'];?></span></a>
				   <?php
				   }
				   ?>
	              
	            </ul>
	         </li>
			  <?php
		  
		  //}
		  
		  ?>
	         <li class="has-sub"><a href="brand.php"><span>By Brand</span></a>
	            <ul>
	               <li> <?php
				     foreach($see as $c)
					 {
				   ?>
				   <a href="brand.php?bid=<?php echo $c['car_name']; ?>"><span><?php echo $c['car_name'];?></span></a>
				   <?php
				   }
				   ?>	            
	         </li></ul>
			 <li class="has-sub"><a href="show_car.php"><span>All cars</span></a>
	          
	         </li>
	      </ul>
		 
		
		</li>
	      <li><a href="login.php"><span>Driver</span></a></li>
	   <li class="has-sub"><a href="login.php"><span>Carowner</span></a>
	      
	   </li>
	   <li class="last"><a href="contactus.php"><span>Contact</span></a></li>
	   
	 <div class="clear"></div>
	 </ul>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div><!-- start slider -->
<div class="slider_bg">
<div class="wrap">
<div class="wrapper">
	<div class="slider">
	<!-- #camera_wrap_1 -->
	<div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="images/thumbs/slider1.jpg" data-src="images/slider/slider1.jpg">
            </div>
            <div data-thumb="images/thumbs/slider2.jpg" data-src="images/slider/slider2.jpg">
            </div>
            <div data-thumb="images/thumbs/slider3.jpg" data-src="images/slider/slider3.jpg">
            </div>
            <div data-thumb="images/thumbs/slider4.jpg" data-src="images/slider/slider4.jpg">
            </div>            
             </div><!-- #camera_wrap_1 -->
         <div class="clear"></div>
	</div>
	<!-- end #camera_wrap_1 -->
	<div class="clear"></div>
	</div>
</div>
</div>
</div>
<!-- start content -->
<div class="content_bg">
<div class="wrap">
<div class="wrapper">
	<div class="main">
	<!-- start content_left -->
	
	<!-- start content_right -->
	<div class="content_right">
			 <div class="gallery">
			 	<h2>Our latest gallery</h2>
							<section>
						<ul class="lb-album">
							<li>
								<a href="#image-1">
									<img src="images/gallery1.jpg" alt="">
									<span> </span>
								</a>
								<div class="lb-overlay" id="image-1">
									<img src="images/gallery1.jpg" alt="">
									<a href="#page" class="lb-close"> </a>
								</div>
							</li>
							<li>
								<a href="#image-2">
									<img src="images/gallery2.jpg" alt="">
									<span> </span>
								</a>
								<div class="lb-overlay" id="image-2">
										<img src="images/gallery2.jpg" alt=""> 
									<a href="#page" class="lb-close"> </a>
								</div>
							</li>
							<li>
								<a href="#image-3">
									<img src="images/gallery3.jpg" alt="">
									<span> </span>
								</a>
								<div class="lb-overlay" id="image-3">
									<img src="images/gallery3.jpg" alt="image03">
									<a href="#page" class="lb-close"> </a>
								</div>
							</li>
							<li>
								<a href="#image-4">
									<img src="images/gallery4.jpg" alt="">
									<span> </span>
								</a>
								<div class="lb-overlay" id="image-4">
									<img src="images/gallery4.jpg" alt="image04">
									<a href="#page" class="lb-close"> </a>
								</div>
							</li>
								<div class="clear"></div>
						</ul>
					</section>
					</div>
				<div class="image group">
				<div class="grids_of_2">
					<div class="grid images_3_of_1">
						<img src="../../images of car/bmwz4/bmw z4 4.jpg">
					</div>
					<div class="grid span_2_of_3">
						<h3> BMW Z4 </h3>
						<p class="para">The Z4 is a real treat to eyes with low slung body, extended bonnet and superb interiors. This is no doubt one of the best sports car available today in India that with a 3.0-litre 6-cylinder, twin-turbo petrol engine churns out 310PS and 400Nm of torque. </p>
										   </div>
				  	<div class="clear"></div>
				  	</div>
				  	<div class="grids_of_2 top">
				  	<div class="grid images_3_of_1">
						<img src="../../images of car/audi/a1.jpg">
					</div>
					<div class="grid span_2_of_3">
						<h3> AUDI R8 </h3>
						<p class="para">Audi R8 is a two-door coupe that exudes the elegance of a Formula One racer car. The stylish super-car flaunts muscular exteriors and luxurious interiors. Superior ride and handling is provided by the vehicle, through its finely tuned suspension system. The interiors of the coupe are spacious for two people, with a small cargo shelf provided in the rear portion. With a powerful petrol engine, the car accelerates rapidly and promises to deliver commendable top speed.

</p>
						
				   </div>
				  	<div class="clear"></div>
				  	</div>
		   		</div>
	</div>
	<?php
	include('show_adv.php');
	?>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
<div class="footer_bg">
<div class="wrap">
<div class="wrapper">
	<div class="footer">
		<div class="copy">
			<p class="w3-link">© All Rights Reserved | Design by bhavini & Dhruva </a></p>
		</div>
		<div class="f_nav">
		
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
</body>
</html>