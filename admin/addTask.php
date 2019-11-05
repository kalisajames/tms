<?php
include '../config.php';
session_start();
if(isset($_POST['savedata'])){
    $task = $_POST['task'];
    $category = $_POST['category'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $status = $_POST['status'];
    $client = $_POST['client'];
    $priority = $_POST['priority'];
    $con->query("INSERT INTO `tasks` (`task`, `category`, `startdate`, `enddate`, `status`, `client`, `priority`) VALUES ('$task', '$category', '$startdate', '$enddate', '$status', '$client', '$priority')") or
    die($con->mysqli_error());
    header("location:tasks.php");
    $_SESSION['message'] = 'task have been saved';
    $_SESSION['msg_type']='success';
}
?>