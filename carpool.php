<?php
 include('header.php');
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

   height:400px;

 }
	#to
	{
	 margin:5%; 
	}
	#from
	{
	 margin:5%; 
	}
	#date
	{
	 margin:5%; 
	}
	#time
	{
	 margin:5%; 
	}
	
	.search
	{
	   border-radius:15px;
	   height:50%;
	   width:50%;
	   
   
	}
</style>
</head>
<body>
<div class="main">


<form name="tstest" method="post" >

<center>
<table cellspacing="10" cellpadding="50%" style="width:30%" >

<tr>
<td colspan="2" align="center" >
 <center><h1><b>Create Carpool</b></h1> </center> </td>
 </tr>
<tr>
<td>From</td>
<td>
<select name="from" id="from">

<option value="1">Mumbai</option>
<option value="2">Delhi</option>
<option value="3">Bangalore</option>
<option value="4">Pune</option>
<option value="5">Chennai</option>
<option value="6">Goa</option>
<option value="7">Jaipur</option>
<option value="8">Hyderabad</option>
<option value="9">Chandigarh</option>
<option value="10" selected="selected">Ahmedabad</option>
<option value="11">Surat</option>
<option value="12">Indore</option>
<option value="13">Lucknow</option>
<option value="14">Amritsar</option>
<option value="15">Ludhiana</option>
<option value="16">Visakhapatnam</option>
<option value="17">Coimbatore</option>
<option value="18">Nagpur</option>
<option value="19">Nashik</option>
<option value="20">Vadodara</option>
<option value="21">Kolkata</option>
<option value="22">Aurangabad</option>
</select>
</td>
</tr>

<tr>
<td>To</td>
<td>
<select name="to" id="to">

<option value="1">Mumbai</option>
<option value="2">Delhi</option>
<option value="3">Bangalore</option>
<option value="4">Pune</option>
<option value="5">Chennai</option>
<option value="6">Goa</option>
<option value="7">Jaipur</option>
<option value="8">Hyderabad</option>
<option value="9">Chandigarh</option>
<option value="10" selected="selected">Ahmedabad</option>
<option value="11">Surat</option>
<option value="12">Indore</option>
<option value="13">Lucknow</option>
<option value="14">Amritsar</option>
<option value="15">Ludhiana</option>
<option value="16">Visakhapatnam</option>
<option value="17">Coimbatore</option>
<option value="18">Nagpur</option>
<option value="19">Nashik</option>
<option value="20">Vadodara</option>
<option value="21">Kolkata</option>
<option value="22">Aurangabad</option>
</select>
</td>
</tr>

<tr>
<td>Date</td>
<td>
<input type="Text" name="timestamp" id="date">
<a href="javascript:show_calendar('document.tstest.timestamp', document.tstest.timestamp.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
</td>
</tr>

<tr>
<td><input type="checkbox" /> </td>
<td>Returning Date</td>
<td>
<input type="Text" name="timestamp" id="date">
<a href="javascript:show_calendar('document.tstest.timestamp', document.tstest.timestamp.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Request For New Carpool"  />
</td>
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
