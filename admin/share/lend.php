<?php
 include("../../db/connection.php");
if(isset($_POST['submit'])){
 $ref_no =$_POST['refno'];
//$file_type= $_POST['type_file'];
 $department= $_POST['department'];
 $position= $_POST['position'];
$date = date('d/m/');
 $date= $date."20".date('y');
 
if(!$s =$conn->query("select * from files where ref_number ='$ref_no'")){
    
    echo "the file does not exist";
    exit();
}else{
    
    while($rs= $s->fetch_array()){
        $file_name =$rs['holder'];
        $file_type =$rs['type'];
        
    }
}
    

if (!$conn->query("INSERT INTO sharing (ref_number,file_name,file_type,department, position,date) VALUES ('$ref_no','$file_name','$file_type','$department','$position','$date')")){
   // echo 'Q1 failed....';
    exit();

}


   

if(!$conn->query("UPDATE files  SET current_location = '$department', possession ='$position' WHERE files.ref_number = '$ref_no' ")){
  //  echo  '$2 failed...';
    exit();
   
}else{
        header("refresh:1; url=index.php");
          echo' <img class="img-circle" style="position:relative; left:30%; top:150px; width:400px;" src="../../resources/table_icons/doading4.gif">';
   
}}
    ?>

