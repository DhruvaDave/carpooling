<?php

include('header.php');
include('control.php');
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
  </head>
  <body class="  ">
  <?php
  
  include('sidebar.php');
  
  ?>
    <div class="bg-dark dk" id="wrap">
      <div id="top">
	  
	  <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12">

<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                      <thead>
                       
                      </thead>
                      <tbody>
                        
						<tr>
						<td>First Name </td>
						<td> Last Name </td>
						<td> Address </td>
						<td> Phone </td>
						<td> Gender </td>
						<td> Email </td>
						<td> Password </td>
					    <td> Category </td>
						<td> Country </td>
						<td> State </td>
						<td> City </td>
						
						<td> Delet </td>
						</tr>
                       
					    <?php
			            foreach($ps as $v)
	                      {
				          ?>
                       <tr>
						<td> <?php echo   $v['fname']; ?>  </td>
						<td> <?php echo   $v['lname']; ?>  </td>
 					    <td> <?php echo   $v['address']; ?>  </td>
						<td> <?php echo   $v['phoneno']; ?>  </td>
						<td> <?php echo   $v['gender']; ?>  </td>
						<td> <?php echo   $v['email']; ?>  </td>
						<td> <?php echo   $v['password']; ?>  </td>
						<td> <?php echo   $v['category']; ?>  </td>
						<td> <?php echo   $v['country']; ?>  </td> 
						<td> <?php echo   $v['state']; ?>  </td>
						<td> <?php echo   $v['city']; ?>  </td>
						<td> <a href="passenger.php?did=<?php echo $v['passenger_id']; ?>">DELET </a></td>
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
					

 <!--jQuery 2.1.1 -->
    <script src="dist/assets/lib/jquery/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <!--Bootstrap -->
    <script src="dist/assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="dist/assets/lib/metismenu/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="dist/assets/lib/screenfull/screenfull.js"></script>
    <script src="dist/assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="dist/assets/lib/datatables/3/dataTables.bootstrap.js"></script>
    <script src="dist/assets/lib/jquery.tablesorter/jquery.tablesorter.min.js"></script>
    <script src="dist/assets/lib/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- Metis core scripts -->
    <script src="dist/assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="dist/assets/js/app.min.js"></script>
    <script>
      $(function() {
        Metis.MetisTable();
        Metis.metisSortable();
      });
    </script>
    <script src="dist/assets/js/style-switcher.min.js"></script>

<?php

include('footer.php');

?>
</body>
</html>
