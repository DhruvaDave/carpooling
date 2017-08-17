<?php
include_once('control.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="user/assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="user/assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="user/assets/css/main.min.css">
    <link rel="stylesheet" href="user/assets/lib/animate.css/animate.min.css">
    
	<style type="text/css">
	
	#c
	{
	    width:100%;
		height:45px;
	}
	
	</style>

  </head>
  <body class="login">
    <div class="form-signin">
      <div class="text-center">
        <img src="../logo/images (5).jpg" height="70" alt="Metis Logo">      </div>
      <hr>
      <div class="tab-content">
        <div id="login" class="tab-pane active">
          <form method="post">
            <p class="text-muted text-center">
              Enter your username and password            </p>
            <input type="text" placeholder="mail@domain.com" class="form-control top" name="email">
            <input type="password" placeholder="Password" class="form-control bottom" name="pass">
             <select data-placeholder="Select Your Category" name="cat" id="c" >

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
	
                          </select>
			 
		    <div class="checkbox">
              <label>
                <input type="checkbox">Remember Me              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login1" >LOGIN</button>
          </form>
        </div>
        <div id="forgot" class="tab-pane">
          <form method="post">
            <p class="text-muted text-center">Enter your valid e-mail</p>
            <input type="email" placeholder="mail@domain.com" class="form-control" name="email1">
			
            <br>
            <button class="btn btn-lg btn-danger btn-block" type="submit" name="recover">Recover Password</button>
          </form>
		
        </div>
        <div id="signup" class="tab-pane">        </div>
      </div>
      <hr>
      <div class="text-center">
        <ul class="list-inline">
           <li> <a class="text-muted" href="reg.php" >Create new Account</a>  </li> |
          <li> <a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a>  </li>
        </ul>
      </div>
    </div>
    <script src="user/assets/lib/jquery/jquery.min.js"></script>
    <script src="user/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
