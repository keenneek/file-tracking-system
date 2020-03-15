<?php


session_start();
error_reporting(0);
include '../../db/connection.php';

if(!isset($_SESSION['user']) || !isset($_SESSION['department']) ){
    
    header("location:../../");
    exit();
}


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html ++class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>File Tracking System</title>
		<link id="browser_favicon" rel="shortcut icon" href="../resources/images/appgini-icon.png">

		<link rel="stylesheet" href="../../resources/initializr/css/bootstrap.css">
		<!--[if gt IE 8]><!-->
			<link rel="stylesheet" href="../../resources/initializr/css/bootstrap-theme.css">
		<!--<![endif]-->
		<link rel="stylesheet" href="../../resources/lightbox/css/lightbox.css" media="screen">
		<link rel="stylesheet" href="../../resources/select2/select2.css" media="screen">
		<link rel="stylesheet" href="../../resources/timepicker/bootstrap-timepicker.min.css" media="screen">
		<link rel="stylesheet" href="../../dynamic.css.php">

		<!--[if lt IE 9]>
			<script src="resources/initializr/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<![endif]-->
		
		
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
				<a class="navbar-brand" href="../"><i class="glyphicon glyphicon-home"></i> home</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
															<li class="dropdown">
					
					<ul class="dropdown-menu" role="menu"><li><a href="patients_view.php?t=1580904265"><img src="resources/table_icons/administrator.png" height="32"> Patients</a></li><li><a href="disease_symptoms_view.php?t=1580904265"><img src="resources/table_icons/health.png" height="32"> Disease symptoms</a></li><li><a href="events_view.php?t=1580904265"><img src="table.gif" height="32"> Appointments</a></li></ul>
				</li>									</ul>

									
				
															<ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
                                                                                                                            <a class="btn navbar-btn btn-default" href="../../controllers/logout.php"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
		                               
                                 <?php
                                  $id=$_SESSION['user'];
                                                            
                                $sql=$conn->query("select * from users where id ='$id' ");
                                while($row= $sql->fetch_array()){
                                    $session=   $_SESSION['depatment']=$row['department'];  
                                                        
                                 ?>
                                                        <p class="navbar-text">
								Signed in as <strong><a href="membership_profile.php" class="navbar-link"><?php echo $row['username']; ?></a></strong>
							</p>
                                                        
                                <?php } ?>
						</ul>
						<ul class="nav navbar-nav visible-xs">
							<a class="btn navbar-btn btn-default btn-lg visible-xs" href="../../controllers/logout.php"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
							<p class="navbar-text text-center">
								Signed in as <strong><a href="#" class="navbar-link">admin</a></strong>
							</p>
						</ul>
						
												</div>
		</nav>
						<div style="height: 70px;" class="hidden-print"></div>
			
                                                
			<div class="notifcation-placeholder" id="notifcation-placeholder-53747558"></div>
			
			
			<!-- process notifications -->
						<div style="height: 60px; margin: -15px 0 -45px;">
							</div>

						<!-- Add header template below here .. -->

