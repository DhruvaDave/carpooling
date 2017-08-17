<?php
  include('header.php');
  include('csidebar.php');
  error_reporting(0);
  ?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Maps</title>

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
    <div class="bg-dark dk" id="wrap">
      <div id="top">

        <!-- .navbar -->
                  <!-- /.container-fluid -->
       <!-- /.navbar -->
       
          <!-- /.search-bar -->
          <div class="main-bar">
            <h3>
              <i class="fa fa-map-marker"></i>&nbsp; Maps</h3>
          </div><!-- /.main-bar -->
       
	   <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <style>
              .FlexEmbed-item {
                height: 300px;
              }
            </style>
            <div class="row">
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>Basic Maps</h5>
                  </header>
                  <div class="body">
                    <div class="FlexEmbed FlexEmbed--4by3">
                      <div id="gmaps-basic" class="FlexEmbed-item"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">

                <!-- .box -->
                <div class="box warning">
                  <header>
                    <h5>Map with markers</h5>
                  </header>
                  <div class="body">
                    <div class="FlexEmbed FlexEmbed--4by3">
                      <div id="gmaps-marker" class="FlexEmbed-item"></div>
                    </div>
                  </div>
                </div><!-- /.box -->
              </div>
            </div><!-- /.row -->
            <div class="row">

              <!-- .col-lg-6 -->
              <div class="col-lg-6">

                <!-- .box -->
                <div class="box inverse">
                  <header>
                    <h5>Geolocation</h5>
                  </header>

                  <!-- .body -->
                  <div class="body">
                    <div class="FlexEmbed FlexEmbed--4by3">
                      <div id="gmaps-geolocation" class="FlexEmbed-item"></div>
                    </div>
                  </div><!-- /.body -->
                </div><!-- /.box -->
              </div><!-- /.col-lg-6 -->

              <!-- .col-lg-6 -->
              <div class="col-lg-6">

                <!-- .box -->
                <div class="box primary">
                  <header>
                    <h5>Polylines</h5>
                  </header>

                  <!-- .body -->
                  <div class="body">
                    <div class="FlexEmbed FlexEmbed--4by3">
                      <div id="gmaps-polylines" class="FlexEmbed-item"></div>
                    </div>
                  </div><!-- /.body -->
                </div><!-- /.box -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">

              <!-- .col-lg-6 -->
              <div class="col-lg-6">

                <!-- .box -->
                <div class="box success">
                  <header>
                    <h5>Routes</h5>
                  </header>

                  <!-- .body -->
                  <div class="body">
                    <div class="FlexEmbed FlexEmbed--4by3">
                      <div id="gmaps-route" class="FlexEmbed-item"></div>
                    </div>
                  </div><!-- /.body -->
                </div><!-- /.box -->
              </div><!-- /.col-lg-6 -->

              <!-- .col-lg-6 -->
              <div class="col-lg-6">

                <!-- .box -->
                <div class="box danger">
                  <header>
                    <h5>Geocoding</h5>
                    <div class="toolbar">
                      <form method="post" id="geocoding_form" class="form-search">
                        <div class="input-group">
                          <input id="address" name="address" class="form-control input-sm" type="text" placeholder="search ..">
                          <span class="input-group-btn">
			<button type="submit" class="btn btn-default btn-sm">Search</button>
		      </span>                        </div>
                      </form>
                    </div>
                  </header>

                  <!-- .body -->
                  <div class="body">
                    <div class="FlexEmbed FlexEmbed--4by3">

                      <!-- #gmaps-geocoding.google-maps -->
                      <div id="gmaps-geocoding" class="FlexEmbed-item"></div><!-- /#gmaps-geocoding.google-maps -->
                    </div>
                  </div><!-- /.body -->
                </div><!-- /.box -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div>
	   <!-- /.head -->
      </div><!-- /#top -->
      <!-- /#left -->
      <!-- /#content -->
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span>            </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span>            </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span>            </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span>            </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <!-- /#footer -->

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->

    <!--jQuery 2.1.1 -->
    <script src="assets/lib/jquery/jquery.min.js"></script>

    <!--Bootstrap -->
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="assets/lib/metismenu/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="assets/lib/screenfull/screenfull.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/lib/gmaps/gmaps.js"></script>

    <!-- Metis core scripts -->
    <script src="assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="assets/js/app.min.js"></script>
    <script>
      $(function() {
        Metis.MetisMaps();
      });
    </script>
    <script src="assets/js/style-switcher.min.js"></script>
	<?php
  include('footer.php');
  ?>
  </body>
</html>
