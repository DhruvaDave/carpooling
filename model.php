<?php
error_reporting(0);
class model
{
public function model()
  {
    mysql_connect("localhost","root","");
	mysql_select_db("carpooling");
  }
  
  //show_passenger
  
    public function pro($wh)
  {
  
     
      $pass="select passenger.*, country.country_name,state.state_name,user_category.usercat_name,city.city_name from passenger join country on passenger.country=country.country_id join state on passenger.state=state.state_id join city on passenger.city=city.city_id join user_category on passenger.category=user_category.usercat_id join booking on passenger.passenger_id=booking.passenger_id where booking.driver_id='$wh' ";
	   
      $pro1=mysql_query($pass);
	  while($fe=mysql_fetch_array($pro1))
	{
	   $s[]=$fe;
	}
     return $s;
	    
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
echo $edit_pro="select * from passenger where passenger_id='$pr1_id'"; exit;
 $edit_pro1=mysql_query($edit_pro);
 $res=mysql_fetch_array($edit_pro1);
 return  $res;
}

//update_pro
 
 public function update_pro($f,$l,$t,$n,$g,$e,$p,$cat,$c,$s,$city,$pr_id)
 {
 
     $up="update passenger set fname='$f',lname='$l',address='$t',phoneno='$n',gender='$g',email='$e',password='$p',category='$cat',country='$c',state='$s',city='$city' where passenger_id='$pr_id'"; 
	
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