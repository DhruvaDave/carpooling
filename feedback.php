<?php
include_once('header.php');
error_reporting(0);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<style type="text/css">

.f
{
   font:"Courier New", Courier, monospace;
   font-size:xx-large;
   font-style:italic;
   color:#666666;
}
#s
{
 height:40px;
 width:20%;
}
.main
{
  height:300px;
  width:70%;
  
  
}
.adv
{
 padding-left:50%;
 margin-bottom:70%;     

  
}

</style>

<body >



<div class="main" style="margin:0 auto;">
<form method="post" >

<table border="10">

<tr>
 <div class="f"> Feedback <br />
</tr>

<tr >
<td>  <input type="text" name="name" placeholder="Name" style="width:265px" /> </td>
</tr>
</table>
<table>
<br />
<tr >
<td> <textarea cols="35" rows="13"> </textarea> </td>
</tr>
</table>
</table>
<table>
<br />
<tr>
  <input type="button" name="submit" value="Submit" id="s"/> 
</tr>
</table>

<div class="adv">
<?php
include('show_adv2.php');

?>
</div>

</div> 



</form>
</div>


<?php
include_once('footer.php');
?>
</body>
</html>
