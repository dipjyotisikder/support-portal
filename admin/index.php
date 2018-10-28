<?php
ob_start();
session_start();
if(!$_SESSION['login_email']== "admin@admin.com"){
    header("location: ../login.php");
    session_destroy();
}
include("../raw/connect.php");
    $sqlsafety = "Select * from safety ";
    $sqlhealth="Select * from health ";
    $findSafety = $conn->query($sqlsafety);
    $findHealth= $conn->query($sqlhealth);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="simple-sidebar.css">
    <script type="text/javascript" src="../assets/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript"  src="../assets/js/bootstrap.min.js"></script>

    <style media="screen">
        div a span {
            width: 20px;
            height: 20px;
            height: 3px;
            padding-bottom:2px;
            background: #00ff21;
            margin-bottom: 5px;
            display: block;
            cursor: pointer;
        }
        .button{
            display:inline-block;
            vertical-align:middle;
            width:20px;
            height:20px;
            cursor:pointer;
            margin:30px;
        }
        .button span{
            height:1px;
            background:#00ff21;
            margin-bottom:5px;
        }
        div a span:nth-child(2) {
            width: 75%;
        }

        div a span:nth-child(3) {
            width: 50%;
        }
        .bodystyle {
            background-color: #f0f0f0;
        }
        .navbar {
            border-radius: 0px;
        }
        .search {
            margin-left: 30px;
            margin-bottom:10px;
        }
        div h2 {
            font-weight: bold;
            color: #4cae4c;
            margin-bottom: 20px;
        }
        .vl {
            border-left: .5px solid #9bfa88;
            height: 500px;
            top: 0;
        }
    </style>
</head>
<body class="bodystyle">



<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#">Adminera</a></li>
            <li> <a href="">Home</a> </li>
            <li><a href="">Add Police Station</a></li>
            <li><a href="">Add Tips</a></li>
            <li><a href="">Messeges</a></li>
        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="navbar navbar-default navbar-static-top" style="border-radius:0px;">
            <div class="container-fluid form-inline">
                <a href="#menu-toggle" id="menu-toggle" class="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>

            <a class="btn btn-default" style="float: right; margin-right: 10px;" href="../raw/session_destroy.php"> Admin Logout</a>

            <div>
                <form class="form-inline search" >
                    <input class="form-control mr-sm-2" type="search" placeholder="Insert" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="container">

            <div class="container body-content">
                <hr />

                <div  class="col-md-6">
                    <h2>All Station</h2>
                    <?php
                    $count=1;
                    while ($res = $findSafety->fetch_assoc()) { ?>
                            <h4 style="margin-left: 10px"><?php echo $count.". ". $res["station"]; ?></h4>
                    <?php
                    $count++;
                    } ?>
                </div>
                <div class="col-md-6 vl">

                    <h2>All Tips</h2>
                    <?php
                    $count=1;
                    while ($res = $findHealth->fetch_assoc()) {
                        ?>
                        <h4 style="margin-left: 10px;">
                            <?php
                            echo $count.". ". $res["title"];
                            ?>
                        </h4>
                    <?php
                        $count++;
                    } ?>
                </div>
            </div>

            <footer class="panel-footer">
                <p>&copy; Ayshi & Munia</p>
            </footer>
        </div>
    </div>
</div>

<script>
    $("#menu-toggle").click(function (e) {
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>