<?php
require('config.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
 $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){

     header("Location:./admin/admin.php");
         }else{
            header("location:login.php");
            $_SESSION['message'] = 'login failed ';
            $_SESSION['msg_type']='danger';
         }
        
}
?>