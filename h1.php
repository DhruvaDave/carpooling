<?php
error_reporting(0);
?>
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
	</style>
</head>
<body>
<div class="h_bg">
<div class="wrap">          
<div class="wrapper">
<div class="header">
<div id="link">
 <a href="reg.php" > Registration </a> | <a href="login.php" > Login </a> | <a href="createcarpool.php" > Create Carpool </a> | <a href="search.php"> Search </a> |<a href="profile.php"> Profile </a> | <a href="logout.php"> Logout</a> </div>
	<div class="logo">
	
		 <a href="index.php"><img src="images/logo.png"> </a>
		
	</div>
	<div class="cssmenu">
	<ul>
	   <li class="active"><a href="home.php"><span>Home</span></a></li>
	    <li><a href="show_car.php"><span>Cars</span></a>
		
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
	         <li class="has-sub"><a href=""><span>By Brand</span></a>
	            <ul>
	               <li><a href=""><span>Marcidiz</span></a></li>
	               <li class="last"><a href=""><span>Audi</span></a></li>
	            </ul>
	         </li>
	      </ul>
		 
		
		</li>
	      <li><a href="login.php"><span>Driver</span></a></li>
	   <li class="has-sub"><a href="login.php"><span>Carowner</span></a>
	      
	   </li>
	   <li class="last"><a href="contact.php"><span>Contact</span></a></li>
	   
	 <div class="clear"></div>
	 </ul>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>