<?php
session_start();
session_unset();
include '../db/connection.php'; 

if(isset($_POST['signin'])){
    //echo "hello";
     $username =$_POST['username'];
     $password = md5($_POST['password']);
     
    $sql= $conn->query("select * from users where users.username='$username' and users.password='$password';");
    if($sql->num_rows > 0){
        while($row= $sql->fetch_array()){
             $_SESSION['user'] =$row['id'];
             $_SESSION['department']=$row['department'];
           $auth=$_SESSION['auth'] = $row['auth'];
             
            $user= $_SESSION['user'];
            
            $department= $_SESSION['department'];
        }
    } else {
        $_GET['error']= "user does not exist";
          header("location:../index.php?error");
          exit();
   
      
    }
}
    //creating sessions
    
    
//switch deparmnet
if($department != 'RECORDS' && $auth !='admin'){
header("location:../guest/");
exit();
}else{
   header("location:../admin/");
   exit();
}



?>