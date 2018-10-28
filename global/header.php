<?php

ob_start();
session_start();

if (!isset($_SESSION['flag']) == 1) {
    header("location:login.php");
    session_destroy();
}

$sessionVar = $_SESSION['login_email'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Support portal System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./assets/images/logo_icon.png" type="image/x-icon">

    <link href="./assets/css/bootstrap-theme.css" type="text/css" rel="stylesheet">
    <link href="./assets/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main1.css">
    <link rel="stylesheet" type="text/css" href="./assets/font-awesome-4.6.3/css/font-awesome.min.css">
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet">

</head>


<body style="margin: 0px">

<div class="headerwraper">
    <nav class="navbar navbar-default mynav">
        <div class="container_fluid mycontainer">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div style=" width: 300px;">
                    <div style="height: 80px; width: 80px; display: inline-block">
                        <img href="index.php" src="./assets/images/sss.png" alt="" class="img-responsive img-circle"/>
                    </div>
                </div>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class=" nav navbar-nav navbar-right myhover ">

                    <li><a href="./index.php">Home</a></li>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            Help Category
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu gallerydropdown" style="padding: 10px; background-color: coral">
                            <li class="gallery"><a href="./safety.php" > Women Safety</a></li>
                            <li><a href="./health.php"> Women Health</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.php">Contact Us</a></li>


                    <li><a href="account.php"><?php echo $sessionVar ?></a></li>
                    <li><a href="./raw/session_destroy.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
