<?php

 require_once 'database.php';
 
 
 if (isset($_POST['name'])){
     
     $name = $_POST['name'];
     $description = $_POST['description'];
     
     $query = "INSERT into task(name,description) VALUES ('$name' , '$description')";
     
     $result = mysqli_query($con, $query);
     
     if(!$result){
        
         die('Query failed .');
         
     }
     
     echo 'Task Add Succesfully ';
     
     
    
     
 }
 
 



?>

