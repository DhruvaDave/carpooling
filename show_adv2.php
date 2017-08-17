<?php

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

.left
{
 
  height:100px;
  width:25%;
 
  
}
#a
{
  padding-left:10%;
  border:dashed;
  border-color:#00CCFF;
}
.img
{
  height:150px;
  width:40%;
  
}
#p
{
  color:#000099;
  font-style:oblique;
  font-size:xx-large;
  font-weight:bold;
}
#f
{
color:#000000;
}
</style>

</head>
<body bgcolor="#FFFFFF">



<div class="left"> 



<form name="tstest" method="post"  id="a">
<p id="p"> Advertisment  </p>
<marquee direction="down" height="880">
<table border="2" align="center">



                   <?php
					foreach($sadv as $c)
					{  
					
					?>	
					
					
<tr>
<td id="f"> Name: </td>
<td id="f"><?php echo $c['adv_name']; ?></td> 
</tr>

<tr>
<td id="f"> Image: </td>
<td id="f"> <img src="<?php echo $c['adv_image']; ?>" /></td>
 </tr>
						
						
<tr> 
<td id="f"> Feature: </td> 
<td id="f"><?php echo $c['adv_feature']; ?></td>
</tr>
						
<tr> 
<td id="f"> Days:</td>
<td height="50" id="f"><?php echo $c['adv_days']; ?></td>
 </tr>
								
                     
						<?php
						
						
						}
						?>
						
                      </tbody>
                    </table>
                      

</marquee>

</form>

</div>

<?php

?>
</body>
</html>
