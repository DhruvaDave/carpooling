<?php
error_reporting(0);
include('model.php');
$obj=new model;

//reg
$re1=$obj->reg_fetch();

 //delete_reg
  
  if(isset($_REQUEST['did']))
 {
     
	 $passenger_id=$_REQUEST['did'];
	 $l1=$obj->delete_reg($passenger_id);
	 //header('location:show_car1.php');
 
 }
 
 
 //car
$re=$obj->car_fetch();

 
 
  //delete_car
  
  if(isset($_REQUEST['cardid']))
 {
     
	 $car_id=$_REQUEST['cardid'];
	 $l=$obj->delete_car($car_id);
	 //header('location:show_car1.php');
 
 }
 
 //adv
$adv1=$obj->adv_fetch();
 
 
  //delete_adv
  
  if(isset($_REQUEST['advdid']))
 {
     
	 $adv_id=$_REQUEST['advdid'];
	 $l=$obj->delete_adv($adv_id);
	 //header('location:show_car1.php');
 
 }

//select passenger
$ps=$obj->p();

 //delete_passenger
  
  if(isset($_REQUEST['did']))
 {
     
	 $passenger_id=$_REQUEST['did'];
	 $j=$obj->delete_pas($passenger_id);
	 //header('location:show_car1.php');
 
 }
 
 
?>