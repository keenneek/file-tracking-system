<?php
include '../../db/connection.php';
if(isset($_POST['delete'])){
   $currentfile= $_POST['refno']; 
  echo "<script> confirm('dou want to delete the record') ;</script>";
  $sql=$conn->query("delete from files where files.ref_number='$currentfile'");
  if($sql){
      echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';
       
      header("refresh:1; url=index.php");
      exit();
  }
  
}

?>

 <?php
//unset($_POST['hidden_file']);
include '../../db/connection.php';

if(isset($_POST['save'])){
    
  $currentfile= $_POST['refno']; 
  $fholder=$_POST['fileholder'];
  $file_type= $_POST['type_of_file'];

  $type=$_POST['type_of_file'];
         
   $edition= $_POST['fileedition'];
   $follio= $_POST['follio'];
        
 $sql= $conn->query( "UPDATE files SET  type='$type',follio='$follio',  edition = '$edition' WHERE files.ref_number = '$currentfile'");
 
 
 if($sql){
   //  $_POST['hidden_file']=$currentfile;
     header("refresh:1; url=index.php");
     echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';
     exit();
   
 } else {
   //  echo "data was not updattds";
 }
 
    
}
    
    /*
 echo   $refnumber=$_POST['refno'];
    $fholder=$_POST['fileholder'];
 $file_type= $_POST['type_of_file'];
  
   // row dates from form
    $month_opening= $_POST['month_opening']; 
   $month_closing= $_POST['month_closing'];
    $day_opening= $_POST['day_opening']; 
      $day_closing= $_POST['day_closing'];
     $year_opening= $_POST['year_opening'];  
          $year_closing= $_POST['year_closing'];
         
      //configired date variables
      $date_opening= $day_opening."/".$month_opening."/".$year_opening;   
       $date_closing= $day_closing."/".$month_closing."/".$year_closing;
    $edition= $_POST['fileedition'];
        
 $sql= $conn->query(" UPDATE `files` SET `ref_number` = '$refnumber', `holder` = '$fholder', `opening_date` = '$date_opening',
     `closing_date` = '$date_closing',
     `edition` = '$edition'
     WHERE `files`.`ref_number` = $refnumber");
 
 if($sql){
     
echo "hiohoir";
 }
}
     * *
     */
      ?>    