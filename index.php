<?php
 include('register.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md ">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><b><span class="span">H</span>ome</b></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <button type="submit" class="btn btn-primary" href="#" data-toggle="modal"
                            data-target="#exampleModal">LOGIN</button>
                    </li>
                </ul>
            </div>
        </nav>
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="signin.php" method="post">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                name="password">
                        </div>
                        <div class="form-group">
                        <a href="signup.php"><p>don't have an account signup?</p></a>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>
      <?php
                if(isset($_SESSION["message"])){ ?>
                        <div class="alert alert-<?= $_SESSION["msg_type"];?> alert-dismissible text-center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <b> <?= $_SESSION["message"];?></b>
                        </div>
                        <?php } unset($_SESSION["message"]);?>
        <div class="row" id="mytabs">
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Vision</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active container" id="home">Matagal na nating alam na nakukuha ang atensyon ng
                        nagbabasa ang nababasa na nilalaman ng pahina kapag tinitignan ang pagkakaayos. Ang punto ng
                        paggamit ng Lorem Ipsum ay ito ay may humigit-kumulang na normal na distribusyion ng mga lettra,
                        kesa sa paggamit ng 'Dito ang nilalaman, dito ang nilalaman', pinamumuka nitong nababasa</div>
                    <div class="tab-pane container" id="menu1">Matagal na nating alam na nakukuha ang atensyon ng
                        nagbabasa ang nababasa na nilalaman ng pahina kapag tinitignan ang pagkakaayos. Ang punto ng
                        paggamit ng Lorem Ipsum ay ito ay may humigit-kumulang na normal na distribusyion ng mga lettra,
                        kesa sa paggamit ng 'Dito ang nilalaman, dito ang nilalaman', pinamumuka nitong nababasa</div>
                    <div class="tab-pane container" id="menu2">Matagal na nating alam na nakukuha ang atensyon ng
                        nagbabasa ang nababasa na nilalaman ng pahina kapag tinitignan ang pagkakaayos. Ang punto ng
                        paggamit ng Lorem Ipsum ay ito ay may humigit-kumulang na normal na distribusyion ng mga lettra,
                        kesa sa paggamit ng 'Dito ang nilalaman, dito ang nilalaman', pinamumuka nitong nababasa</div>
                </div>
            </div>
        </div>
        <div class="row" id="partaners">
            <div class="col-sm-4">
                <h3><b>Better organization to get focused</b></h3>
                <p id="better">Keep your team on the rails. Tracker's shared backlog makes priorities clear so the team
                    can stay
                    organized. Easily visualize scope, focus your teamwork, and stay nimble when circumstances change.
                </p>
            </div>
            <div class="col-sm-8">
                <img src="./images/better.png" class="center" alt="">
            </div>
        </div>
        <div class="row" id="partaners">
            <div class="col-sm-8">
                <img src="./images/adapt.png" class="center" alt="">
            </div>
            <div class="col-sm-4">
                <h3><b>Tools to help you adapt and evolve</b></h3>
                <p id="better">Get more work done, more often. Tracker's guided iteration planning helps you break down
                    and prioritize projects into manageable chunks so the team can keep the momentum toward delivering.
                </p>
            </div>
        </div>
        <div class="row" id="partaners">
        <div class="col-sm-4">
                <h3><b>Team transparency at a glance</b></h3>
                <p id="better">Get more work done, more often. Tracker's guided iteration planning helps you break down
                    and prioritize projects into manageable chunks so the team can keep the momentum toward delivering.
                </p>
            </div>
            <div class="col-sm-8">
                <img src="./images/team.png" class="center" alt="">
            </div>
           
        </div>
        <div class="row" id="partaners">
            <div class="col-sm-12" id="started">
                <h3 id="started">Ready to get your team on track? </h3>
                 <a class="btn btn-warning " href="#">Get Started</a>
            </div>

        </div>
        <div class="row" id="partaners">
            <div class="col-sm-12">
                <img src="./images/dashboard.png" class="center" alt="">
            </div>
        </div>

        <div class="row" id="parthead">
            <div class="col-sm-12">
                <p>Our Parterners</p>
            </div>
        </div>
        <div class="row" id="partaners">

            <div class="col-sm-4">
                <p>Ang Lorem Ipsum ay ginagamit na modelo ng industriya ng pagpriprint at pagtytypeset. Ang Lorem Ipsum
                    ang naging regular na modelo simula pa noong 1500s</p>
                <img src="./images/techouse.jpg">
            </div>
            <div class="col-sm-4">
                <p>Ang Lorem Ipsum ay ginagamit na modelo ng industriya ng pagpriprint at pagtytypeset. Ang Lorem Ipsum
                    ang naging regular na modelo simula pa noong 1500s</p>
                <img src="./images/techouse.jpg">
            </div>
            <div class="col-sm-4">
                <p>Ang Lorem Ipsum ay ginagamit na modelo ng industriya ng pagpriprint at pagtytypeset. Ang Lorem Ipsum
                    ang naging regular na modelo simula pa noong 1500s</p>
                <img src="./images/techouse.jpg">
            </div>
        </div>

    </div>


</body>

</html>