<?php

include_once('header.php');
include_once('control.php');
error_reporting(0);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="../26/ts_picker.js">

//Script by Denis Gritcyuk: tspicker@yahoo.com
//Submitted to JavaScript Kit (http://javascriptkit.com)
//Visit http://javascriptkit.com for this script

</script>
</head>

<body>

<style type="text/css"> 
  #bc
  {
    background-attachment:scroll;
	
	background-position:center;
	background-repeat:no-repeat;

  }
 .main
 {
    width:400px;
     height:300px;
   
   
   
   margin:10%;
   margin-top:10%;
   padding-left:30%;
    opacity:0.9;
	border-radius:20%;
	background-color:#FFFFFF;   
  

 }
	#to
	{
	 
	  padding-left:5%;
	 margin:5%; 
	}
	#from
	{
	padding-left:5%;
	}
	#date
	{
	padding-left:5%;
	 margin:5%; 
	}
	#d
	{
	
	 margin:5%; 
	}
	#f
	{
	   font-family:Calibri;
	   color:#FF6600;
	   font-size:30px;
	   font-weight:bolder;
	}
	#search
	{
	   height:30%;
	   margin:25%;
	   background-color:#993333;
	   color:#FFFFFF;
   
	}
	#m
	{
	  padding-left:5%;
	  text-decoration:underline;
	}
	#c
	{
	font-size:xx-large;
	color:#0000CC;
	font-family:forte;
	font-weight:bolder;
	}

</style>
</head>
<body id="bc" background="../../images of car/bmwz4/2014-BMW-Z4-Roadster-Open-Door.jpg">


<center>
<div class="main">
<form name="tstest" method="post">


<table cellspacing="10" cellpadding="50%" style="width:30%" >

<tr>
<td colspan="2" align="center" >
<caption id="c"> Create Carpool </caption>

 
 </tr>
 
 
<tr style="padding-left:55px;">
<td id="f">From</td>
<td>
<select name="from" id="from">
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
<select name="to" id="to">
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
<td id="d"><?php include('date.php'); ?><br /></td>
</tr>


<tr>
<td id="f">Car</td>
<td><select name="car"><option>Select Car </option>
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
<td>
<input type="submit" name="carpool" value="Request For New Carpool"  id="search" />
</td> 
<td> <input type="reset" value="Reset" id="search" />  </td>
</tr>
</table>
</form>
</div>
</center>
</center>
</div>


<?php

include('footer.php');

?>

</body>
</html>
