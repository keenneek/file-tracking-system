<?php
include '../../db/connection.php';

if(isset($_POST['submit'])){
     $id= $_POST['hiddenid'];   
    
    $refnumber=$_POST['refno'];
    $fholder=$_POST['fileholder'];
   $file_type= $_POST['type_of_file'];
      $follio =$_POST['follio'];
  

      
     $edition= $_POST['fileedition'];
      if($s= $conn->query("select position from users where id ='$id'")){
         while($t= $s->fetch_array()){
            $position= $t['position'];
         }
          
      }
        
        
      $sql=$conn->query("INSERT INTO `files` (`ref_number`, `holder`, `type`,   `edition`,`follio`, `current_location`, `possession`)
             VALUES ('$refnumber', '$fholder', '$file_type',  '$edition','$follio', 'RECORDS', '$position')");
      if(!$sql){
               exit();
                  
}else{
    echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';     
            header("refresh:1; url= index.php");

}
}


?>