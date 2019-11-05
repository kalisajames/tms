<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['save'])){
        // removes backslashes
 $firstname = stripslashes($_REQUEST['firstname']);
 $firstname = mysqli_real_escape_string($con,$firstname); 
 $lastname = stripslashes($_REQUEST['lastname']);
 $lastname = mysqli_real_escape_string($con,$lastname); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into `users` (firstname,lastname,email,password)
VALUES ('$firstname','$lastname', '$email', '".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            header("location:index.php");
            $_SESSION['message'] = 'user have been created';
            $_SESSION['msg_type']='success';
        }
    }

?>