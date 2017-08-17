<?php
 include_once('control.php');
 include_once('header.php');
 error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="ts_picker.js">
<script type="text/javascript"src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#b1").mouseover(function() {
	
	$("#form1").fadeIn("2000");
	});

});

//Script by Denis Gritcyuk: tspicker@yahoo.com
//Submitted to JavaScript Kit (http://javascriptkit.com)
//Visit http://javascriptkit.com for this script
</script>
</script>
<style type="text/css"> 
 .main
 {

   width:400px;
     height:150px;
 
  
  
   margin:10%;
   margin-top:10%;
   padding-left:10%;
   
   
   

 }
	#to
	{
	 margin:5%; 
	}
	#from
	{
	 margin:5%; 
	}
	#search
	{
	   height:30%;
	   width:30%;
	   margin:25%;
	   background-color:#993333;
	   color:#FFFFFF;
   
	}
	#d
	{
	margin:10%;
	}
	#c
	{
	font-size:xx-large;
	color:#0000FF;
	font-family:forte;
	}
	
	#table
	{
	background-image:url(../../car/2015-Lotus-Elise-S-Cup-Wallpaper1.jpg);
	background-size:400px 300px;
	width:350px;
	background-position:bottom;
	background-repeat:no-repeat;
	}
	#b1{
width:100%;
height:100%;
position:fixed;
left:0px;
top:0px;
z-index:-1;
}
.stretch {
width:100%;
height:100%;
}
#f
{
 font:Geneva, Arial, Helvetica, sans-serif;
 font-size:24px;
 font-weight:bolder;
 font-style:italic;
}

	
</style>
</head>
<body >
<div id="b1">
<img src="../../car/tumblr_m7qrukv9lQ1rcoqgmo1_5001.gif" class="stretch" />
</div>
<div class="main">

<center>

<form name="tstest" method="post">

<div >
<table id="table">
<tr>
<td colspan="2" align="center" style="color:#000000">
 <caption id="c">  Car Heir </caption> </td>
 </tr>
<tr>
<td id="f">From</td>
<td>
<select name="ct" id="from">
<option> Select Source </option>
 <?php
	    foreach($r as $c)
		{
	  ?>
        
		<option value="<?php echo $c['city_name']; ?>">
		<?php echo $c['city_name']; ?> 
		</option>
		<?php
		}
		?>

</select>
</td>
</tr>

<tr>
<td id="f">To</td>
<td>
<select name="to" id="to">
<option> Select Destination </option>
<?php
	    foreach($r as $c)
		{
	  ?>
        
		<option value="<?php echo $c['city_name']; ?>">
		<?php echo $c['city_name']; ?> 
		</option>
		<?php
		}
		?>
		
		

</select>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Search" id="search" />
</td>
</tr>
</table>
</div>
</form>
</center>

</div>
<form method="post" id="d">
<table border="3" style="border:solid 3px #000000">
<caption id="c"> Available Cars </caption>
                       <tr border="3" style="border:solid 3px #000000">
					   <td border="3" style="border:solid 3px #000000"> Car</td>
					   <td border="3" style="border:solid 3px #000000"> Image </td>
						<td border="3" style="border:solid 3px #000000"> From </td>
						<td border="3" style="border:solid 3px #000000">Destination  </td>
						<td border="3" style="border:solid 3px #000000"> Price </td>
						<td border="3" style="border:solid 3px #000000"> Book </td>
						
						</tr>
	                 <?php
					 foreach($rfs as $s1)
					 {
					 ?>					
					
						
					 <tr>
					<td border="3" style="border:solid 3px #000000"><?php echo $s1['car_name']; ?></td>
					<td border="3" style="border:solid 3px #000000"><img src="<?php echo $s1['car_image']; ?>" style="width:50px;"/> </td>
					<td border="3" style="border:solid 3px #000000"><?php echo $s1['car_source']; ?></td>
					<td border="3" style="border:solid 3px #000000"><?php echo $s1['car_destination']; ?></td>
					<td border="3" style="border:solid 3px #000000"><?php echo $s1['car_price']; ?></td>
					<td border="3" style="border:solid 3px #000000"> <a href="booking.php">Book Now</a> </td>
					 
					 </tr>
					 <?php
					 
					 }
					 
				?>
				</table>
				</form><br />
				<br />
				
<?php
 include('footer.php');
?>
</body>
</html>
