<?php
  include('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.main
{
background-color:
#FFFFFF;
 font-family:Forte;
 font-size:20px;
 width:100%;
 height:400px;
 margin:auto;
}
</style>
</head>

<body>
<div class="main">

 <center><form method="post">
  <table border="2" align="center">
   <tr><center><font size="+3">Registration!!!</center> </font></tr>
   <tr>
<td>Name</td>
<td> <input type="text" name="name" /> </td>
</tr>

<tr>
<td>Last Name</td>
<td> <input type="text" name="lname" /> </td>
</tr>

<tr>
<td>Password</td>
<td> <input type="password" name="password" /> </td>
</tr>

<tr>
<td>Address</td>
<td> <textarea cols="3" rows="5" name="add"> </textarea> </td>
</tr>

<tr>
<td>Phone no.</td>
<td> <input type="text" name="no" /> </td>
</tr>

<tr>
<td>dob</td>
<td> <input type="text" name="dob" /> </td>
</tr>

<tr>
<td>Email</td>
<td> <input type="text" name="email" /> </td>
</tr>

<tr>
<td> Gender </td>
<td> <input type="radio" name="gender" value="male" /> Male
                          <input type="radio" name="gender" value="female" /> Female
						  </td>
</tr>

<tr>
<td> Category </td>
<td> <select name="category">
                        <option> Admin </option>
	                    <option> Passenger </option>
	                    <option> Driver </option>
	                    <option> Car Owner </option>
	                    </select> </td>
				
</tr>

<tr>
<td colspan="2" align="center"> <input type="submit" name="submit" value="submit" /> </td>
</tr>
	  </table>
	  </form>	
</center>

 </div>
<?php
include('footer.php');
?>
</body>
</html>
