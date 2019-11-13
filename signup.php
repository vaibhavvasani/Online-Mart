﻿<?php session_start();
if(isset($_SESSION['user'])){
    header('location:dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup.jpeg" >
                </div>
                <div class="signup-form">
                    <form method="post" class="register-form" id="register-form" action="./adduser.php">
                        <h2>Customer registration </h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="fname" id="name" required="true ">
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="lname" id="father_name" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required="true">
                        </div>
						<div class="form-group">
                            <label for="pincode">Pincode :</label>
                            <input type="text" name="pin" id="pincode">
                        </div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
							<label>Enter User ID : </label><input id="uid" class="input100" type="text" name="username" placeholder="userid">
							<span class="focus-input100"></span>
						</div>
						<br>
					    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						    <label>Enter Password : </label><input class="input100" type="password" name="pass" placeholder="Password">
						    <span class="focus-input100"></span>
					    </div>
					    <br>
                        <div class="form-group">
                            <label for="gender">Gender :</label>
                            <input type="text" name="gender" id="gender">
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>

                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main1.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>