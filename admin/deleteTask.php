<?php
include '../config.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $con->query("DELETE FROM tasks WHERE id='$id'") or die($con->mysqli_error());
    header("location:tasks.php");
    $_SESSION['message'] = 'task  have been deleted';
    $_SESSION['msg_type']='danger';
}
?>