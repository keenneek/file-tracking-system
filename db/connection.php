<?php
$conn =new mysqli('127.0.0.1','root','','file_tracking');

if($conn ->connect_error){
    die("database not connected");
    
}else{
  //  echo"database connected succesfully";
}



?>