<?php
include '../config.php';
session_start();
if(isset($_POST['savedata'])){
    $name = $_POST['name'];
    $position = $_POST['position'];
    $role = $_POST['role'];
    $con->query("INSERT INTO `clients` (`name`, `position`, `role`) VALUES ('$name', '$position', '$role')") or
    die($con->mysqli_error());
    header("location:clients.php");
    $_SESSION['message'] = 'client have been saved';
    $_SESSION['msg_type']='success';
}
?>