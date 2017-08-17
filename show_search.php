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
//Visit http://javascriptkit.ecom for this script

</script>

<html>
<head>
<title>  </title>
</head>
<body>
<table border="1" >
<tr>
						<td> From </td>
						<td> To </td>
						<td> Date </td>
						<td> Time </td>
						
						
						
						</tr>
						
						 <?php
					    foreach($res  as $a)
						{
						?>
						
					 <tr>
					 <td><?php echo $a['source']; ?></td>
					  <td><?php echo $a['destination']; ?></td>
					   <td><?php echo $a['date']; ?></td>
					    <td><?php echo $a['time']; ?></td>
						
						
					 </tr>
						<?php
						
						}
						
						?>
					  
						
                  </table>     
					   					   
<?php
 include('footer.php');
?>
</body>
</html>
