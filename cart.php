<?php
include "./config/config.php";
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
// require_once ("notif.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>O_MART</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="plugins/jquery/dist/jquery.js" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="scss/_products.scss" rel="stylesheet">
    <link href="scss/_typography.scss" rel="stylesheet">
    <link href="scss/notif_design.scss" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet"/>
</head>
<head>


    <!-- FAVICON -->
    <link href="images/icons/favicon.ico" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="body-wrapper">

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg  navigation">
                        <a class="navbar-brand" href="dashboard.php">
                            <img src="images/omart.png" alt="">
                        </a>
                        <li><?php
                                echo "Hello ".$_SESSION["user"];
                        ?></li>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="dashboard.php">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="cart.php">cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="category.php">category</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="sell.php">sell product </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto mt-10">
                            <li class="nav-item">
                                <a class="nav-link login-button" href="logout.php" style="background-color:aqua">logout</a>
                            </li>
						</ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

<?php

// header("requests.php");
echo'
<div class="row">		
    <div class="col-md-12">
        <div class="card">
            <div class="card-body" style="background-image:radial-gradient(circle, rgba(100,25,52,0.5), rgba(200,25,52,0))">
                <div class="table-responsive">
                    <table class="table" style="background-image:linear-gradient(to  right, rgba(180,80,30,0.1), rgba(180,80,30,0.8), rgba(200,200,200,0.5))">
                    <thead class=" text-primary">
                        <th >
                        message
                        </th>
                        <th >
                        seller_email
                        </th>
                    </thead>
                    <tbody>';

                $sql = "SELECT * FROM notif WHERE userid='" .$_SESSION["user"]. "'";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo nl2br("");
                $msg=$row['message'];
                //Creates a loop to dipslay all complain
                echo "\n<td>".$msg."</td>";
                echo nl2br("");
                echo "\n<td>".$row['seller_email']."\n</td>";
                echo nl2br("");
                echo "</tr>";
              }
              echo nl2br("");
                echo '</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>';

?>
  <!--============================
    =            Footer            =
    =============================-->
    
    <!-- Footer Bottom -->
    <br><br><br><br><br><br><br><br><br><br><br>
    <footer class="footer-bottom">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <!-- Copyright -->
                    <div class="copyright">
                        <p>Copyright © 2019. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <!-- Social Icons -->
                    <ul class="social-media-icons text-right">
                        <li><a class="fa fa-facebook" href=""></a></li>
                        <li><a class="fa fa-twitter" href=""></a></li>
                        <li><a class="fa fa-pinterest-p" href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Container End -->
        <!-- To Top -->
        <div class="top-to">
            <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
        </div>
    </footer>

    <!-- JAVASCRIPTS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/tether/js/tether.min.js"></script>
    <script src="plugins/raty/jquery.raty-fa.js"></script>
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
    <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="js/scripts.js"></script>

</body>

</html>