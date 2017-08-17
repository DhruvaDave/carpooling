<?php
error_reporting(0);
class model
{
  public function model()
  {
    mysql_connect("localhost","root","");
	mysql_select_db("carpooling");
  }
  
  
   //reg
  public function reg_fetch()
  {
    $reg="select passenger.*, country.country_name,state.state_name,user_category.usercat_name,city.city_name from passenger join country on passenger.country=country.country_id join state on passenger.state=state.state_id join city on passenger.city=city.city_id join user_category on passenger.category=user_category.usercat_id";
	    
  
   $reg1=mysql_query($reg);
 while($fetch=mysql_fetch_array($reg1))
 {
    $data[]=$fetch;
 }
 return $data;
  }
  
  
   //delete_reg
 
 public function delete_reg($passenger_id)
 {
   
  $del_reg1="delete from  passenger where passenger_id='$passenger_id'";
   $del1=mysql_query($del_reg1); 
   return $del1;
 
 }
 
  //car
  public function car_fetch()
  {
   $sql="select * from car";
   $q=mysql_query($sql);
 while($fetch=mysql_fetch_array($q))
 {
    $data[]=$fetch;
 }
 return $data;
  }
 
 
 
   //delete_car
 
 public function delete_car($car_id)
 {
   
 $del_car="delete from  car where car_id='$car_id'";
   $del=mysql_query($del_car); 
   return $del;
 
 }
 
 //adv
  public function adv_fetch()
  {
   $adv="select * from advertisment";
   $adv1=mysql_query($adv);
 while($fetch1=mysql_fetch_array($adv1))
 {
    $data[]=$fetch1;
 }
 return $data;
  }
 
 
 
   //delete_adv
 
 public function delete_adv($adv_id)
 {
   
 $del_adv="delete from  advertisment where adv_id='$adv_id'";
   $adv=mysql_query($del_adv); 
   return $adv;
 
 }
  
  //select passenger
  
  public function p()
  {
    $pas="select * from passenger where category='1'";  
	$pas1=mysql_query($pas);
	 while($f=mysql_fetch_array($pas1))
 {
    $data1[]=$f;
 }
 return $data1;
  }
  
	//delete_passenger
 
 public function delete_pas($passenger_id)
 {
   
  $del_pas1="delete from  passenger where passenger_id='$passenger_id'";
   $d=mysql_query($del_pas1); 
   return $d;
 
 }
  
  } 
 
  