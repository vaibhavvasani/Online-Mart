﻿<?php
    include "./config/config.php";
    if(!isset($_SESSION['user'])){
        header('location:login.php');
    }
    $user=$_SESSION["user"];

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
  <link href="scss/_product.scss" rel="stylesheet">
  <link href="scss/_typography.scss" rel="stylesheet">
  


  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

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
                                <li class="nav-item">
                                    <a class="nav-link" href="cart.php">cart</a>
                                </li>
                                <li class="nav-item active">
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
       <section class="section-sm">
        <div class="container">
           <!-- <div class="row">
                <div class="col-md-12">
                    <div class="search-result bg-gray" style="background-color:navajowhite">
                        <h2>Results For "Electronics"</h2>
                    </div>
                </div>
            </div>-->
            <div class="row">
                <div class="col-md-3">
                    <div class="category-sidebar">
                        <div class="widget category-list">
                            <h4 class="widget-header">All Category</h4>
                            <ul class="category-list">
                            <li><a href="electronic.php">Electronics </a></li>
                                <li><a href="fashion.php">Fashion </a></li>
                                <li><a href="furniture.php">Furniture </a></li>
                                <li><a href="household.php">Household products </a></li>
                                <li><a href="toys.php">toys </a></li>
								<li><a href="sports.php">sports </a></li>
								<li><a href="plants_pots.php">Botonical Products </a></li>
                            </ul>
                        </div>

                           <!--- <div class="widget filter">
                            <h4 class="widget-header">Show Produts</h4>
                            <select>
                                <option>Popularity</option>
                                <option value="1">Top rated</option>
                                <option value="2">Lowest Price</option>
                                <option value="4">Highest Price</option>
                            </select>
                        </div>-->

                        <!--<div class="widget price-range">
                            <h4 class="widget-header">Price Range</h4>
                            <div class="block">
                                <b>$10</b>
                                <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" />
                                <b>$5000</b>
                            </div>
                        </div>-->

                        <!--<div class="widget product-shorting">
                            <h4 class="widget-header">By Condition</h4>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Brand New
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Almost New
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Gently New
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Havely New
                                </label>
                            </div>
                        </!--div>-->

                    </div>
                </div>
                <div class="col-md-9">
                    <!--<div class="category-search-filter">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Short</strong>
                                <select>
                                    <option>Most Recent</option>
                                    <option value="1">Most Popular</option>
                                    <option value="2">Lowest Price</option>
                                    <option value="4">Highest Price</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="view">
                                    <strong>Views</strong>
                                    <ul class="list-inline view-switcher">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="fa fa-reorder"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="product-grid-list">
                        <div class="row mt-30">
                            <div class="col-sm-12 col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <!-- <a href="#"> -->
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
                                                $_SESSION['p_name']='11 inch MacBook';
                                                $_SESSION['seller_email']=$seller_email;
                                                $_SESSION['seller_id']=$seller_id;

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
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>
                                            <form class="login100-form validate-form" method="post" action=./notif.php>
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit"  value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            <!-- <script>
                                            function myfunc(){
                                                
                                                //  $msg="You have wished to buy the product <b><span><u>".$_SESSION['p_name']."</u></span></b>\n Please contact with the seller using email id ";
                                                //  $sql = "insert into notif(userid,seller_id,seller_email,message) values('$user','$seller_id','$seller_email','$msg')";
                                                //  $res_u = mysqli_query($con, $sql);
                                                //  $_SESSION["user"] = $user;
                                                //  $_SESSION["seller_email"] = $seller_email;
                                                //  $_SESSION["seller_id"] = $seller_id;
                                                //  $_SESSION["msg"] = $msg;
                                                //  header('location:cart.php');
                                            
                                            }
                                            </script> -->
                                            </form>
                                            
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
                                                $p_name=$row['p_name'];
                                                

                                            ?>
                                            <h4 class="card-title" name="study table">Study Table Combo</h4>
                                        

                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="furniture.php"><i class="fa fa-folder-open-o"></i>Furnitures</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>
                                            <form class="login100-form validate-form" method="post" action="./notif.php">
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit" onClick="myfunc()" value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            </form>
                                           
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
                                            <h4 class="card-title">Dell Inspiron 7570 i5</h4>
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
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>
                                            <form class="login100-form validate-form" method="post" action="./notif.php">
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit" onClick="myfunc()" value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            </form>
                                          
                                        </div>
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
                                                <img class="card-img-top img-fluid" src="images/products/JBL Live.jpeg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM elec WHERE pro_id=6";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title">Beats Bluetooth Headphones</h4>
                                            <?php 
                                            $_SESSION["p_name"]='Beats Bluetooth Headphones';
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
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>
                                            <form class="login100-form validate-form" method="post" action="./notif.php">
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit" onClick="myfunc()" value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            </form>
                                            
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
                                                <img class="card-img-top img-fluid" src="images/products/clothes1.jpg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM fash WHERE pro_id=1";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title">clothes</h4>
                                            <?php 
                                            $_SESSION["p_name"]='clothes';
                                            ?>

                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="fashion.php"><i class="fa fa-folder-open-o"></i>Fashion</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>
                                            <form class="login100-form validate-form" method="post" action="./notif.php">
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit" onClick="myfunc()" value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            </form>
                                           
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
                                                <img class="card-img-top img-fluid" src="images/products/plants.jpg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM plant_pot WHERE pro_id=1";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title">plants</h4>
                                            <?php 
                                            $_SESSION["p_name"]='plants';
                                            ?>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="plants_pots.php"><i class="fa fa-folder-open-o"></i>Plants_Pots</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p> 
                                            <form class="login100-form validate-form" method="post" action="./notif.php">
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit" onClick="myfunc()" value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            </form>
                                            <!-- <div class="product-ratings">
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

                            
                            <div class="product-grid-list">
                        <div class="row mt-30">
                            <div class="col-sm-12 col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <div class="price">$200</div>
                                            <!-- <a href="single.php"> -->
                                                <img class="card-img-top img-fluid" src="images/products/household.jpg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM house WHERE pro_id=1";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title">househld products</h4>
                                            <?php 
                                            $_SESSION["p_name"]='household';
                                            ?>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="household.php"><i class="fa fa-folder-open-o"></i>Household</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p> 
                                            <form class="login100-form validate-form" method="post" action="./notif.php">
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit" onClick="myfunc()" value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            </form>                                           <!-- <div class="product-ratings">
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
                                                <img class="card-img-top img-fluid" src="images/products/toys.jpg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM toys WHERE pro_id=1";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title">Baby toys</h4>
                                            <?php 
                                            $_SESSION["p_name"]='baby toys';
                                            ?>

                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="toys.php"><i class="fa fa-folder-open-o"></i>Toys</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p>
                                            <form class="login100-form validate-form" method="post" action="./notif.php">
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit" onClick="myfunc()" value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            </form>
                                                                                        <!-- <div class="product-ratings">
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
                                                <img class="card-img-top img-fluid" src="images/products/ball.jpg" alt="Card image cap">
                                            <!-- </a> -->
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                                $sql = "SELECT * FROM sports WHERE pro_id=1";
                                                $result = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($result);
                                                $detail=$row['detail'];
                                                $quantity=$row['quantity'];
                                                $cost=$row['cost'];
                                                $seller_email=$row['seller_email'];
                                                $seller_id=$row['seller_id'];
                                            ?>
                                            <h4 class="card-title">balls</h4>
                                            <?php 
                                            $_SESSION["p_name"]='balls';
                                            ?>
                                            <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                    <a href="sports.php"><i class="fa fa-folder-open-o"></i>Sports</a>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                                </li> -->
                                            </ul>
                                            <p class="card-text" style="font-style:bold">Product details are : <?php echo " ".$detail." "?></p>
                                            <p class="card-text">Cost is : ₹<?php echo " ".$cost." "?></p>
                                            <p class="card-text">Seller email id is : <?php echo " ".$seller_email." "?></p> 
                                            <form class="login100-form validate-form" method="post" action="./notif.php">
                                            <div class="container-login100-form-btn">
						                        <button class="btn btn-primary" type="submit" onClick="myfunc()" value="add to cart" name="add_to_cart">Add TO Cart</button>
                                            </div> 
                                            </form>
                                                                                       <!-- <div class="product-ratings">
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
                    </div>
                </div>
            </div>
        </div>
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