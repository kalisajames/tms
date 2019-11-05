<?php
include ('addTask.php');
include ('deleteTask.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TMS Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet" type="text/css">


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
                     <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">Time is up,your remaining 7 days</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    next task is waiting for your
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    you have 4 days remaining to finish your task.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">James</span>

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
                    <div class="container mt-3">
                        <h2>Toggleable Tabs</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">All Task</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu2">To Do</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Doing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu3">Completed</a>
                            </li>
                        </ul>
                        <?php
                      $result = $con->query("SELECT * FROM tasks WHERE client='james'") or die($con->error);
                     ?>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                            <div class="table-responsive">
                        <table id="dtHorizontalVerticalExample" class="table table-bordered table-striped  table-sm"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Task</th>
                                    <th>Category</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php while($row=$result->fetch_assoc()) {?>
                            <tbody>
                                <tr>
                                    <td><?=$row['id'];?></td>
                                    <td><?=$row['task'];?></td>
                                    <td><?=$row['category'];?></td>
                                    <td><?=$row['startdate'];?></td>
                                    <td><?=$row['enddate'];?></td>
                                    <td><?=$row['status'];?></td>
                                    <td><?=$row['priority'];?></td>
                                    <td>
                                        <a class="badge badge-danger"
                                            href="deleteTask.php?delete=<?=$row['id'];?>">Delete</a>
                                    </td>
                                </tr>

                            </tbody>
                            <?php } ?>
                        </table>
                    </div>

                            </div>
                            <?php
                      $result = $con->query("SELECT * FROM tasks WHERE client='james' AND status='Doing'") or die($con->error);
                     ?>
                            <div id="menu1" class="container tab-pane fade"><br>
                            <div class="table-responsive">
                            <table id="dtHorizontalVerticalExample" class="table table-bordered table-striped  table-sm"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Task</th>
                                    <th>Category</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php while($row=$result->fetch_assoc()) {?>
                            <tbody>
                                <tr>
                                    <td><?=$row['id'];?></td>
                                    <td><?=$row['task'];?></td>
                                    <td><?=$row['category'];?></td>
                                    <td><?=$row['startdate'];?></td>
                                    <td><?=$row['enddate'];?></td>
                                    <td><?=$row['status'];?></td>
                                    <td><?=$row['priority'];?></td>
                                    <td>
                                        <a class="badge badge-danger"
                                            href="deleteTask.php?delete=<?=$row['id'];?>">Delete</a>
                                    </td>
                                </tr>

                            </tbody>
                            <?php } ?>
                        </table>
                    </div>

                            </div>
                            <?php
                      $result = $con->query("SELECT * FROM tasks WHERE client='james' AND status='Todo'") or die($con->error);
                     ?>
                            <div id="menu2" class="container tab-pane fade"><br>
                            <div class="table-responsive">
                            <table id="dtHorizontalVerticalExample" class="table table-bordered table-striped  table-sm"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Task</th>
                                    <th>Category</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php while($row=$result->fetch_assoc()) {?>
                            <tbody>
                                <tr>
                                    <td><?=$row['id'];?></td>
                                    <td><?=$row['task'];?></td>
                                    <td><?=$row['category'];?></td>
                                    <td><?=$row['startdate'];?></td>
                                    <td><?=$row['enddate'];?></td>
                                    <td><?=$row['status'];?></td>
                                    <td><?=$row['priority'];?></td>
                                    <td>
                                        <a class="badge badge-danger"
                                            href="deleteTask.php?delete=<?=$row['id'];?>">Delete</a>
                                    </td>
                                </tr>

                            </tbody>
                            <?php } ?>
                        </table>
                    </div>

                            </div>
                            <?php
                      $result = $con->query("SELECT * FROM tasks WHERE client='james' AND status='completed'") or die($con->error);
                     ?>
                            <div id="menu3" class="container tab-pane fade"><br>
                            <div class="table-responsive">
                            <table id="dtHorizontalVerticalExample" class="table table-bordered table-striped  table-sm"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Task</th>
                                    <th>Category</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php while($row=$result->fetch_assoc()) {?>
                            <tbody>
                                <tr>
                                    <td><?=$row['id'];?></td>
                                    <td><?=$row['task'];?></td>
                                    <td><?=$row['category'];?></td>
                                    <td><?=$row['startdate'];?></td>
                                    <td><?=$row['enddate'];?></td>
                                    <td><?=$row['status'];?></td>
                                    <td><?=$row['priority'];?></td>
                                    <td>
                                        <a class="badge badge-danger"
                                            href="deleteTask.php?delete=<?=$row['id'];?>">Delete</a>
                                    </td>
                                </tr>

                            </tbody>
                            <?php } ?>
                        </table>
                    </div>

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