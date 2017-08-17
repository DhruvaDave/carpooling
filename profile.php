<?php
 include_once('control.php');
 include_once('header.php');
 include('dsidebar.php');
 error_reporting(0);
 
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="../26/ts_picker.js">

//Script by Denis Gritcyuk: tspicker@yahoo.com
//Submitted to JavaScript Kit (http://javascriptkit.com)
//Visit http://javascriptkit.com for this script
<script type="text/javascript"src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#b1").mouseover(function() {
	
	$("#form1").fadeIn("2000");
	});

});
</script>
</script>

<style type="text/css">

#c
	{
	font-size:36px;
	color:#0000FF;
	font-family:forte;
	margin:3%;
	}
	#f
	{
	   font-family:Calibri;
	   color:#CC3366;
	   font-size:24px;
	   font-style:italic;
	   font-weight:bolder;
	}
	#f1
	{
	   font-family:Calibri;
	   color:#9933FF;
	   font-size:22px;
	   font-style:italic;
	   
	}
	

</style>

</head>

<body class="  ">
<div class="bg-dark dk" id="wrap">
      <div id="top">
	  
	  <div id="content">
        <div class="outer">
          <div class="inner bg-light lter" style="padding:12%">
            <div class="col-lg-12">

 <br /> 

<center>


<form method="post">
<table border="2">
<tr>
<caption id="c"> Profile </caption>
 
<tr border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px"> 
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">FirstName</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"> <?php echo $prof['fname']."<br>"; ?> </td> </tr> 


<tr> 
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">LastName</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"> <?php echo $prof['lname']."<br>"; ?> </td> </tr> 


<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">Address</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"> <?php echo $prof['address']."<br>"; ?> </td> </tr> 

<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">Phone No</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"> <?php echo $prof['phoneno']."<br>"; ?> </td> </tr> 
<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">Gender </td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"><?php echo $prof['gender']."<br>"; ?> </td> </tr>
<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">Email</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"><?php echo $prof['email']."<br>"; ?> </td> </tr> 
<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px"> Password</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"><?php echo $prof['password']."<br>"; ?> </td> </tr> 

<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">Category</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"><?php echo $prof['usercat_name']."<br>"; ?> </td> </tr> 
<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">Country</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"><?php echo $prof['country_name']."<br>"; ?> </td> </tr> 
<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">State</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"><?php echo $prof['state_name']."<br>"; ?> </td> </tr>
<tr>
<td border="3" style="border:double 3px #000000" id="f" align="center" width="100px" height="20px">City</td>
<td border="3" style="border:double 3px #000000" id="f1" align="center" width="100px" height="20px"><?php echo $prof['city_name']."<br>"; ?> </td> </tr> 





<tr border="3" style="border:solid 3px #000000" id="f" align="center" width="100px" height="20px">
<td colspan="2" align="center" > <a href="reg.php?eid=<?php echo $prof['passenger_id'] ?>"> Edit </a>
                   </td>
</tr>
</table>
</form>
<br /> <br />
</center>
</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					
<?php
 include('footer.php');
?>
</body>
</html>
