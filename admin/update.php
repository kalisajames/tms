<?php
include '../config.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$id="";
$task="";
$category="";
$startdate="";
$enddate="";
$status="";
$client="";
$priority="";

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result=$con->query("SELECT * FROM tasks WHERE id=$id") or die($con->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $id = $row['id'];
        $task = $row['task'];
        $category=$row['category'];
        $startdate = $row['startdate'];
        $enddate=$row["enddate"];
        $status=$row["status"];
        $client=$row["client"];
        $priority=$row["priority"];
    }
    $update=true;
}
if(isset($_POST["update"])){
    $id = $_POST['id'];
    $task = $_POST['task'];
    $category=$_POST['category'];
    $startdate = $_POST['startdate'];
    $enddate=$_POST["enddate"];
    $status=$_POST["status"];
    $client=$_POST["client"];
    $priority=$_POST["priority"];
    $con->query("UPDATE tasks SET task='$task',category='$category',startdate='$startdate' ,enddate='$enddate',status='$status',client='$client',priority='$priority' WHERE id=$id") or die($con->error());
    header("location:tasks.php");
    $_SESSION['message'] = 'task have been updated';
    $_SESSION['msg_type']='warning';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TMS Admin Dashboard</title>
    <link rel="stylesheet" href="css/my-form.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TMS Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Categories</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="tasks.php">Tasks</a>
                        <a class="collapse-item" href="mytask.php">My Tasks</a>
                        <a class="collapse-item" href="clients.php">Clients</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="abadiyakoni.php"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" name="search"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" value="search">
                            </div>
                        </div>
                    </form>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">james</span>

                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="update.php" method="post">
                                <input type="hidden" name="id" value="<?=$id;?>">
                                <div class="form-group">
                                    <label for="email">Task</label>
                                    <input type="text"  value="<?=$task;?>"  class="form-control" id="email" placeholder="Task name"
                                        name="task" required>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Category:</label>
                                    <input type="text"  value="<?=$category;?>" class="form-control" id="pwd" placeholder="task category"
                                        name="category" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Start Date:</label>
                                    <input type="date"  value="<?=$startdate;?>" class="form-control" id="pwd" placeholder="start date"
                                        name="startdate" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">End Date:</label>
                                    <input type="date"  value="<?=$enddate;?>" class="form-control" id="pwd" placeholder="end date"
                                        name="enddate" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Status:</label>
                                    <input type="text"  value="<?=$status;?>" class="form-control" id="pwd" placeholder="task status"
                                        name="status" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Client:</label>
                                    <input type="text"  value="<?=$client;?>" class="form-control" id="pwd" placeholder="client name"
                                        name="client" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Priority:</label>
                                    <input type="text"  value="<?=$priority;?>" class="form-control" id="pwd"
                                        placeholder="task priority in percentage" name="priority" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary " name="update" value="update">
                                </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; TMS Team 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>