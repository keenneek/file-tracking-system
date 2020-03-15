<?php
session_start();
include '../db/connection.php';

if(!isset($_SESSION['user']) || !isset($_SESSION['department']) ){
    
    header("location:../");
    exit();
}


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
		<link id="browser_favicon" rel="shortcut icon" href="../resources/images/appgini-icon.png">

		<link rel="stylesheet" href="../resources/initializr/css/bootstrap.css">
		<!--[if gt IE 8]><!-->
			<link rel="stylesheet" href="../resources/initializr/css/bootstrap-theme.css">
		<!--<![endif]-->
		<link rel="stylesheet" href="../resources/lightbox/css/lightbox.css" media="screen">
		<link rel="stylesheet" href="../resources/select2/select2.css" media="screen">
		<link rel="stylesheet" href="../resources/timepicker/bootstrap-timepicker.min.css" media="screen">
		<link rel="stylesheet" href="../dynamic.css.php">

		<!--[if lt IE 9]>
			<script src="resources/initializr/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<![endif]-->
		<script src="../resources/jquery/js/jquery-1.11.2.min.js"></script>
		<script>var $j = jQuery.noConflict();</script>
		<script src="../resources/jquery/js/jquery.mark.min.js"></script>
		<script src="../resources/initializr/js/vendor/bootstrap.min.js"></script>
		<script src="../resources/lightbox/js/prototype.js"></script>
		<script src="../resources/lightbox/js/scriptaculous.js?load=effects"></script>
		<script src="../resources/select2/select2.min.js"></script>
		<script src="../resources/timepicker/bootstrap-timepicker.min.js"></script>
		<script src="../resources/jscookie/js.cookie.js"></script>
		<script src="../common.js.php"></script>
		
	</head>
        <body style="height:250px;">
		<div class="container theme-bootstrap theme-3d"  >
                    <br/><br><br>
			
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

                            
				
															<ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
                                      <a class="btn navbar-btn btn-default" href="../controllers/logout.php">
                                                            <i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
							
                                                               
                                 <?php
                                  $id=$_SESSION['user'];
                                                            
                                $sql=$conn->query("select * from users where id ='$id'");
                                while($row= $sql->fetch_array()){
                                                        
                                 ?>
                                                        <p class="navbar-text">
                                                     
		Signed in as <strong><a href="membership_profile.php" class="navbar-link"><?php echo $row['username'] ?> </a></strong>
							</p>
                                <?php } ?>
						</ul>
						<ul class="nav navbar-nav visible-xs">
							<a class="btn navbar-btn btn-default btn-lg visible-xs" href="index.php?signOut=1"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
							<p class="navbar-text text-center">
								Signed in as <strong><a href="membership_profile.php" class="navbar-link">admin</a></strong>
							</p>
						</ul>
						<script>
							/* periodically check if user is still signed in */
							setInterval(function(){
								$j.ajax({
									url: 'ajax_check_login.php',
									success: function(username){
										if(!username.length) window.location = 'index.php?signIn=1';
									}
								});
							}, 60000);
						</script>
												</div>
		</nav>
                   
                    <style>
                        .animete{
                            animation-name: font;
                            animation-delay:5s;
                            animation-fill-mode:forwards;
                        }
                        @keyframes animate{
                            from {display:none; left:-80%;}
                            to {display:block; left:20%;}
                                
                          
                        }
                        
                        
                        </style>
                    <br><br><br>
                    <div class="logo" style="background-image:  url('../assets/images/state.png'); height: 100px; width: 710px;;">
                            
                        
                    </div>
                    
			<br><br><br><br>
			
			<div class="notifcation-placeholder" id="notifcation-placeholder-56939086"></div>
		

			
			<!-- process notifications -->
						<div style="height: 60px; margin: -15px 0 -45px;">
							</div>

						<!-- Add header template below here .. -->



<style>
	.panel-body-description{
		margin-top: 10px;
		height: 100px;
		overflow: auto;
	}
	.panel-body .btn img{
		margin: 0 10px;
		max-height: 32px;
	}
</style>



<div class="row table_links" style="position:relative; left: 20%;">
                                            <center>
								
                                            <div id="patients-tile" class="col-sm-12 col-md-8 col-lg-6"  style="display:none;">
							<div class="panel panel-warning">
								<div class="panel-body" style="background-color: white;">
                                                                    <a class="btn btn-block btn-lg btn-warning" title="" href="manage/"><i class="fa-cloud-download "></i>
                                                                              				
									 <strong>File Management</strong></a>
									
									<div class="panel-body-description"></div>
								</div>
							</div>
						</div>
																								
											<div id="disease_symptoms-tile" class="col-sm-6 col-md-4 col-lg-3">
                                                                                            <a href="requests">
                                                                                                
                                                                                            <div class="panel panel-info" style="background-color:white;">
                                                                                                <div class="panel-body" style="max-height: 200px;">
									<img style=" margin-bottom: 50px; height:80px;" src="../resources/table_icons/request.png">
                                                                    <a class="btn btn-block btn-lg btn-info" title="" href="share/"><strong>Share Files </strong></a>
									    
									<div class="panel-body-description"></div>
								</div>
                                                                                            </a>
							</div>
						</div>
																								
																								
											<div id="events-tile" class="col-sm-6 col-md-4 col-lg-3">
							<div class="panel panel-info">
                                                            <a href="requests">
                                                            <div class="panel-body" style="max-height: 200px;">
                                                                     <img style=" margin-bottom: 50px; height:80px;" src="../resources/table_icons/share.png">
									
                                                                    <a class="btn btn-block btn-lg btn-info" title="" href="requests"><strong>Request Files</strong></a>
									
									<div class="panel-body-description"></div>
								</div>
                                                            </a>
							</div>
						</div>
							
                                            </center>
					</div> 

    <!-- /.table_links -->

					<div class="row custom_links" id="custom_links">
										<div class="col-xs-12 col-md-6 col-lg-6">
					<div class="panel panel-success" style="display:none;">
						<div class="panel-body">
							<a class="btn btn-block btn-lg btn-success" title="show all events that you have" href="users/"><strong>MANAGE USERS.
                                                            </strong></a>
							
						</div>
					</div>
				</div>
								<div class="col-xs-12 col-md-6 col-lg-6" style="display:none;">
					<div class="panel panel-success">
						<div class="panel-body">
							<a class="btn btn-block btn-lg btn-success" title="Smart Reports for your work      " href="track/"><strong>Track Files</strong></a>
                                                            
						</div>
					</div>
				</div>
									</div>

											


			<!-- Add footer template above here -->
			<div class="clearfix"></div>
							<div style="height: 70px;" class="hidden-print"></div>
			
							<!-- AppGini powered by notice -->
				<div style="height: 60px;" class="hidden-print"></div>
                                <br><br>
                                <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation" style="position:relaitive; bottom:50px; ">
					 <p class="navbar-text"> <small>
                                                Powered by <a class="navbar-link" href="#" style="text-decoration:none;">the State department for gender</a>
					</small>
                                        </p>
                                        <p style="float:right; margin:20px 20px 0px 0px; margin-left: 10px">
                                        
                                            developed by <a class="navbar-link" href="#" style="text-decoration: none; "><strong>keen</strong></a>
					</p>
				</nav>
			
		</div> <!-- /div class="container" -->
				<script src="resources/lightbox/js/lightbox.min.js"></script>
	</body>
</html>