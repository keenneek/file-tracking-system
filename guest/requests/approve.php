    <?php
    error_reporting(0);
include'../../db/connection.php';
if(isset($_POST['approve'])){
      $file =$_POST["hiddenfile"];
        $query= $conn->query("select * from files where files.ref_number='$file'");
     while($row= $query->fetch_array()){
         //file data
          $ref_number =$row['ref_number']; echo"<br>";
          $type =$row['type'];
          $file_name= $row['holder'];echo"<br>";
          $current_location  =$row['current_location'];echo"<br>";
         $staff= $row['possession'];
        
     }
    
   
    //add to sharing
  $key1= $key2 =$key3= true;
  $sql =$conn->query("select source_dept,source_position from requests where ref_number ='$file'");
  while($r=$sql->fetch_array()){
        $deptartment= $r['source_dept'];
         $position= $r['source_position'];
  }
     $date= date('d/m/');
    $date= $date. "20".date("y");
     $status="0";
     
  
    
   

    
    if(!$conn->query("INSERT INTO sharing (ref_number,file_name, file_type, department, 
            position, date, status) VALUES ('$file','$file_name', '$type', '$deptartment', '$position', '$date', '$status')")){
       
        echo "key1 =false";
       
       $key1= false;
        exit();
            }
            
              //udate request status
            if(!$conn->query("UPDATE `requests` SET `status` = 'approved' WHERE `requests`.`ref_number` = '$file'")){
                $key2=false;
             //   echo "key2= false";
                 exit();
            }
            //update file locstion
           
    if(!$conn->query("UPDATE files SET possession = '$position',current_location='$deptartment' WHERE files.ref_number = '$file';"))
    {
       echo 'key3 =false';        
        $key3= false;
       exit();
        
    }
   if ($key1 && $key2 && $key3){
   
       
       echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';     
        header("refresh:1; url= index.php");
   }    
}




if(isset($_POST['decline'])){
   $file =$_POST["hiddenfile"];
 if( $conn->query("delete from requests where ref_number ='$file'")){
      echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';     
        header("refresh:1; url= index.php");
        exit();
 }
}
    
   //share file
    
    
            
    


?>