    <?php
    session_start();
    include '../../db/connection.php';

    if(!isset($_SESSION['user']) || !isset($_SESSION['department']) ){

        header("location:../../");
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
                    <link id="browser_favicon" rel="shortcut icon" href="../../resources/images/appgini-icon.png">

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
                    <script src="../../resources/jquery/js/jquery-1.11.2.min.js"></script>
                    <script>var $j = jQuery.noConflict();</script>
                    <script src="../../resources/jquery/js/jquery.mark.min.js"></script>
                    <script src="../../resources/initializr/js/vendor/bootstrap.min.js"></script>
                    <script src="../../resources/lightbox/js/prototype.js"></script>
                    <script src="../resources/lightbox/js/scriptaculous.js?load=effects"></script>
                    <script src="../../resources/select2/select2.min.js"></script>
                    <script src="../../resources/timepicker/bootstrap-timepicker.min.js"></script>
                    <script src="../../resources/jscookie/js.cookie.js"></script>
                    <script src="../../../common.js.php"></script>

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



                                                                                                                            <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
                                                            <a class="btn navbar-btn btn-default" href="index.php?signOut=1"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
                                                            <p class="navbar-text">
                                                                    Signed in as <strong><a href="membership_profile.php" class="navbar-link">admin</a></strong>
                                                            </p>
                                                    </ul>
                                                    <ul class="nav navbar-nav visible-xs">
                                                            <a class="btn navbar-btn btn-default btn-lg visible-xs" href="index.php?signOut=1"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a>
                                                            <p class="navbar-text text-center">
                                                                    Signed in as <strong><a href="membership_profile.php" class="navbar-link">admin</a></strong>
                                                            </p>
                                                    </ul>

                                                                                                    </div>
                    </nav>
                                                    <div style="height: 70px;" class="hidden-print"></div>


                            <div class="notifcation-placeholder" id="notifcation-placeholder-89988708"></div>



                            <!-- process notifications -->
                                                    <div style="height: 60px; margin: -15px 0 -45px;">
                                                            </div>

                                                    <!-- Add header template below here .. -->

    <div class="row"><div class="col-xs-11 col-md-12">
            <form enctype="multipart/form-data" method="post" name="myform" action="lend.php">
                <script>function enterAction(){   if($j("input[name=SearchString]:focus").length){ $j("#Search").click(); }   return false;}</script>
                <input id="EnterAction" type="submit" style="position: absolute; left: 0px; top: -250px;" onclick="return enterAction();">
                <div class="page-header"><h1><a style="text-decoration: none; color: inherit;" href="#">
                            <img style="height: 50px;" src="../../resources/table_icons/share.jpg"> share a file</a>
                    </h1></div><!-- possible values for current_view: TV, TVP, DV, DVP, Filters, TVDV --><input name="current_view" id="current_view" value="DV" type="hidden"><input name="SortField" value="" type="hidden"><input name="SelectedID" value="" type="hidden"><input name="SelectedField" value="" type="hidden"><input name="SortDirection" type="hidden" value=""><input name="FirstRecord" type="hidden" value="1"><input name="NoDV" type="hidden" value=""><input name="PrintDV" type="hidden" value=""><input name="DisplayRecords" value="all" type="hidden" />
            <div class="col-xs-12 detail_view "><div class="panel panel-default"><!-- Edit this file to change the layout of the detail view form -->

    <script src="../../resources/datepicker/js/datepicker.packed.js"></script>
    <link href="../../resources/datepicker/css/datepicker.css" rel="stylesheet">

    <a name="detail-view"></a>
    <div class="panel-heading"><h3 class="panel-title"><strong>File Details</strong></h3></div>

    <div class="panel-body" id="patients_dv_container">
            <!-- child links -->
            <div class="row">
                    </div>
            </div>
            <hr>

            <div class="row">
                    <!-- form inputs -->
                    <div class="col-md-8 col-lg-10" id="patients_dv_form">
                            <fieldset class="form-horizontal">



                                    <div class="form-group">
                                            <label for="last_name" class="control-label col-lg-3">Ref:Number<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input autocomplete="off" style="width: 90%;" maxlength="40" type="text" class="form-control" name="refno" id="refn" value="" required>
                                            </div>
                                    </div>

                                   

                                
                                
                                

        
                                
                                    <div class="form-group">
                                            <label for="" class="control-label col-lg-3"> Target Department *</label>

                                            <div class="col-lg-9">
                                                    <div class="row">
                                                      
                                                           
             <select  style=" margin-bottom: 10px; position: relative; left: 2%;width: 87%;"  id="birth_date-mm" class="form-control" style="" name="department">

            <option value="">select department</option>
            <?php $q=$conn->query("select name from departments");
          while ($r=$q->fetch_array()){
            ?>
            <option value="<?php echo $r['name'];  ?> " ><?php echo $r['name'];  ?> </option>
            <?php } ?>
            
                                                                </select>
                                                    
                                                    
                                                    </div>
                                            </div>
                                    </div>
                                
                                
                                
                                 <div class="form-group">
                                            <label for="" class="control-label col-lg-3"> Target staff*</label>

                                            <div class="col-lg-9">
                                                    <div class="row">
                                                      
                                                           
             <select  style=" margin-bottom: 5px; position: relative; left: 2%;width: 87%;"  id="birth_date-mm" class="form-control" style="" name="position">

            <option value="">select staff</option>
            <option value="DIRECTOR">DIRECTOR</option>
            <option value="DEPUTY DIRECTOR">DEPUTY DIRECTOR</option>
             <option value="HEAD OF DEPARTMENT">HEAD OF DEPARTMENT</option>
            <option value="SECRETARY">SECRETARY</option>
            <option value="STAFF">STAFF</option>
            
                     </select>
                                                    
                         </div>
                           </div>
                           </div>
                                
                                                
                                                
                                                
                                                
                                                      <div class="row">
                                                      
                                                           
                                                          
                                                    
                                                    
                                                    </div> 
                                                        
           <div class="col-xs-3 date_combo"></div>
            
            
                             

      

                            </fieldset>
                    </div>

                    <!-- DV action buttons -->
                    <div class="col-md-4 col-lg-2" id="patients_dv_action_buttons">
                            <div class="btn-toolbar">
                                    <div class="btn-group-vertical btn-group-lg" style="width: 100%;">

                                    </div><p></p>
                                    <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                                        <a href="index.php"type="submit" class="btn btn-default" id="deselect" name="deselect_x" value="1" onclick="$$('form')[0].writeAttribute('novalidate', 'novalidate'); document.myform.reset(); return true;" title="Back"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                                            <!-- DVPRINT_BUTTON -->

                                    </div><p></p>
                                    <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                                        <input type="submit" class="btn btn-success" id="insert" name="submit" value="share file" value="1" onclick="return patients_validateData();">
                                                <i class="glyphicon glyphicon-plus-sig"></i></button>
                                    </div>
                            </div>
                    </div>
            </div>

<?php

?>
            <!-- child records -->
            <hr>
            <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                            <div id="patients-children" class="children-tabs"></div>
                    </div>
            </div>

    </div><!-- /div class="panel-body" -->
            <script src="nicEdit.js"></script>
            <script>
                   
            </script>

    
    <script>$j(function() {});</script><script>
            $j(function(){
                    var tn = 'patients';

                    /* data for selected record, or defaults if none is selected */
                    var data = {
                    };

                    /* initialize or continue using AppGini.cache for the current table */
                    AppGini.cache = AppGini.cache || {};
                    AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
                    var cache = AppGini.cache[tn];

                    cache.start();
            });
    </script>

    </div></div><input name="SearchString" value="" type="hidden"></div>
        </form>
        </div>
                                                    <div class="col-xs-1 md-hidden lg-hidden"></div></div>			<!-- Add footer template above here -->
                            <div class="clearfix"></div>
                                                            <div style="height: 70px;" class="hidden-print"></div>


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