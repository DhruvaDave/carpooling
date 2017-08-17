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
</head>
<body>

<div class="main">

<form method="post">
<table border="1" bordercolor="#000000">
<tr><td> Reservation</td> </tr>
<?php
foreach($if1 as $e)
{
?>
<tr>
<td>Name:</td>
<td> <?php echo $e['name']; ?></td>
</tr>
<tr>
<td> No Of People</td>
<td> <?php echo $e['people'];?> </td>
</tr>
<?php
}
?>
</table>
</form>
</div>
<?php
 include('footer.php');
?>
</body>
</html>
