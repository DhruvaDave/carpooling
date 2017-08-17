<?php
include_once('model.php');
error_reporting(0);
session_start();

$obj=new model();



$obj=new model;
//select country
$s=$obj->sel();


//post_car
  if(isset($_REQUEST['submit']))
  {
     $n=$_REQUEST['name'];
	 $i='../upload/'.$_FILES['image']['name'];
	 $f=$_REQUEST['feature'];
	 $s=$_REQUEST['sorce'];
	 $d=$_REQUEST['destination'];
	 @$p=$_REQUEST['price'];
	 
      $r='../upload/'.$_FILES['image']['name'];
	
	$o=$_FILES['image']['tmp_name'];
	
	move_uploaded_file($o,$r);
	
	
	 
	 $car=$obj->ins($n,$r,$f,$s,$d,$p);
	
	 header('location:show_car1.php');
   }
   
   //show_car
   
  $show_car=$obj->car_sel();
  while($s=mysql_fetch_array($show_car))
  {
   $res[]=$s;
   
  }
  
 //delete_car
  
  if(isset($_REQUEST['did']))
 {
     
	 $car_id=$_REQUEST['did'];
	 $l=$obj->delete_car($car_id);
	 header('location:show_car1.php');
 
 }
   // edit_car
   if(isset($_REQUEST['eid']))
   {
     $car_id=$_REQUEST['eid'];
	  $x=$obj->edit_car($car_id);
	  $fetch=mysql_fetch_array($x);
	 }
   
  
  //update_car
  
  if(isset($_REQUEST['update']))
  {
     
	 $id=$_REQUEST['eid'];
	 $n=$_REQUEST['name'];
	 $i='../upload/'.$_FILES['image']['name'];
	 $f=$_REQUEST['feature'];
	 $s=$_REQUEST['source'];
	 $d=$_REQUEST['destination'];
	 $p=$_REQUEST['price'];
	 
	$z=$obj->update_car($id,$n,$i,$f,$s,$d,$p);
	
	header('location:show_car1.php');
  
  }
  
  
  
  
 
 //search
 
 
   if(isset($_REQUEST['search']))
   {
     $f=$_REQUEST['from'];
	 $t=$_REQUEST['to'];
	 $d=$_REQUEST['date'];
	 $time=$_REQUEST['time'];
	 
	 $s=$obj->s_ins($f,$f,$d,$time);
	
	 header('location:show_search.php');
   
   }
 

  //select_city
  
  $city=$obj->city();
   while($city1=mysql_fetch_array($city))
	 {
	    $t1[]=$city1;
	 } 

  //profile
if(isset($_SESSION["id"]))
{
	$pr_id1=$_SESSION["id"];
	$prof=$obj->pro1($pr_id1);
	echo $prof['fname'];
	 			

}



//edit_profile

if(isset($_REQUEST['eid1']))
{
$pr_id = $_REQUEST['eid1'];
$fq=$obj->pro1($pr_id1);
}


 
   //update_pro
  
  if(isset($_REQUEST['update']) && ($_REQUEST['eid1']) )
  {
     $pr_id=$_REQUEST['eid1'];
    $f1=$_REQUEST['fname'];
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
	 
	  
	$z=$obj->update_pro($f1,$l,$t,$n,$g,$e,$p,$cat,$c,$s,$city,$pr_id);
	
	
	header("location:profile.php?pr_id='$pr_id'");
  
  }
  
   //country
$re=$obj->sel_con();

//category

$ca=$obj->cat_fetch();


?>
