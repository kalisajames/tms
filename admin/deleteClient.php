<?php
include '../config.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $con->query("DELETE FROM clients WHERE id='$id'") or die($con->mysqli_error());
    header("location:clients.php");
    $_SESSION['message'] = 'client have been deleted';
    $_SESSION['msg_type']='danger';
}

?>