<?php
error_reporting(0);
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Calendar</title>

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
    <link rel="stylesheet" href="assets/lib/fullcalendar/fullcalendar.css">

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
    
	
	  <?php
	  
	  include('header.php');
	  include('sidebar.php');
	  
	  
	  ?>
        <!-- .navbar -->
        <!-- /.navbar -->
        <!-- /.head -->
      <!-- /#top -->
      <!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="box">
              <header>
                <h5>Calendar</h5>
              </header>
              <div class="body">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="well well-sm">
                      <div id="add-event-form">
                        <fieldset>
                          <legend>Add Custom Event</legend>
                          <span class="help-block">Event Title</span> 
                          <input id="title" name="title" type="text" placeholder="event title" class="form-control input-small">
                          <div class="radio">
                            <label>
                              <input type="radio" name="priority" value="label label-default" checked>
                              <span class="label label-default">default</span> 
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="priority" value="label label-primary">
                              <span class="label label-primary">primary</span> 
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="priority" value="label label-warning">
                              <span class="label label-warning">warning</span> 
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="priority" value="label label-success">
                              <span class="label label-success">success</span> 
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="priority" value="label label-info">
                              <span class="label label-info">info</span> 
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="priority" value="label label-danger">
                              <span class="label label-danger">danger</span> 
                            </label>
                          </div>
                          <br>
                          <button id="add-event" type="button" class="btn btn-sm btn-default">Add Event</button>
                        </fieldset>
                      </div>
                    </div>
                    <div class="well well-sm">
                      <h4>Draggable Events</h4>
                      <ul id='external-events' class="list-unstyled">
                        <li class="external-event"><span class="label label-default">My Event 1</span> 
                        </li>
                        <li class="external-event"><span class="label label-primary">My Event 2</span> 
                        </li>
                        <li class="external-event"><span class="label label-danger">My Event 3</span> 
                        </li>
                        <li class="external-event"><span class="label label-success">My Event 4</span> 
                        </li>
                        <li class="external-event"><span class="label label-warning">My Event 5</span> 
                        </li>
                        <li class="external-event"><span class="label label-info">My Event 6</span> 
                        </li>
                      </ul>
                      <div class="checkbox anim-checkbox h4">
                        <input type="checkbox" id="drop-remove" class="danger">
                        <label for="drop-remove">remove after drop</label>
                      </div>
                    </div>
                  </div>
                  <div id="calendar" class="col-lg-9"></div>
                </div>
              </div>
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> 
            </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> 
            </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> 
            </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> 
            </li>
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
    <footer class="Footer bg-dark dker">
      <p>2014 &copy; Metis Bootstrap Admin Template</p>
    </footer><!-- /#footer -->

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
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->

    <!--jQuery 2.1.1 -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <!--Bootstrap -->
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="assets/lib/metismenu/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="assets/lib/screenfull/screenfull.js"></script>
    <script src="assets/lib/moment/moment.min.js"></script>
    <script src="assets/lib/fullcalendar/fullcalendar.min.js"></script>

    <!-- Metis core scripts -->
    <script src="assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="assets/js/app.min.js"></script>
    <script>
      $(function() {
        Metis.MetisCalendar();
      });
    </script>
    <script src="assets/js/style-switcher.min.js"></script>
  </body>
</html>
