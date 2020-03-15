<?php
 include '../../db/connection.php';
if(isset($_POST['submit'])){
    $ref_no= $_POST['refno'];
    
     //$filename= $_POST['fileholder'];
   $target_dept = $_POST['department'];
     $target_pos= $_POST['staff'];   echo '<br>';
     
     $s = $conn->query("select * from files where files.ref_number= '$ref_no'");
     if(mysqli_num_rows($s)  > 0 ){
         while($rs =$s->fetch_array()){
             $filename= $rs['holder'];
         }
     }else{
             echo "file is not registered. Please confirm with the record Departmet";
             exit();
            header("refresh:1; url= myrequests.php");
         }
         
     
         
     
    
    $user = $_POST['hiddenid'];
    $sql =$conn->query("select * from users where users.id= '$user'");
    while($row= $sql->fetch_array()){
        
       $department= $row['department'];
         $staff= $row['position'];
        
       $date= date('d/m/');
       $date=$date. "20".date('y');
       $status= "pending";
      
        if($conn->query("INSERT INTO `requests` 
                (`ref_number`, `file_name`, `source_dept`, `source_position`, `request_date`,
               `target_dept`, `target_position`, `status`)
                VALUES ('$ref_no', '$filename', '$department', '$staff', '$date', '$target_dept', '$target_pos', '$status')")){
          
            echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';     
          header("refresh:1; url= myrequests.php");
          
          
              }else{
                  
                 echo "file is currently busy .please try again later....";
                 header("refresh:2; url= myrequests.php");
              }
       
    }
    exit;
}
if(isset($_POST['cancel'])){
    
   $id=$_POST['hiddenfile'];
   
   if( $conn->query("UPDATE `requests` SET `status` = 'cancelled' WHERE `requests`.`ref_number` = '$id'")){
        echo '<br>';  echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';     
          header("refresh:1; url= myrequests.php");
          
   }else{
       echo "not cancelled";
   }
   
}


?>