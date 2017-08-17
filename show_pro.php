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

#d
{
   padding-left:300%;
   font-size:x-large;
   color:#FF0000;
   height:50%;
}

#f
{
  padding:10%;
padding-left:280%;
     color:#0066FF;
}

#f1
{
   padding:10%;
   padding-left:300%;
     
}

#e
	{
	    padding:10%;
padding-left:280%;
    
 background-color:#993333;
	   color:#FFFFFF;
   
	}
	

</style>

</head>
<body bgcolor="#FFFFFF">



<div id="main">



<form name="tstest" method="post">
<table cellspacing="50%">

<tr>
<td id="d"> <h1> <b> Profile </b> </h1> </td>
</tr>
 <?php
					    foreach($res  as $a)
						{
						?>
<tr>
<td id="f">
 First Name </td>
 <td id="f1"> <input type="text" value="<?php echo   $a['fname']; ?>" />  </td>
 </tr>



<tr>
<td id="f">Last Name </td>
<td id="f1"> <input type="text" value="<?php echo  $a['lname']; ?>" /> </td>
</tr>

<tr>
<td id="f"> Address </td>
<td id="f1"> <input type="text" value="<?php echo  $a['address']; ?>" /> </td>
</tr>

<tr>
<td id="f"> Phone No.  </td>
<td id="f1"> <input type="text" value="<?php echo  $a['phoneno']; ?>" /> </td>
</tr>

<tr>
<td id="f"> Gender </td>
<td id="f1"> <input type="text" value="<?php echo  $a['gender']; ?>" /> </td>
</tr>

<tr>
<td id="f"> Email </td>
<td id="f1"> <input type="text" value="<?php echo  $a['email'];  ?>" />  </td>
</tr>

<tr>
<td id="f"> Password </td>
<td id="f1">  <input type="password" value="<?php echo   $a['password']; ?>" /> </td>
</tr>

<tr>
<td id="f"> Category </td>
<td id="f1"> <input type="text" value="<?php echo $a['category']; ?>" /> </td>
</tr>

<tr> 
<td id="f"> Country </td>
<td id="f1"> <input type="text" value="<?php echo  $a['country']; ?>" /> </td>
</tr>

<tr> 
<td id="f"> State </td>
<td id="f1"> <input type="text" value="<?php echo  $a['state']; ?>" /> </td>
</tr>

<tr>
<td  id="f"> City </td>

<td id="f1"> <input type="text"  value="<?php echo	$a['city']; ?>"  /> </td>
</tr>


<tr>
<td id="f"> <td> <a href="show_pro.php?eid=<?php echo $a['passenger_id'] ?>">  <input type="button" name="edit" value="Edit" /> </td></tr>
</table>

                      
						
					
	                  	 		         			      
						<?php
						
						}
						
						?>
                    


</form>

<?php
 include('footer.php');
?>
</body>
</html>
