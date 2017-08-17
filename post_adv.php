<?php
include('controladv.php');
include('header.php');
error_reporting(0);

?>

<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Form Wizard</title>

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
    <link rel="stylesheet" href="dist/assets/lib/plupload/jquery.plupload.queue/css/jquery.plupload.queue.css">
    <link rel="stylesheet" href="dist/assets/lib/jquery.gritter/css/jquery.gritter.css">
    <link rel="stylesheet" href="dist/assets/lib/jquery.uniform/themes/default/css/uniform.default.min.css">
    <link rel="stylesheet" href="dist/assets/lib/jasny-bootstrap/css/jasny-bootstrap.min.css">

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
  <div class="bg-dark dk" id="wrap">
      <div id="top">

<?php

include('csidebar.php');

?>

<div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12"  style="padding-bottom:20%">
			
			
			<form method="post" enctype="multipart/form-data">
			
			<div> <h3> <b> <center> Post Advertisment </center> </b> </h3> </div>
			
                
				
				    <div class="form-group">
                        <label for="text2" class="control-label col-lg-4">Name</label>
                        <div class="col-lg-8">
                          <input type="text" name="name" id="text2" placeholder="name" value="<?php if(isset($_REQUEST['eid'])) { echo $f['adv_name']; } ?>" class="form-control" style="width:35%" > <br>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-4">Image Upload</label>
                        <div class="col-lg-8">
                          <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
							<?php if(isset($_REQUEST['eid']))
								 { 
								 	?><img src="<?php echo $f['adv_image'];?>" >
									 
									<?php
								}
								?>
							 </div>
                            <div>
							 	
									 
                             
                              <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span> <span class="fileinput-exists">Change</span> 
							                                  <input type="file" name="image" value="<?php if(isset($_REQUEST['eid'])) { echo $f['adv_image']; } ?>">
                                </span> 
                               <span class="btn btn-default btn-file" ><span class="fileinput-new">Remove image</span> <span class="fileinput-exists">Change</span> 
							  
                          </div>
                        </div>
                      </div>
					  
					  
     
	 <div class="form-group">
                        <label for="text4" class="control-label col-lg-4"> Feature </label>
                        <div class="col-lg-8">
                          <textarea  name="feature" name="intro" value="<?php if(isset($_REQUEST['eid'])) { echo $f['adv_feature']; } ?>" id="text4" placeholder="About Adv." class="form-control" style="width:35%"></textarea> <br>
                        </div>
                      </div>
	           

                <div class="form-group">
                        <label for="text2" class="control-label col-lg-4">Days</label>
                        <div class="col-lg-8">
                          <input type="text" name="days" value="<?php if(isset($_REQUEST['eid'])) { echo $f['adv_days']; } ?>" id="text2" placeholder="Time Period" class="form-control" style="width:35%" > <br>
                        </div>
                      </div>
                 
					
						 <div class="form-actions" style="padding-top:40%" >
						 
						  <?php if(isset($_REQUEST['eid']))
                         {
                       ?>
					   <div class="form-actions">
          <input type="submit" name="update" value="update" class="btn btn-primary" />
		  </div>
			<?php
      		}
			else
				{
				?>
				
						 <center>
                        <input type="submit" name="postadv" value="Submit" class="btn btn-primary"> <br>
                      </div>
						
					<?php
}
?>

       </center>
	   </form>
</div>
</div>
</div>
</div>
				   

<script src="dist/assets/lib/jquery/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <!--Bootstrap -->
    <script src="dist/assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="dist/assets/lib/metismenu/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="dist/assets/lib/screenfull/screenfull.js"></script>
    <script src="dist/assets/lib/plupload/plupload.full.min.js"></script>
    <script src="dist/assets/lib/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
    <script src="dist/assets/lib/jquery.gritter/js/jquery.gritter.min.js"></script>
    <script src="dist/assets/lib/jquery.uniform/jquery.uniform.min.js"></script>
    <script src="dist/assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    <script src="dist/assets/lib/jquery-form/jquery.form.js"></script>
    <script src="dist/assets/lib/formwizard/jquery.form.wizard.js"></script>
    <script src="dist/assets/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="dist/assets/lib/jquery-validation/src/localization/messages_ja.js"></script>
    <script src="dist/assets/lib/holderjs/holder.js"></script>

    <!-- Metis core scripts -->
    <script src="dist/assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="dist/assets/js/app.min.js"></script>
    <script>
      $(function() {
        Metis.formWizard();
      });
    </script>
    <script src="dist/assets/js/style-switcher.min.js"></script>


<?php

include('footer.php');

?>
</div>
</div>
</body>
</html>
