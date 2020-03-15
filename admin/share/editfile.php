<body style="background-color: white">
<?php

include "../../db/connection.php";
 
if(isset($_POST['checkfile'])){
    $user =$_POST['hiddenuser'];
    $ref_no=$_POST['hiddenfile'];
    
    if($sq=$conn->query("select * from users  where id= '$user'")){
        
        while($rw =$sq->fetch_array()){
            
             $userlocation =$rw['department'];
             $userposition = $rw['position'];
        }
    }
    
    if(!$conn->query("UPDATE files  SET current_location = '$userlocation', possession ='$userposition' WHERE files.ref_number = '$ref_no'")){
      //  echo "updating location failed";
        exit();
    } 
    
   if(!$sql=$conn->query("UPDATE `sharing` SET `status` = '1' WHERE `sharing`.`ref_number` = '$ref_no'")){
       //echo "sharing not updated..";
       exit();
     //echo "sharing updated";
   }
   
   if(!$conn->query("delete from requests where ref_number='$ref_no'")){
   $ql= $conn->query("delete from requests where ref_number='$ref_no'");
   }
   
        if(!$conn->query("delete from sharing where ref_number ='$ref_no'" )){
           // echo "black//////";
            exit();
        }else{
     echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';
         header("refresh:1;  url = index.php");
          exit();
    }
    
}


if(isset($_POST['share'])){
    echo $ref_no=$_POST['hiddenfile'];
    //change status
    //update request final
}
?>
</body>