<div class="row">
    <div class="col-xs-11 col-md-12">

   
    
            <div class="page-header"><h1><div class="row">
           <div class="col-sm-8"><a style="text-decoration: none; color: inherit;" href="#">
                                
                   <img style=" height:80px;" src="../../resources/table_icons/track.jpg">track file</a></div>
                  <!-- seach div -->
                          <form enctype="multipart/form-data" method="get" name="myform" action="">
                        <div class="col-sm-4"><div class="input-group" id="quick-search">
                                <input autocomplete="off" type="text" name="searchstring" value="" class="form-control" placeholder="Search File By Reference NO">
                                <span class="input-group-btn">
                                    
                                    <input name="search"  id="Search" type="submit"  class="btn btn-default" title="Quick Search">
                                        <i class="glyphicon glyphicon-search"></i>
                                
          <button name="NoFilter_x" value="1" id="NoFilter_x" type="submit" onClick="document.myform.SelectedID.value = ''; document.myform.NoDV.value=1; return true;"  class="btn btn-default" title="Show All">
             <i class="glyphicon glyphicon-remove-circle"></i>
                            </button>
                          </span></div>
                        </div>
                          </form>
                    
                    
                    </div></h1></div>
            <div id="top_buttons" class="hidden-print">
                <div class="btn-group btn-group-lg visible-md visible-lg all_records pull-left">
                   
                    
                   
                    </div><div class="btn-group-vertical btn-group-lg visible-xs visible-sm all_records"> 
 <button type="submit" id="addNew" name="addNew_x" value="1" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign">
                                                        
  </i> Add New</button><button onClick="document.myform.NoDV.value=1; document.myform.SelectedID.value = ''; return true;" type="submit" name="Print_x" id="Print" value="1" class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Print Preview</button>
  <button onClick="document.myform.NoDV.value=1; document.myform.SelectedID.value = ''; return true;" type="submit" name="CSV_x" id="CSV" value="1" class="btn btn-default"><i class="glyphicon glyphicon-download-alt"></i> Save CSV</button>
  <button onClick="document.myform.NoDV.value=1; document.myform.SelectedID.value = ''; return true;" type="submit" name="Filter_x" id="Filter" value="1" class="btn btn-default"><i class="glyphicon glyphicon-filter"></i> Filter</button><button onClick="document.myform.NoDV.value=1; document.myform.SelectedID.value = ''; return true;" type="submit" name="NoFilter_x" id="NoFilter" value="1" class="btn btn-default"><i class="glyphicon glyphicon-remove-circle"></i> Show All</button></div><div class="btn-group-vertical btn-group-lg visible-xs visible-sm selected_records hidden vspacer-lg"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="selected_records_more"><i class="glyphicon glyphicon-check"></i> More <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li><a href="#" id="selected_records_print_multiple_dv_sdv"><span class=""><i class="glyphicon glyphicon-print"></i> Print Preview Detail View</span></a></li><li><a href="#" id="selected_records_mass_change_owner"><span class=""><i class="glyphicon glyphicon-user"></i> Change owner</span></a></li><li><a href="#" id="selected_records_add_more_actions_link"><span class="text-info"><i class="glyphicon glyphicon-question-sign"></i> Add more actions</span></a></li></ul></div><div class="clearfix"></div><p></p></div><div class="row"><div class="table_view col-xs-12 "><script>jQuery(function(){ jQuery("input[name=SearchString]").focus();  jQuery('[id=selected_records_print_multiple_dv_sdv]').click(function(){ print_multiple_dv_sdv('patients', get_selected_records_ids()); return false; });jQuery('[id=selected_records_mass_change_owner]').click(function(){ mass_change_owner('patients', get_selected_records_ids()); return false; });jQuery('[id=selected_records_add_more_actions_link]').click(function(){ add_more_actions_link('patients', get_selected_records_ids()); return false; }); });</script><div class="table-responsive">
