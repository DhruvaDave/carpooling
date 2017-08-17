<?php
include_once('control.php');
error_reporting(0);
$i=$_SESSION['id'];
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
<title>The Auto-Swift Website Template | Home :: w3layouts</title>
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
	   padding-left:65%;
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
<div class="h_bg">
<div class="wrap">          
<div class="wrapper">
<div class="header">
<div id="link">

 <a href="reg.php" > Registration </a> | <a href="createcarpool.php" > Create Carpool </a> | <a href="search.php"> Search </a> | <a href="profile.php?pr_id=<?php echo $i;?>"> Profile </a>|  <a href="package1.php"> Package </a> | <?php if($i>0)
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
	
		<img src="../logo/images (5).jpg"> <div id="ca">
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
				   ?></li>
	              
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
	         </li>
	      </ul>
		 
		<li class="has-sub"><a href="show_car.php"><span>All cars</span></a>
	          
	         </li>
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
</div>