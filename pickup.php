<?php
 include('controls.php');
 include('header.php');
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
<style type="text/css"> 

 #main
 {
   width:400px;
   height:390px;
   border-radius:90px;
   border:#000000;
   background-color:#999999;
   margin:10%;
   margin-top:10%;
   padding-left:10%;
   background:regb(0,0,0,0.2);
     
    }
	
	#email
	{
	padding:3%;
     width:50%;
    }
	#label
	{
	color:#0000FF;
	font-size:24px;
	font-weight:bolder;
	float:right;
	
	}
	#submit
	{
	   padding:3%;
	  
    }
	#car
	{
	  font-size:x-large;
	  
	   
	}
	#time
	{
	  padding:3%;
     width:50%;
	}
	#search
	{
	height:45px;
	width:100px;
    background-color:#993399;
	color:#FFFFFF;
	font-size:16px;
	text-shadow:#00FF00;
	font-weight:500;
	}

</style>
</head>
<body bgcolor="#FFFFFF">
<div id="main">
<center>


<form name="tstest" method="post">




<table cellspacing="10" cellpadding="50%">

<tr>
<td colspan="2" id="label">  Jurney Details   </td>
 </tr>
 
<tr>
<td> Name </td>
<td><input type="text" name="name" style="height:25px" /> </td>
</tr>

<tr>
<td id="peopel">No. of People</td>

<td><input type="text" name="people" style="height:25px" />
</td>
</tr>

<tr>
<td id="car"> <a href="Lamborghini-1024x576.jpeg">Choose Your Car </td>
</tr>

<tr>
<td id="time">Pickup Time</td>

<td><input type="text" name="time"  />
</td>
</tr>

<tr>
<td> Pickup Address </td>
<td> <textarea cols="3" rows="3"> </textarea> </td>
</tr>

<tr>
<td colspan="2" align="center" id="submit" >
<input type="submit" name="search" value="Search"  id="search"/>
</td>
</tr>



</table>
</form>
</center>
</div>

<?php
 include('footer.php');
?>
</body>
</html>
