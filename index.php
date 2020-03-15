<?php

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>File Tracking System</title>
		<link id="browser_favicon" rel="shortcut icon" href="resources/images/appgini-icon.png">

		<link rel="stylesheet" href="resources/initializr/css/bootstrap.css">
		<!--[if gt IE 8]><!-->
			<link rel="stylesheet" href="resources/initializr/css/bootstrap-theme.css">
		<!--<![endif]-->
		<link rel="stylesheet" href="resources/lightbox/css/lightbox.css" media="screen">
		<link rel="stylesheet" href="resources/select2/select2.css" media="screen">
		<link rel="stylesheet" href="resources/timepicker/bootstrap-timepicker.min.css" media="screen">
		<link rel="stylesheet" href="dynamic.css.php">

		<!--[if lt IE 9]>
			<script src="resources/initializr/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<![endif]-->
		<script src="resources/jquery/js/jquery-1.11.2.min.js"></script>
		<script>var $j = jQuery.noConflict();</script>
		<script src="resources/jquery/js/jquery.mark.min.js"></script>
		<script src="resources/initializr/js/vendor/bootstrap.min.js"></script>
		<script src="resources/lightbox/js/prototype.js"></script>
		<script src="resources/lightbox/js/scriptaculous.js?load=effects"></script>
		<script src="resources/select2/select2.min.js"></script>
		<script src="resources/timepicker/bootstrap-timepicker.min.js"></script>
		<script src="resources/jscookie/js.cookie.js"></script>
		<script src="common.js.php"></script>
		
	</head>
	<body>
		<div class="container theme-bootstrap theme-3d">
			
									<nav class="navbar navbar-default navbar-fixed-top hidden-print" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- application title is obtained from the name besides the yellow database icon in AppGini, use underscores for spaces -->
				<a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-home"></i> File Tracking System</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
									</ul>

				
							</div>
		</nav>
						<div style="height: 70px;" class="hidden-print"></div>
			
			
			<div class="notifcation-placeholder" id="notifcation-placeholder-28706970"></div>
			
			
			<!-- process notifications -->
						<div style="height: 60px; margin: -15px 0 -45px; background-position-x:170px; ">
							</div>

						<!-- Add header template below here .. -->


                                                <br><br>
                                                <div class="row" style="width: 90%;position:absolute; left: -5%; top:30%;">
	<div class="col-sm-6 col-lg-8" id="login_splash">
		<!-- customized splash content here -->
	</div>
	<div class="col-sm-6 col-lg-4">
		<div class="panel panel-success">

			<div class="panel-heading">
				<h1 class="panel-title"><strong>Sign In Here</strong></h1>
								<div class="clearfix"></div>
			</div>

			<div class="panel-body">
				<form method="post" action="controllers/login.php">
                                    <?php if(isset($_GET['error'])){ ?>
                                    <div class="form-group">
                                        <font color='red' size="+1">user does not exist</font>	
					</div>
                                    <?php }?>
                                    
                                    <?php if(isset($_GET['success'])){ ?>
                                    <div class="form-group">
                                        <font color='green'size="+1">Registration was successful.Now Sign in</font>	
					</div>
                                    <?php }?>
                                    
					<div class="form-group">
						<label class="control-label" for="username">Username</label>
                                                <input autocomplete="off" class="form-control" name="username" id="username" type="text" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label class="control-label" for="password">Password</label>
						<input  autocomplete="off" class="form-control" name="password" id="password" type="password" placeholder="Password" required>
                                                <span class="help-block">not registerd? <a href="register.php">Click here to create account</a></span>
					</div>
					<div class="checkbox">
						<label class="control-label" for="rememberMe">
							<input type="checkbox" name="rememberMe" id="rememberMe" value="1">
							Remember me						</label>
					</div>

					<div class="row">
						<div class="col-sm-offset-3 col-sm-6">
							<button name="signin" type="submit" id="submit" value="signIn" class="btn btn-primary btn-lg btn-block">Sign In</button>
						</div>
					</div>
				</form>
			</div>

			
		</div>
	</div>
</div>

<script>document.getElementById('username').focus();</script>
			<!-- Add footer template above here -->
			<div class="clearfix"></div>
							<div style="height: 70px;" class="hidden-print"></div>
			
							<!-- AppGini powered by notice -->
				<div style="height: 60px;" class="hidden-print"></div>
				<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
					<p class="navbar-text"> <small>
                                                Powered by <a class="navbar-link" href="#" style="text-decoration:none;">the State department for gender</a>
					</small>
                                        </p>
                                        <p style="float:right; margin:20px 20px 0px 0px; margin-left: 10px">
                                        
                                            developed by <a class="navbar-link" href="#" style="text-decoration: none; "><strong>keen</strong></a>
					</p>
				</nav>
			
		</div> <!-- /div class="container" -->
		<script src="resources/jquery/js/jquery.background-fit.min.js"></script>
	<style>
		body{
			//background: url("images/hos.png") no-repeat fixed center center / cover;
                            background-image:  url("assets/images/logo.jpg");
			margin-top: 50px;
                        background-position-x:170px;
			background-position-y:60px;
			background-repeat: no-repeat;
         background-size: 35%;
         
		 

		}

	</style>


	<script>
		$j(function() {
  $j("body").bg_fit();
});
	</script>

		<script src="resources/lightbox/js/lightbox.min.js"></script>
	</body>     
</html>