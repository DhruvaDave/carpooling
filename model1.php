<?php
error_reporting(0);
class model
{
  public function model()
  {
    mysql_connect("localhost","root","");
	mysql_select_db("carpooling");
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
  public function sel()
  {
   $sql="select * from country";
   $q=mysql_query($sql);
 while($fetch=mysql_fetch_array($q))
 {
    $data[]=$fetch;
 }
 return $data;
  }
  
  //reg_insert
  
  public function r_ins($f,$l,$t,$n,$g,$e,$p,$cat,$c,$s,$city)
  {
     $ins="insert into passenger(fname,lname,address,phoneno,gender,email,password,category,country,state,city) values('$f','$l','$t','$n','$g','$e','$p','$cat','$c','$s','$city')";
	
	 $ins1=mysql_query($ins);
	 
	 
  }

  //login
  
 public function login($u,$p)
	{
		 $sel = "select * from passenger where email = '$u' and password = '$p'";
	
		$ex = mysql_query($sel);
		return $ex;
	}
	
	 //recover_password
	 
	 public function recover($e)
	 {
	     
	    $re="select password from passenger where email='$e'";
		$rre=mysql_query($re);
		$rre1=mysql_fetch_array($rre);	
		return $rre1;
	 }
	 
  //profile
  
  public function pro($pr_id1)
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
 
 public function update_pro($f,$l,$t,$n,$g,$e,$p,$cat,$c,$s,$city,$pr_id)
 {
 
     $up="update passenger set fname='$f',lname='$l',address='$t',phoneno='$n',gender='$g',email='$e',password='$p',category='$cat',country='$c',state='$s',city='$city' where passenger_id='$pr_id'"; 
	
	$up1=mysql_query($up);
	
 }   


 
 
 


 
//show_car
public function sel_car()
{
 
    $se="select * from car";
	$see=mysql_query($se);
	 while($fe=mysql_fetch_array($see))
	{
	   $se_car[]=$fe;
	}

	return $se_car;
 }


 
  //price


		public function price($pid)
		{   
		
			$p="select * from car where car_price='$pid'";
			$p1=mysql_query($p);
			while($fet=mysql_fetch_array($p1))
		   {
			  $fetchcar[]=$fet;
		   }
		   return $fetchcar;
		}
		
		
		//brand
		
		
		public function brand($bid)
		{   
		
			$b="select * from car where car_name='$bid'";
			$b1=mysql_query($b);
			while($fet1=mysql_fetch_array($b1))
		   {
			  $fetchcar1[]=$fet1;
		   }
		   return $fetchcar1;
		}	
          
		  //show_adv
public function sel_adv()
{
 
    $sadv="select * from advertisment";
	$sadv1=mysql_query($sadv);
	 while($fetchadv=mysql_fetch_array($sadv1))
	{
	   $se_adv1[]=$fetchadv;
	}

	return $se_adv1;
 }

//createcarpool_fetch
 
  public function pool()
  {
   $pool="select * from carpool";
   $p=mysql_query($pool);
 while($t=mysql_fetch_array($p))
 { 
    $d[]=$t;
 }
 return $d;
  }
 
 
 //carpool_insert

  
  public function c_ins($f,$t,$date1,$p,$cc)
  {
     $i="insert into carpool(c_from,c_to,c_date,c_price,c_car) values('$f','$t','$date1','$p','$cc')";	
	 $i1=mysql_query($i);	 
  }
  //carpool in booking insert
 
public function cb_ins($na1,$f1,$t1,$dat1,$cc1,$p1)
  {
      $po="insert into booking(passenger_id,source,destination,b_date,car,price) values('$na1','$f1','$t1','$dat1','$cc1','$p1')";	
	 $po1=mysql_query($po);	 
  }
  //fetch_car
  
  public function car_sel()
{
 $car="select * from car";
 $car1=mysql_query($car);
 return $car1;
}

 //fetch_city
  
  public function city_sel()
{
 $city="select * from city";
 $city1=mysql_query($city);
 return $city1;
}


 //fetch_driver
 
 public function dri()
 {
   $d="select * from passenger where category='2'"; 
   $d1=mysql_query($d);
 return $d1;
 
 }
 
 //booking_insert
 
 public function b_ins($n1,$p1,$date,$c1,$dr1,$f1,$t1,$a1)
 {
    $in="insert into booking(passenger_id,people,b_date,car,driver_id,source,destination,address) values ('$n1','$p1','$date','$c1','$dr1','$f1','$t1','$a1')"; 
	$in1=mysql_query($in);
	
 }
 
 //search
 public function sarch($ff,$df)
 {
   $s="select * from car where car_source='$ff' and car_destination='$df'";
   $ss=mysql_query($s);
    while($ff=mysql_fetch_array($ss))
  		{
		  $xx[]=$ff;
		}
    return $xx;
 }
 

 
 
 //package_fetch_car
  public function p_car()
{
 $pac="select * from car where car_price<=500";
 $pac1=mysql_query($pac);
 return $pac1;
}
 
 
 //package_ins
 
 public function i_ins($n,$f,$t,$d1,$d,$c,$p)
 {
    $rt="insert into package (user_name,package_from,package_to,package_date,package_days,package_car,package_price) values ('$n','$f','$t','$d1','$d','$c','$p')"; 
	$rt1=mysql_query($rt);
	
 }
 
 //package_golden_car
  public function p1_car()
{
 $pac="select * from car where car_price>500 && car_price<=1000";
 $pac1=mysql_query($pac);
 return $pac1;
}

//package_golden_ins
 
 public function g_ins($n,$f,$t,$d1,$d,$c,$p)
 {
     $ggg="insert into golden (user_name,g_from,g_to,g_date,g_days,g_car,g_price) values ('$n','$f','$t','$d1','$d','$c','$p')"; 
	$pg=mysql_query($ggg);
	
 }
 
  //package_diamond_car
  public function d1_car()
{
 $ds="select * from car where car_price>1000";
 $ds1=mysql_query($ds);
 return $ds1;
}


//package_diamond_ins
 
 public function d_ins($n,$f,$t,$d1,$d,$c,$p)
 {
     $da="insert into diamond (user_name,d_from,d_to,d_date,d_days,d_car,d_price) values ('$n','$f','$t','$d1','$d','$c','$p')"; 
	$da1=mysql_query($da);
	
 }
 
  //recept
 
 public function rec($tid)
 {
   
   $book="select * from booking";
   $book1=mysql_query($book);
   return $book1;
 }
 
 
 }
?> 