<?php
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">

 #t
  {

   border-radius:2px ;
   margin:2%;
  }
 
 #b
  {
     height:30px;
     width:40%;
     border:thick;
     border-radius:7px; 
     background-color:#999999;
  }
  </style>
	
</head>

<body>
<form method="post">
 <table>
 <tr>
 <td>Laicence No</td>
 <td><input type="text" name="lno" id="t"/></td>
 </tr>
 
 <tr>
  <td colspan="2" align="center"><input type="submit" name="submit" value="submit" id="b" /> </td>
 </tr>
 
 <?php
 if(isset($_REQUEST['submit']))
 {
   header('location:../driver/./show_passenger.php');
 
 }
 
 ?>
 
</table>
</form>
</body>
</html>
