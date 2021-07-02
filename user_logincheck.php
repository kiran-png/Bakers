<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    if(empty($email)){
        die("Empty or invalid email address");
    }
    if(empty($password)){
        die("Enter your password");
    }
    $mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $qry=new MongoDB\Driver\Query([]);
    // Select Database
    $rows=$mongo->executeQuery("local.user",$qry);
    
    foreach($rows as $row){
       if($email==$row->email && $password==$row->password){    
        // session_register("email");
        $_SESSION['user_email'] = $email;
        header("Location:"."index.php");
        
       }
   
    }
    echo '<script>alert("Dear:-'.$email.',\nSorry invalidpassword!\n enter correct password.")</script>';
    
   
    
}
?>      