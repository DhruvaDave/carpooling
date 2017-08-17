<?php

  include_once('header.php');
  include_once('control.php');
  include_once('dsidebar.php');
  error_reporting(0);
  
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Table</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist/assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="dist/assets/css/main.min.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="dist/assets/lib/metismenu/metisMenu.min.css">
    <link rel="stylesheet" href="dist/assets/lib/datatables/3/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv/html5shiv.js"></script>
        <script src="assets/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--For Development Only. Not required -->
    <script>
      less = {
        env: "development",
        relativeUrls: false,
        rootpath: "../assets/"
      };
    </script>
    <link rel="stylesheet" href="dist/assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="dist/assets/css/less/theme.less">
    <script src="dist/assets/lib/less/less-1.7.5.min.js"></script>

    <!--Modernizr 2.8.2-->
    <script src="dist/assets/lib/modernizr/modernizr.min.js"></script>
<style type="text/css">
#c
	{
	font-size:xx-large;
	color:#0000FF;
	font-family:forte;
	
	
	}
	
#f
	{
	   font-family:forte;
	   color:#990066;
	   font-size:24px;
	}
	#f1
	{
	   
	   color:#660033;
	   font-size:15px;
	}
</style>

</head>
 <div class="bg-dark dk" id="wrap">
      <div id="top">
	  
	  <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12" style="padding:8%">



<div id="main" >


<form name="tstest" method="post">
<center>
<table border="2" align="center">

<caption id="c"> Available Cars </caption>

<tr border="3" style="border:solid 3px #000000" id="f">
<td border="3" style="border:solid 3px #000000" id="f" align="center" width="100px" height="20px"> Name </td>
<td border="3" style="border:solid 3px #000000" id="f" align="center"width="100px" height="20px"> Image </td>								
<td border="3" style="border:solid 3px #000000" id="f" align="center" width="100px" height="20px">  Feature </td>
<td border="3" style="border:solid 3px #000000" id="f" align="center" width="100px" height="20px"> Price </td>                      
</tr>	

 <?php
					 $se="select * from car";
					$see=mysql_query($se);
					//return $see;
					  while($c=mysql_fetch_array($see))
					  {
						?>
						

						<tr>
						 <td border="3" style="border:solid 3px #000000" id="f1" height="20px"><?php echo $c['car_name']; ?></td>
						 <td border="3" style="border:solid 3px #000000" id="f1" height="20px"> <img src="<?php echo $c['car_image']; ?>" /></td> 
						<td border="3" style="border:solid 3px #000000" id="f1" height="20px"><?php echo $c['car_feature']; ?></td> 
						<td border="3" style="border:solid 3px #000000" id="f1" height="20px"><?php echo $c['car_price']; ?></td> 
						</tr>
								
                        
						
						
					
					 
					 
					 
					
					  
					
						
						
					 
						<?php
						
						
						}
						?>
                      </tbody>
                    </table>
					
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
                      


</form>
</center>
<?php
 include('footer.php');
?>
</body>
</html>
