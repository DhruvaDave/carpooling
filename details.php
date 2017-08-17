<?php
 include('control.php');
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
   width:40%;
   height:30%;
   border-radius:90px;
   border:#000000;
   background-color:#999999;
   margin:10%;
   margin-top:10%;
   padding-left:10%;
  
 
  
    }
	
	#email
	{
	padding:3%;
     width:50%;
    }
	#e
	{
	color:#0000FF;
	font-size:24px;
	font-weight:bolder;
	float:right;
	
	}
	#s
	{
	   padding:3%;
	  
    }
	#s1
	{
	height:45px;
	width:100px;
    background-color:#993399;
	color:#FFFFFF;
	font-size:16px;
	font-weight:500;
	}

</style>
</head>
<body bgcolor="#FFFFFF">
<div id="main">
<center>


<form name="tstest" method="post">



 <div class="main">
<table cellspacing="10" cellpadding="50%">

<tr>
<td colspan="2" id="e">
 Email Details   </td>
 </tr>



<tr>
<td id="email">Email Address</td>

<td><input type="text" name="email" style="height:25px" />
</td>
</tr>

<tr>
<td colspan="2" align="center" id="s" >
<input type="submit" name="search" value="Search"  id="s1"/>
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
