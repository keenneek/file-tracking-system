<?php
include "../db/connection.php";
if(isset($_POST['signin'])){
   
    $username= $_POST['username'];
     $department =$_POST['department'];
     $position  = $_POST['position'];
     $password  = md5($_POST['password']);
     $password2  = md5($_POST['password1']);
    if($department === 'RECORDS'){
        $auth ="admin";
    }else{
        $auth = "user";
        
        if($password !== $password2){
            // echo $_GET["error"] = true;
              header("location:../register.php?error");
          exit();
        }else{
               $password=$password;
        }
    }
    
if(!isset($_SESSION["error"]) || empty($_SESSION['error'])){
       
      if(!$conn->query("INSERT INTO `users` ( `username`, `password`, `department`, `position`, `auth`)"
              . " VALUES ( '$username', '$password', '$department', '$position', '$auth')")){
             
         // echo " not done...";
          header("location:../register.php?error2");
          //echo $_GET["error2"] = true;
          //for now its all done /
          //set preloader
          
          //testing remaining
              }else{
                    
      echo' <img class="img-circle" style="position:relative; left:38%; top:190px; width:400px;" src="../resources/table_icons/doading4.gif">';
                // echo $_GET["success"] = true;

     header("refresh:1;  url = ../index.php?success");
        exit();
              }
              
              
    }
 
}

?>