<?php
error_reporting(0);
class model
{
  public function model()
  {
    mysql_connect("localhost","root","");
	mysql_select_db("carpooling");
  }
   
    //select country
  public function sel()
  {
   $sql="select * from country";
   $q=mysql_query($sql);
 while($fetch=mysql_fetch_array($q))
 {
    $data[]=$fetch;
 }
 return @$data;
  }
  
//post_car

  public function ins($n,$r,$f,$s,$d,$p)
  {
     $ins="insert into car(car_name,car_image,car_feature,car_source,car_destination,car_price) values('$n','$r','$f','$s','$d','$p')";
	 $ins1=mysql_query($ins);
	 
  }


//show_car

public function car_sel()
{
 $car="select * from car";
 $car1=mysql_query($car);
 return $car1;
}
 
 
 //delete_car
 
 public function delete_car($car_id)
 {
   
    $del_car="delete from car where car_id='$car_id'";
   $del=mysql_query($del_car);
 
 
 }
//ed_car
 public function edit_car($car_id)
{
 $edit_car="select *from car where car_id=$car_id";
 $edit_car1=mysql_query($edit_car);
 return  $edit_car1;
}
 
 
 //update_car
 
 public function update_car($id,$n,$i,$f,$s,$d,$p)
 {
 
    $update="update car set car_name='$n',car_image='$i',car_feature='$f',car_source='$s',car_destination='$d',car_price='$p' where car_id='$id'";
	$update1=mysql_query($update);
    

 
 }
 
  //select_city
  
  public function city()
  {
     $r="select city_name from city";
	 $rr=mysql_query($r);
	
	 return $rr;
  } 

     //profile
  
 public function pro1($pr_id1)
  {
  
     
      $pr="select passenger.*, country.country_name,state.state_name,user_category.usercat_name,city.city_name from passenger join country on passenger.country=country.country_id join state on passenger.state=state.state_id join city on passenger.city=city.city_id join user_category on passenger.category=user_category.usercat_id where passenger.passenger_id='$pr_id1'";
	   
      $pro1=mysql_query($pr);
	  $fet=mysql_fetch_array($pro1);
	   return $fet;
  }
  
  
  //  $pr="select * from passenger  where passenger_id='$pr_id1'";	
  //ed_pro
 public function edit_pro($pr1_id)
{
 $edit_pro="select * from passenger where passenger_id='$pr1_id'"; 
 $edit_pro1=mysql_query($edit_pro);
 $res=mysql_fetch_array($edit_pro1);
 return  $res;
}

//update_pro
 
 public function update_pro($f1,$l,$t,$n,$g,$e,$p,$cat,$c,$s,$city,$pr_id)
 {
 
   echo  $up="update passenger set fname='$f1',lname='$l',address='$t',phoneno='$n',gender='$g',email='$e',password='$p',category='$cat',country='$c',state='$s',city='$city' where passenger_id='$pr_id'"; 
	
	$up1=mysql_query($up);
	
 }   

 //category

public function cat_fetch()
{
   $r="select * from user_category";
   $rr=mysql_query($r);
    while($f=mysql_fetch_array($rr))
 {
    $d[]=$f;
 }
 return $d;
  }

 
 //country
  public function sel_con()
  {
   $sql="select * from country";
   $q=mysql_query($sql);
 while($fetch=mysql_fetch_array($q))
 {
    $data[]=$fetch;
 }
 return $data;
  }
  	
	 
 }
 
?>