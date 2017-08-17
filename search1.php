<?php
 include_once('control.php');
 include_once('header.php');
 error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table border="1">
       					<tr> Available Car</tr>
                       <tr>
					   <td> Car</td>
					   <td> Image </td>
						<td> From </td>
						<td>Destination  </td>
						<td> Price </td>
						
						<td> <a href="">Book Now</a> </td>
						</tr>
	                 <?php
					 foreach($rfs as $s1)
					 {
					 ?>					
					
						
					 <tr>
					<td><?php echo $s1['car_name']; ?></td>
					<td><img src="<?php echo $s1['car_image']; ?>" /> </td>
					<td><?php echo $s1['car_source']; ?></td>
					<td><?php echo $s1['car_destination']; ?></td>
					<td><?php echo $s1['car_price']; ?></td>
					 
					 </tr>
					 <?php
					 
					 }
					 
				?>
						
</table>
</form>

</body>
</html>
<?php
include('footer.php');
?>