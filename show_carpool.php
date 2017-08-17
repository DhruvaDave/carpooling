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
 	#c
	{
	font-size:xx-large;
	color:#0000FF;
	font-family:forte;
	}
	#table
	{
	margin-left:30%;
	}
	#p
	{
	color:#FFFFFF;
	background-color:#00CCCC;
	width:100%;
	height:100%;
	}
	

	
</style>
</head>
<body >



<?php
include('dsidebar.php');
?>



<form method="post" id="d">
<table border="3" style="border:solid 3px #000000" id="table" height="400px" width="500px">
<caption id="c"> New Carpool </caption>
                       <tr border="3" style="border:solid 1px #000000">
					   <td border="3" style="border:solid 1px #000000"> Name </td>
					   <td border="3" style="border:solid 1px #000000"> Source </td>
					   <td border="3" style="border:solid 1px #000000"> Destination </td>
						<td border="3" style="border:solid 1px #000000"> Date </td>
						<td border="3" style="border:solid 1px #000000"> Car </td>
						
						
						</tr>
	                 <?php
					 foreach($pool1 as $s1)
					 {
					 ?>					
	
						
					 <tr border="3" style="border:solid 2px #000000">
					 <td border="3" style="border:solid 1px #000000"> <?php echo $_SESSION["name"];?>  </td>
					<td border="3" style="border:solid 1px #000000"><?php echo $s1['c_from']; ?></td>
					<td border="3" style="border:solid 1px #000000"><?php echo $s1['c_to']; ?></td>
					<td border="3" style="border:solid 1px #000000"><?php echo $s1['c_date']; ?></td>
					
					<td border="3" style="border:solid 1px #000000"><?php echo $s1['c_car']; ?></td>
					
					 
					 </tr>
					 <?php
					 
					 }
					 				  $ty= $s1['c_from'];
									  $ty1=$s1['c_to'];
									  $ty2=$s1['c_date'];
									  $ty3=$s1['c_price'];
									  $ty4=$s1['c_car'];
									 
									   
					 
				?>
				</table>
				</form><br />
				<br />
				
<?php
 include('footer.php');
?>
</body>
</html>
