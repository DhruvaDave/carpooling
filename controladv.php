<?php

include('modeladv.php');
error_reporting(0);
$obj=new modeladv;

//post_adv
  if(isset($_REQUEST['postadv']))
  {
     $n=$_REQUEST['name'];
	 $i='../uploadadv/'.$_FILES['image']['name'];
	 $f=$_REQUEST['feature'];
	 $d=$_REQUEST['days'];
	 
	 $r='../uploadadv/'.$_FILES['image']['name'];
	
	$o=$_FILES['image']['tmp_name'];
	
	move_uploaded_file($o,$r);
	
	

	 
	 $adv=$obj->insadv($n,$i,$f,$d);
	
	 header('location:show_adv.php');
   }
  
  
    //show_adv
   
    
  $show_adv=$obj->adv_sel();
  while($s1=mysql_fetch_array($show_adv))
  {
   $r[]=$s1;
   
  }

  //delete_adv
  
  if(isset($_REQUEST['did']))
 {
     
	 $adv_id=$_REQUEST['did'];
	 $l=$obj->delete_adv($adv_id);
	 header('location:show_adv.php');
 }
 
 // edit_adv
   if(isset($_REQUEST['eid']))
   {
     $adv_id=$_REQUEST['eid'];
	  $y=$obj->edit_adv($adv_id);
	  $f=mysql_fetch_array($y);
	 }
   
  
  //update_adv
  
  if(isset($_REQUEST['update']))
  {
     
	 $id=$_REQUEST['eid'];
	 $n=$_REQUEST['name'];
	 $i='../uploadadv/'.$_FILES['image']['name'];
	 $f=$_REQUEST['feature'];
	 $p=$_REQUEST['days'];
	 
	$z=$obj->update_adv($id,$n,$i,$f,$p);
	
	header('location:show_adv.php');
  
  }
  
  
  ?>