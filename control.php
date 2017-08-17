<?php
error_reporting(0);
session_start();
include('model1.php');
$obj=new model();

$i = $_SESSION['id'];
//country
$re=$obj->sel();

//category

$ca=$obj->cat_fetch();

//profile
if(isset($_SESSION["id"]))
{
	$pr_id1=$_SESSION["id"];
	$prof=$obj->pro($pr_id1);
	 
			
			
			

}


//edit_profile

if(isset($_REQUEST['eid']))
{
$pr_id = $_REQUEST['eid'];
$f=$obj->pro($pr_id);

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




//insert_reg
  if(isset($_REQUEST['insert']))
  {
  	
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
	 
	 $reg=$obj->r_ins($f,$l,$t,$n,$g,$e,$p,$cat,$c,$s,$city);
	 
	 header('location:home.php');
	
	
   }
   
   //login
	if(isset($_REQUEST['login1']))
	{
		$u = $_REQUEST['email'];
		$p = $_REQUEST['pass'];
		$c=$_REQUEST['cat'];
		$res = $obj->login($u,$p);
		$row=mysql_fetch_array($res);
		$rw = mysql_num_rows($res);
		
		
		if($rw==1)
		{
			$_SESSION['id'] = $row['passenger_id'];
				$_SESSION['catid'] = $row['usercat_id'];
				$_SESSION['name'] = $row['fname'];
		    if($row["category"]==1)
			{
				 header('location:home.php');
			}
			
			elseif($row["category"]==2)
			{
               header('location:../driver/./laicenceno.php');
			  //header('location:../driver/./header.php');
			}
			
			elseif($row["category"]==3)
			{
				
			 header('location:../carowner/./post_car.php');
			}
			
		 
	    }
		
		
		else
		 {
	  ?>
	     <script type="text/javascript">
		   alert("wrong");
		 </script>
		 <?php
	  } 
	 
   }

?>
   		
    
	 


<?php

  //recover_password
  
  if(isset($_REQUEST['recover']))
  {
       $e=$_REQUEST['email1']; 
	   
	   
      $rec=$obj->recover($e);
	  $pa=$rec['password'];
	  
	 echo "Password is:".$pa; 
	 ?>
	 
	    <script type="text/javascript">
		   alert(<?php echo $pa; ?>);
		 </script>  
	 <?php 
  }


//show_car
   
    
 $see=$obj->sel_car();
	
	
	
  

//price

if(isset($_REQUEST['pid']))
{
   $pid=$_REQUEST['pid'];
   
   $fcar=$obj->price($pid);
   
}  
  	 
	 //brand
	 
	 if(isset($_REQUEST['bid']))
{
   $bid=$_REQUEST['bid'];
   
   $fcar1=$obj->brand($bid);
   
}  
  	 
  
//show_adv
   
    
 $sadv=$obj->sel_adv();

//createcarpool_fetch

$pool1=$obj->pool();																									

//carpool_insert

if(isset($_REQUEST['carpool']))
  {
  	
     $f=$_REQUEST['from'];
	 $t=$_REQUEST['to'];
	 $d1=$_REQUEST['day'];
	 $d2=$_REQUEST['month'];
	 $d3=$_REQUEST['year'];
	 $p=$_REQUEST['price'];
	 $cc=$_REQUEST['car'];
	 	$date1=$d1."/".$d2."/".$d3;
	 $rpr=$obj->c_ins($f,$t,$date1,$p,$cc);
	header('location:show_carpool.php');
	
   }
   //carpool in booking insert
	if(isset($_REQUEST['pid']))
  {
  	
     $na1=$_SESSION['id'];
	 $f1=$pool1['c_from'];
	 $t1=$pool1['c_to'];
	 $dat1=$pool1['c_date'];
	 $cc1=$pool1['c_price'];
	 $p1=$pool1['c_car'];
	
	 
	
		$dat1=$ddt1."/".$ddt2."/".$ddt3;
	$b_r=$obj->cb_ins($na1,$f1,$t1,$dat1,$cc1,$p1);
  }	

   
   //fetc_car
   
$show_car=$obj->car_sel();
  while($s=mysql_fetch_array($show_car))
  {
   $res[]=$s;
   
  }
  
  
  //fetch_city
  $show_city=$obj->city_sel();
  while($s=mysql_fetch_array($show_city))
  {
   $r[]=$s;
   
  }
    //fetch_driver
	
	$y=$obj->dri();
	while($yy=mysql_fetch_array($y))
	{
	  $p[]=$yy;
	}
	
	//booking_insert
	if(isset($_REQUEST['book']))
  {
  	
     $n1=$_SESSION['id'];
	 $p1=$_REQUEST['people'];
	 $dd1=$_REQUEST['day'];
	 $dd2=$_REQUEST['month'];
	 $dd3=$_REQUEST['year'];
	 $c1=$_REQUEST['car'];
	 $dr1=$_REQUEST['driver'];
	 $f1=$_REQUEST['from'];
	 $t1=$_REQUEST['to'];
	 $a1=$_REQUEST['address'];
		$date=$dd1."/".$dd2."/".$dd3;
	$b_r=$obj->b_ins($n1,$p1,$date,$c1,$dr1,$f1,$t1,$a1);
	
  }	
	
//search
   if(isset($_REQUEST['submit']))
	{
	  $ff=$_REQUEST['ct'];
	   $df=$_REQUEST['to'];
	 	    $rfs=$obj->sarch($ff,$df);
	  
		//header("location:search1.php");
		
}


//package_fetch_car

$p_car=$obj->p_car();
  while($i=mysql_fetch_array($p_car))
  {
   $i1[]=$i;
   
  }
  
  //package_insert
  
  
  if(isset($_REQUEST['booking']))
  {
     $n=$_REQUEST['name'];
	 $f=$_REQUEST['from'];
	 $t=$_REQUEST['to'];
	  $dd1=$_REQUEST['day'];
	 $dd2=$_REQUEST['month'];
	 $dd3=$_REQUEST['year'];
	 $d=$_REQUEST['days'];
	 $c=$_REQUEST['car'];
      $p=$_REQUEST['price'];
  
  $date=$dd1."/".$dd2."/".$dd3;
  $re=$obj->i_ins($n,$f,$t,$date,$d,$c,$p);
  }

//package_diamond_car

$d_car=$obj->d1_car();
  while($dx=mysql_fetch_array($d_car))
  {
   $dx1[]=$dx;
   
  }
 //package_diamond_insert
  
  
  if(isset($_REQUEST['booking']))
  {
     $n=$_REQUEST['name'];
	 $f=$_REQUEST['from'];
	 $t=$_REQUEST['to'];
	  $dd1=$_REQUEST['day'];
	 $dd2=$_REQUEST['month'];
	 $dd3=$_REQUEST['year'];
	 $d=$_REQUEST['days'];
	 $c=$_REQUEST['car'];
      $p=$_REQUEST['price'];
  
  $date=$dd1."/".$dd2."/".$dd3;
  $re=$obj->d_ins($n,$f,$t,$date,$d,$c,$p);
  }
  
  
//recept
if(isset($_REQUEST['book']))
{
  $ticket1=$obj->booking($tid);
  header('location:show_booking.php');
}
  
?>