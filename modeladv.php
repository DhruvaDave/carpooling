<?php
error_reporting(0);
class modeladv
{
  public function modeladv()
  {
    mysql_connect("localhost","root","");
	mysql_select_db("carpooling");
  }
//post_adv
 
  public function insadv($n,$i,$f,$d)
  {
     $insadv="insert into advertisment(adv_name,adv_image,adv_feature,adv_days) values('$n','$i','$f','$d')";
	 $insadv1=mysql_query($insadv);
	 
  }
  
  //show_adv

public function adv_sel()
{
 $adv="select * from advertisment";
 $adv1=mysql_query($adv);
 return $adv1;
}

  //delete_adv
 
 public function delete_adv($adv_id)
 {
   
   $del_adv="delete from advertisment where adv_id='$adv_id'";
   $adv=mysql_query($del_adv);
   
 
 }
 

 


//ed_adv
 public function edit_adv($adv_id)
{
 $edit_adv="select *from advertisment where adv_id=$adv_id";
 $edit_adv1=mysql_query($edit_adv);
 return  $edit_adv1;
}
 
 
 //update_adv
 
 public function update_adv($id,$n,$i,$f,$d)
 {
 
    $up="update advertisment set adv_name='$n',adv_image='$i',adv_feature='$f',adv_days='$d' where adv_id='$id'";
	$up1=mysql_query($up);
    

 
 }
 
  //search
 
 public function s_ins($f,$t,$d,$time)
 {
     $inss="insert into location(from,to,date,time) values('$f','$t','$d','$time')";
	 $inss1=mysql_query($inss);
 
 }
 }

?>
