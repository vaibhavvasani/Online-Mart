<?php 
include "./config/config.php";
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <!-- Title Page-->
    <title>sell your product</title>

    <!-- Font special for pages-->
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    Main2 CSS-->
    <link href="css/main2.css" rel="stylesheet" media="all">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="scss/common/global.scss">
    <link href="css/maps/style.css.map" rel="stylesheet">
    <link href="css/maps/_common.scss" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <div>
        <div class="wrapper wrapper--w900" >
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">submit the ad for your product</h2>
                </div>
                <div class="card-body" style="background-image:radial-gradient( lightgoldenrodyellow, lightsalmon, mediumpurple )">
                    <form method="post" action="./sell_pro.php">
                        <div class="form-row">
                            <div class="name">User name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="username" placeholder="enter your User name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="name" ><b>Category</b></div>
                                <div class="input-group">
                                    <select name="category" id="category">
                                        <option value="">select from the following</option>
                                        <option value="sports">Sports</option>
                                        <option value="toys">Toys</option>
                                        <option value="elec">Electronic</option>
                                        <option value="fash">Fashion</option>
                                        <option value="fur">Furniture</option>
                                        <option value="plant_pot">Botonical </option>
                                        <option value="house">household </option>
                                        <?php 
                                            $_SESSION["category"]=value;
                                        ?>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="name">name of the product</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="pro_name" placeholder="enter the name of your product" required/></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">details of the product</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="detail" placeholder="enter the details of your product" required/></textarea>
                                </div>
                            </div>
                        </div>
                        
                         <div class="form-row">
                            <div class="name">quantity of the product</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="input--style-6" name="quantity" placeholder="enter the quantity of your product" required/></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">enter cost of the product</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="input--style-6" name="amount" type="amount" placeholder="enter the cost of your product" required/></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload image</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <!-- <div class="label--desc">Upload an image for your product Max file size 50 MB</div> -->
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit" class="submit" name="submit" id="submit" />
                         </div>
                    </form>
                </div>
                <!-- <div class="card-footer" style="background-image:linear-gradient(to bottom right, rgba(255,0,0,0), rgba(255,0,0,1))"> -->
                <!-- <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit" class="submit" name="submit" id="submit" />
                </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min1.js"></script>


    <!-- Main2 JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->