<?php
            if(isset($_GET['search']) && !empty($_GET['search'])){
               $searchstring= $_GET['searchstring'];
               
       
            
            
            $query= mysqli_query($conn,"select * from files where files.ref_number ='$searchstring'");
            if(mysqli_num_rows($query)> 0){
                
                while ($row= $query->fetch_array()) {
                   
  ?>
              
      <table class="table table-striped table-bordered table-hover">
          
          <thead>
              
        <tr>
	<th class="patients-first_name" >REF NUMBER</a></th>
	<th class="patients-first_name" >FILE NAME</a></th>
        
        <th class="patients-first_name" >TYPE OF FILE</th>
        <th class="patients-first_name" >CURRENT LOCATION</a></th>
        <th class="patients-first_name" >CURRENT CUSTODIAN</a></th>
        </tr>

</thead>

<tbody><!-- tv data below -->
<tr>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['ref_number']; ?></a></td>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['holder']; ?></a></td>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['type']; ?> </a></td>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['current_location'];?></a></td>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['possession'];?></a></td>


    </form>
  </tr>
<!-- tv data above -->
</tbody>
	<tfoot><tr><td colspan=11>Records 1 to 1 of 1</td></tr></tfoot>
              </table>
            <?php 
                }
                exit();
                } else{
               
                ?>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
              <tr>
                  <th colspan="8"style="text-align: center;"><font color="red" size="+1">   requested files</font></th>  
              </tr>
                    
              
              <tr>
                  
          <tr>
	<th class="patients-first_name" >REF NUMBER</a></th>
	<th class="patients-first_name" >FILE NAME</a></th>
        
        <th class="patients-first_name" >TYPE OF FILE</th>
        <th class="patients-first_name" >CURRENT LOCATION</a></th>
        <th class="patients-first_name" >CURRENT CUSTODIAN</a></th>
        </tr>
       
        
        
	</tr>

</thead>


<tbody><!-- tv data below -->
<!-- tv data above -->
</tbody>
<tfoot>
    <tr><td colspan=11>
            <div class="alert alert-warning">
                <i class="glyphicon glyphicon-warning-sign"></i> No matches found!</div>
        </td></tr></tfoot>
              </table>
              <?php
                }
                exit();
            }
            else{
                ?>
              
              <table class="table table-striped table-bordered table-hover">
           <thead>
              
              
              <tr>
                  
                  
	
	<th class="patients-first_name" >REF NUMBER</a></th>
	<th class="patients-first_name" >FILE NAME</a></th>
        
        <th class="patients-first_name" >TYPE OF FILE</th>
        <th class="patients-first_name" >CURRENT LOCATION</a></th>
        <th class="patients-first_name" >CURRENT CUSTODIAN</a></th>
        </tr>
        
        
	
</thead>

<?php
$sql2= $conn->query("select * from files order by ref_number asc ");
                if(mysqli_num_rows($sql2)> 0){
                    $records= count(mysqli_num_rows($sql2));
                
                while ($row= $sql2->fetch_array()) {
                ?>

<!--table starts here -->
<tbody><!-- tv data below -->
<tr>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['ref_number']; ?></a></td>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['holder']; ?></a></td>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['type']; ?> </a></td>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['current_location'];?></a></td>
<td id="patients-last_name-1177" class="patients-last_name"><a  style="display: block; padding:0px; text-decoration: none;"><?php echo $row['possession'];?></a></td>


    </form>
  </tr>
<!-- tv data above -->
</tbody>
 <!--end of table -->
                <?php } ?>
    
	<tfoot><tr><td colspan=11></td></tr></tfoot>
           </table>
           
             <?php
             
            }else{ ?>
               
<tfoot>
    <tr><td colspan=11>
            <div class="alert alert-warning" style="">
                <i class="glyphicon glyphicon-warning-sign"></i> no shared files in record or files have been returned</div>
        </td></tr></tfoot>
              </table>
              
            <?php }} ?>
           
              
              
               
                
            
              
              
       
              
              
              
              
              
              
              
              
              
              
            
          
          
          </div>
<div class="row pagination-section"><div class="col-sm-4 col-md-3 col-lg-2 vspacer-lg">.
        <button onClick="document.myform.SelectedID.value = ''; document.myform.NoDV.value = 1; return true;" type="submit" name="Previous_x" id="Previous" value="1" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button></div><div class="col-sm-4 col-md-4 col-lg-2 col-md-offset-1 col-lg-offset-3 text-center vspacer-lg"></div><div class="col-sm-4 col-md-3 col-lg-2 col-md-offset-1 col-lg-offset-3 text-right vspacer-lg">
            <button onClick="document.myform.SelectedID.value = ''; document.myform.NoDV.value=1; return true;" type="submit" name="Next_x" id="Next" value="1" class="btn btn-default btn-block">Next <i class="glyphicon glyphicon-chevron-right"></i></button></div></div></div><
        <input name="current_view" id="current_view" value="TV" type="hidden"><input name="SortField" value="" type="hidden"><input name="SelectedID" value="" type="hidden"><input name="SelectedField" value="" type="hidden"><input name="SortDirection" type="hidden" value=""><input name="FirstRecord" type="hidden" value="1"><input name="NoDV" type="hidden" value="">
<input name="DisplayRecords" value="all" type="hidden" /></div></div><div class="col-xs-1 md-hidden lg-hidden"></div></div>			<!-- Add footer template above here -->		<div class="clearfix"></div>
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
				<script src="resources/lightbox/js/lightbox.min.js"></script>
	</body>
</html>


<?php


?>