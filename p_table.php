<?php

include('header.php');
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
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.min.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/lib/datatables/3/dataTables.bootstrap.css">

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
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/css/less/theme.less">
    <script src="assets/lib/less/less-1.7.5.min.js"></script>

    <!--Modernizr 2.8.2-->
    <script src="assets/lib/modernizr/modernizr.min.js"></script>
  </head>
  <body class="  ">

<div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>Passenger </h5>
                    <div class="toolbar">
                      <div class="btn-group">
                        <a href="#stripedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                          <i class="fa fa-angle-up"></i>
                        </a> 
                        <a class="btn btn-danger btn-sm close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </div>
                    </div>
                  </header>
                  <div id="stripedTable" class="body collapse in">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Passenger_id</th>
                          <th>fname </th>
						  <th>Lname</th>
                          <th>Address</th>
						   <th>Phone No.</th>
						    <th>Gender</th>
						    <th>Email-id</th>
							 <th>Password</th>
							  <th>City</th>
							   <th>Category</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Jill</td>
                          <td>Smith</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Eve</td>
                          <td>Jackson</td>
                          <td>94</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>John</td>
                          <td>Doe</td>
                          <td>80</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Adam</td>
                          <td>Johnson</td>
                          <td>67</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
<?php

include('footer.php');

?>
</body>
</html>
