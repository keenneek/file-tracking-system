<?php
include '../../db/connection.php';
 if(isset($_POST['delete'])){
      $id= $_POST["currentfile"];
     
      if($conn->query("delete from users where users.id ='$id'")){
          echo '<script>confirm("delete user?");</script>';
           echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';
       
          header("refresh:1; url= index.php");
      
}
    
 }
?>