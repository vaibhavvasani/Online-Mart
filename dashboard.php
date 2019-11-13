<?php
    include "./config/config.php";
    if(!isset($_SESSION['user'])){
     header('location:login.php');
    }

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
  <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
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

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class="navbar-brand" href="dashboard.php">
						<img src="images/omart.png" class="animated heartBeat infinite" alt="">
                    </a>
                    <li><?php echo "Hello ".$_SESSION["user"]?></li>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="dashboard.php">Home</a>
                            </li>
                            <li class="nav-item">
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
                                <a class="nav-link login-button" href="logout.php" style="background-color:#ff8080">logout</a>
                            </li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>


<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Buy & Sell Near You </h1>
					<p>Join the millions who buy and sell from each other <br> everyday in local communities around the world</p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<i class="fa fa-grav"></i> Fitness
							</li>
							<li class="list-inline-item">
								<i class="fa fa-briefcase"></i> skin care
							</li>
							<li class="list-inline-item">
								<i class="fa fa-laptop"></i> electronics
							</li>
							<li class="list-inline-item">
								<i class="fa fa-briefcase"></i> fashion
							</li>
						</ul>
					</div>
					
				</div>
				<!-- Advance Search --
				<div class="advance-search">
					<form action="#">
						<div class="row">
							<!-- Store Search --
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex">
									<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for store">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex">
									<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for store">
									<!-- Search Button 
									<button class="btn btn-main">SEARCH</button>
								</div>
							</div>
						</div>
					</form>
					
				</div>-->
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<section class="popular-deals section bg-gray">
	<div class="container">
		    <div class="row">
			    <div class="col-md-12">
				    <div class="section-title">
					    <h2>Trending Ads</h2>
					    <p>These are some of the most trending products</p>
				    </div>
			    </div>
		    </div>
		    <div class="product-grid-list">
                        <div class="row mt-30">
                            <div class="col-sm-12 col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <!-- <a href="single.php"> -->
                                                <img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM elec WHERE pro_id=1";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title"><a name="11inch macbook">11inch Macbook Air</a></h4>
                                            <?php 
                                            $_SESSION["p_name"]='name';
                                            ?>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="electronic.php"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>                                            <!-- <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item "><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-sm-12 col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <!-- <a href="single.php"> -->
                                                <img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM fur WHERE pro_id=1";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title" name="study table"><a>Study Table Combo</a></h4>
                                            <?php 
                                                $_SESSION["p_name"]='name';
                                            ?>

                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="furniture.php"><i class="fa fa-folder-open-o"></i>Furnitures</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul><br>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>                                            <!-- <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-sm-12 col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <!-- <a href="single.php"> -->
                                                <img class="card-img-top img-fluid" src="images/products/dellinspiron.jpg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM elec WHERE pro_id=2";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title"><a>Dell Inspiron 7570 i5</a></h4>
                                            <?php 
                                            $_SESSION["p_name"]='Dell Inspiron 7570 i5';
                                            ?>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="electronic.php"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul>
                                            <br>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>                                            <!-- <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

	</div>
</section>




<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Categories</h2>

				</div>
                <div class="row">
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-laptop icon-bg-1"></i>
                                <h4><a href="electronic.php">Electronics</a></h4>
                            </div>
                             <ul class="category-list">
                                <li>Laptops </li>
                                <li>Iphone </li>
                                <li>Microsoft </li>
                                <li>Monitors </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- /Category List -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-home icon-bg-3"></i>
                                <h4><a href="household.php">household</a></h4>
                            </div>
                            <ul class="category-list">
                                <li>vessels </li>
                                <li>daily products </li>
                                <li>bedsheets </li>
                                <li>curtains </li>
                            </ul>
                        </div>
                    </div>
					 <!-- /Category List -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-bed icon-bg-8"></i>
                                <h4><a href="furniture.php">furniture</a></h4>
                            </div>
								<ul class="category-list">
									<li>table </li>
									<li>showcase </li>
									<li>cupboard </li>
									<li>shoe-rack </li>
								</ul>
						</div>
                    </div>
					<!-- /Category List -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-gamepad icon-bg-6"></i>
                                <h4><a href="bike.php">sports</a></h4>
                            </div>
                            <ul class="category-list">
                                <li>bat </li>
                                <li>ball </li>
                                <li>chess </li>
                                <li>batminton</li>
                            </ul>
                        </div>
                    </div>
					<!-- /Category List -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-shopping-cart icon-bg-4"></i>
                                <h4><a href="fashion.php">Fashion</a></h4>
                            </div>
                            <ul class="category-list">
                                <li>Men </li>
                                <li>Women </li>
                                <li>Boy </li>
                                <li>Girl</li>
                             </ul>
                        </div>
                    </div>
                    <!-- /Category List -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-car icon-bg-6"></i>
                                <h4><a href="car.php">toys</a></h4>
                            </div>
                            <ul class="category-list">
                                <li>plastic </li>
                                <li>car </li>
                                <li>bike </li>
								<li>beach toys </li>
	                        </ul>
                        </div>
                    </div>
                    
                    <!-- /Category List -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-snowflake-o icon-bg-7"></i>
                                <h4><a href="plants_pots.php">plants_pots</a></h4>
                            </div>
                             <ul class="category-list">
                                <li>Aloevera </li>
                                <li>Tulsi </li>
                                <li>Rose </li>
                                <li>Pot </li>
                            </ul>
                        </div>
                    </div>
                   
                    <!-- /Category List -
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-laptop icon-bg-1"></i>
                                <h4>Electronics</h4>
                            </div>
                            <ul class="category-list">
                                <li><a href="category.php">Laptops <span>93</span></a></li>
                                <li><a href="category.php">Iphone <span>233</span></a></li>
                                <li><a href="category.php">Microsoft  <span>183</span></a></li>
                                <li><a href="category.php">Monitors <span>343</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Category List -->



                </div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>




<!--============================
=            Footer            =
=============================-->
<!-- Footer Bottom -->
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
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



