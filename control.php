<?php

include('model.php');
error_reporting(0);
session_start();
$obj=new model();
//show_passenger
	 $i=$_SESSION["id"];
	 $pass=$obj->pro($i);


//profile
if(isset($_SESSION["id"]))
{
	$pr_id1=$_SESSION["id"];
	$prof=$obj->pro1($pr_id1);
	 
			
			
			

}


//edit_profile

if(isset($_REQUEST['eid']))
{
$pr_id = $_REQUEST['eid'];
$f=$obj->pro1($pr_id1);
}

 
   //update_pro
  
  if(isset($_REQUEST['update']) && ($_REQUEST['eid']) )
  {
     $pr_id=$_REQUEST['eid'];
    $f=$_REQUEST['fname'];
	 $l=$_REQUEST['lname'];
	 $t=$_REQUEST['tarea'];
	 $n=$_REQUEST['no'];
	 @$g=$_REQUEST['gen'];
	 $e=$_REQUEST['email'];
	 $p=$_REQUEST['password'];
	 $cat=$_REQUEST['cat'];
	 $c=$_REQUEST['country'];
	 $s=$_REQUEST['state'];
	 $city=$_REQUEST['city'];
	 
	  
	$z=$obj->update_pro($f,$l,$t,$n,$g,$e,$p,$cat,$c,$s,$city,$pr_id);
	
	
	header("location:profile.php?pr_id=$pr_id");
  
  }

  //country
$re=$obj->sel_con();

//category

$ca=$obj->cat_fetch();



?>