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
#c
	{
	font-size:xx-large;
	color:#0000FF;
	font-family:forte;
	}
	
#f
	{
	   font-family:forte;
	   color:#990066;
	   font-size:24px;
	}
	#f1
	{
	   
	   color:#660033;
	   font-size:20px;
	}
</style>

</head>

<body bgcolor="#FFFFFF">

<div class="main">





<form name="tstest" method="post">
<center>
<table border="2" align="center" style="margin-bottom:10%">


<caption id="c"> Available Cars </caption>


<tr border="3" style="border:solid 3px #000000" id="f">
<td border="3" style="border:solid 3px #000000" id="f" align="center" width="100px" height="20px"> Name </td>
<td border="3" style="border:solid 3px #000000" id="f" align="center"width="100px" height="20px"> Image </td>								
<td border="3" style="border:solid 3px #000000" id="f" align="center" width="100px" height="20px">  Feature </td>
<td border="3" style="border:solid 3px #000000" id="f" align="center" width="100px" height="20px"> Price </td>                      
</tr>					 <?php
					 foreach($fcar1 as $c)
					 {
					 ?>
				
					 			<tr border="3" style="border:solid 3px #000000">

<td border="3" style="border:solid 3px #000000" id="f1" height="20px"><?php echo $c['car_name']; ?></td> 




<td border="3" style="border:solid 3px #000000" id="f1" height="20px"> <img src="<?php echo $c['car_image']; ?>" />  </td>
<td border="3" style="border:solid 3px #000000" id="f1" height="20px"><?php echo $c['car_feature']; ?></td> 

<td border="3" style="border:solid 3px #000000" id="f1" height="20px"><?php echo $c['car_price']; ?></td>
 </tr>
						
						<?php
						
						}
						
						?>
					 
						
                    </table>
                      


</form>
</div>
</center>
</body>
</html>
<?php
 include('footer.php');
?>