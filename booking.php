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
	#lable
	{
	 margin:5%; 
	}
	#r
	{
	  height:150%;
	   width:90px;
	   
	   background-color:#993333;
	   color:#FFFFFF;
   
	  
	}
	.search
	{
	   border-radius:15px;
	   height:50%;
	   width:50%;
	   
   
	}
	#c
	{
	font-size:36px;
	color:#0000FF;
	font-family:forte;
	}
	#f
	{
	font-size:18px;
	font-weight:600;
	font-style:italic;
	}
	
	#table
	{
	background-image:url('images/gallery2.jpg');
	background-size:600px 500px;
	width:350px;
	background-position:bottom;
	background-repeat:no-repeat;
	}
</style>
</head>
<body >
<div class="main">


<form name="order" method="post" action="recept.php">

<center>
<table cellspacing="10" cellpadding="50%" style="width:45%" id="table">

<tr>
<td colspan="2" align="center" >
 <caption id="c"> Order Booking </caption> </td>
 </tr>
<tr>
<td id="f">Name</td>
<td><input type="text" name="name" id="lable" value="<?php echo $_SESSION["name"];?>" disabled="disabled"/></td>
</tr>

<tr>
<td id="f">No Of People</td>
<td id="f"><input type="Text" name="people" id="lable"></td>
</tr>

<tr>
<td id="f"> Date</td>
<td><?php include('date.php'); ?></td>
</tr>

<tr>
<td id="f">Car</td>
<td><select name="car" id="lable">
<option>Select Car </option>
   <?php
					  foreach($res as $c)
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
<td id="f">Driver</td>
<td><select name="driver" id="lable">
<option>Select Driver</option>
  <?php
					  foreach($p as $c1)
					  {
						?>
						
<option value="<?php echo $c1['passenger_id']; ?>"><?php echo $c1['fname']; ?></option>
<?php
						
					    }
						
						?>

</select>
</td>
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
<td id="f"> Address </td>
<td> <textarea cols="18" rows="3" name="address" >  </textarea> <br /> <br /> </td> 
</tr>

<tr>
<td colspan="2" ><input type="submit" name="book" value="Book"  id="r"/></td>
<td colspan="2"><input type="reset" name="reset" value="Reset"   id="r"/></td>
</tr>



<?php

if(isset($_REQUEST['book']))
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
</div>
</center>
</center>
</div>
<br />

<br />
<?php
 include('footer.php');
?>
</body>
</html>
