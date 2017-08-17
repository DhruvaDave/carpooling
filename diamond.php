<?php
  include_once('control.php');
 include_once('header.php');
 error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="ts_picker.js">

//Script by Denis Gritcyuk: tspicker@yahoo.com
//Submitted to JavaScript Kit (http://javascriptkit.com)
//Visit http://javascriptkit.com for this script

</script>

<style type="text/css">
 .main
 {

   height:450px;

 }

#r
	{
	  height:150%;
	   width:90px;
	   margin-top:3%;
	   margin-left:30%;
	   background-color:#993333;
	   color:#FFFFFF;
   
	  
	}
	#f
	{
	font-size:18px;
	font-weight:600;
	font-style:italic;
	padding:3%;
	
	}
	#c
	{
	font-size:36px;
	color:#0000FF;
	font-family:forte;
	margin-right:30%;
	padding-bottom:5%;
	}
	
	#lable
	{
	 margin:5%; 
	 width:33%;
	}
	
	#table
	{
	<!--background-image:url('../../images of car/pakage/d.jpg');-->
	background-size:300px 250px;
	width:350px;
	background-position:bottom;
	background-repeat:no-repeat;
	}
</style>
</head>

<body>
<div class="main">
<center>
<form method="post">
<table cellspacing="10" cellpadding="50%" style="width:45%" id="table">

<tr>
<td>
 <caption id="c"> Pacakge </caption> </td>
 </tr>
 
<tr>
<td id="f"> Name: </td>
<td > <input type="text" name="name" value="<?php echo $_SESSION["name"];?>"  /></td>
</tr>

<tr>
<td id="f">From</td>
<td>
<select name="from" id="lable">
<option> Select Source </option>
 <?php
	    foreach($r as $c)
		{
	  ?>
        
		<option value="<?php echo $c['city_id']; ?>">
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
<select name="to" id="lable">
<option> Select Destination </option>
 <?php
	    foreach($r as $c)
		{
	  ?>
        
		<option value="<?php echo $c['city_id']; ?>">
		<?php echo $c['city_name']; ?> 
		</option>
		<?php
		}
		?>
</select>
</td>
</tr>


<tr>
<td id="f"> Date</td>
<td><?php include('date.php'); ?></td>
</tr>

<tr>
<td id="f"> Days: </td>
<td> <input type="text" name="days" value="30"/></td>
</tr>

<tr>
<td id="f">Car</td>
<td><select name="car" id="lable">
<option>Select Car </option>
   <?php
					  foreach($dx1 as $c)
					  {
						?>
						
<option><?php echo $c['car_name']; ?></option>
<?php
						
					    }
						
						?>
</select>
</td>
</tr>


<tr>
<td id="f"> Price: </td>
<td> <input type="text" name="price" value="5000"/></td>
</tr>


<tr>
<td colspan="2" ><input type="submit" name="booking" value="Book"  id="r"/></td>
</tr>

<?php

if(isset($_REQUEST['booking']))
{
?>

<script type="text/javascript">
		   alert("Successfully Booking");
		 </script>
<?php		 
}
?>


</table>
</form>
<br />
<br />
<br />
</center>
<?php
include('footer.php');
?>
</body>
</html>
