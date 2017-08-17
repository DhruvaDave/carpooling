<?php
  error_reporting(0);
  mysql_connect("localhost","root","");
  mysql_select_db("carpooling");
  
  if(isset($_REQUEST['cid']))
  {
    $cid=$_REQUEST['cid'];
	
	$sql="select * from state where country_id='$cid'";
	$q=mysql_query($sql);
	while($f=mysql_fetch_array($q))
	{
	?>
	
	<option value="<?php echo $f['state_id'];?>"><?php echo $f['state_name'];?></option>
	<?php
	}
  }
  
  
  
  if(isset($_REQUEST['sid']))
  {
    $sid=$_REQUEST['sid'];
	
	$sql1="select * from city where state_id='$sid'";
	$q1=mysql_query($sql1);
	while($f1=mysql_fetch_array($q1))
	{
	?>
	
	<option value="<?php echo $f1['city_id'];?>"><?php echo $f1['city_name'];?></option>
	<?php
	}
  }
?>
