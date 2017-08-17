<?php
  include_once('control.php');
  error_reporting(0);
  //session_start();
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript"src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#b1").mouseover(function() {
	
	$("#form1").fadeIn("2000");
	});

});
   function showstate(str) 
  { 
    var xmlHttp; 
    if(window.XMLHttpRequest) 
    { 
      xmlHttp = new  XMLHttpRequest(); 
    } 
    else 
    { 
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    xmlHttp.onreadystatechange = function() 
    { 
      if(xmlHttp.readyState == 4 ) 
      { 
        document.getElementById('state').innerHTML = xmlHttp.responseText;
      } 
    } 
    xmlHttp.open('GET','getdata.php?cid='+str,true); 
    xmlHttp.send(); 
	}
	
	
 function showcity(str) 
  { 
    var xmlHttp; 
    if(window.XMLHttpRequest) 
    { 
      xmlHttp = new  XMLHttpRequest(); 
    } 
    else 
    { 
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    xmlHttp.onreadystatechange = function() 
    { 
      if(xmlHttp.readyState == 4 ) 
      { 
        document.getElementById('city').innerHTML = xmlHttp.responseText;
      } 
    } 
    xmlHttp.open('GET','getdata.php?sid='+str,true); 
    xmlHttp.send(); 
	}
</script>

<style type="text/css">

#f
{ 
  height:650px;   
}
#form1 {
display:none;
}

#t
{
  color:#000099;
  font-size:18px;
  font-weight:bolder;
 border-radius:10%;
  border:#000000;
  opacity: 0.9;
  }
#s
{
  background-color:#CC0033;
  color:#FFFFFF;
  font-size:18px;
  height:40px;
  width:100px;
  
}
#r
{
color:#CC0033; 
font-family:Forte;
}
#b1{
width:100%;
height:100%;
position:fixed;
left:0px;
top:0px;
z-index:-1;
}
.stretch {
width:100%;
height:100%;
}

</style>

</head>

<body  bgcolor="#666666" >
<div id="b1">
<img src="../../car/Bugatti-Cars-Ultimate-Themes-HD-Awesome-Wallpapers-Backgrounds.jpg" class="stretch" />
</div>
<center>
<form id="form1" method="post" name="frm" >
<div id="f">
<table cellspacing="10" frame="box" bgcolor="#FFFFFF" style="width:45%" id="t">
<tr>
<td colspan="2" align="center" id="r">
 <center><h1><b>Registration</b></h1> </center> </td>
 </tr>
 <tr>
<td  >First Name</td><br><td><input type="text" name="fname"   placeholder="First Name" style="width:100%" value="<?php if(isset($_REQUEST['eid'])) { echo   $f['fname']; } ?> " /></td>

</tr>

<tr>
<td>Last Name</td>
<td><input type="text" name="lname"  placeholder="Lirst Name" style="width:100%" value="<?php if(isset($_REQUEST['eid'])) { echo   $f['lname']; } ?> " /></td>
</tr>

<tr>
<td>Address</td> <td><textarea rows="2" cols="16" name="tarea" placeholder="Address" style="width:100%" value="<?php if(isset($_REQUEST['eid'])) { echo   $f['address']; } ?> " > </textarea></td>
</tr>

<tr> 
<td>Phone No</td> <td><input class="form-control" type="text" name="no"  placeholder="Phone No." data-mask="(999) 999-9999" style="width:100%" value="<?php if(isset($_REQUEST['eid'])) {echo   $f['phoneno']; } ?> " ></td>
</tr>

<tr>
<td>Gender</td>
<td> <input type="radio" name="gen" value="male" />Male<br />
 <input type="radio" name="gen" value="female"  />Female
</td>
</tr>

<tr>
<td>Email </td>
<td><input type="email" name="email" placeholder="Email" value="<?php if(isset($_REQUEST['eid'])) { echo   $f['email']; } ?> "style="width:100%" ></td>
</tr>

<tr>
<td>Password </td>
<td> <input type="password" name="password" placeholder="Password" style="width:100%"  value="<?php if(isset($_REQUEST['eid'])){ echo   $f['password'];} ?> " /> </td>
</tr>

<tr>
<td>Select Category<br> </td><br>
<td>  <select data-placeholder="Select Your Category" name="cat" style="width:100%" >

      <option> Select Category </option>
    <?php
	    foreach($ca as $c1)
		{
	  ?>
        
		<option value="<?php echo $c1['usercat_id']; ?>">
		<?php echo $c1['usercat_name']; ?> 
		</option>
		<?php
		}
		?>
	
                          </select></td>
</tr>


<tr>
<td>Country </td>
<td>  <select name="country" data-placeholder="Select Country" style="width:100%" onchange="showstate(this.value);" >
<option> Select Country </option>
      <?php
	    foreach($re as $c)
		{
	  ?>
        
		<option value="<?php echo $c['country_id']; ?>">
		<?php echo $c['country_name']; ?> 
		</option>
		<?php
		}
		?>
				</select>
		 </td>
</tr>

<tr>
<td>State </td>
<td> <select data-placeholder="Select State"  name="state" style="width:100%" id="state" onchange="showcity(this.value);" >
        <option> Select State </option>
		</select>
		  </td>
</tr>


<tr>
<td>City </td>
<td> <select data-placeholder="Select City" name="city" style="width:100%" id="city" >
       <option> Select City </option>
		</select>
		   </td>
</tr>
<center>
<tr>

						  <?php if(isset($_REQUEST['eid']))
                         {
                   ?>
				   <center>  
					   
         <td colspan="2" align="center"> <input type="submit" name="update" value="update" id="s" />
		  </td></center>
		  </tr>
		  <tr>
			<?php
      		}
			else
				{
				?>
				
						 <center>
                      <td colspan="2" align="center">  <input type="submit" name="insert" value="submit" width="100%" id="s"/></center> <br> </td>
                      
						
					<?php
}
?>


</tr>

</center>
</table>
</div>
</form>
 </center>
</body>
</html>
