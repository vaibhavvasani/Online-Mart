<?php 
include "./config/config.php";
session_start();
if(isset($_SESSION['user'])){
    header('location:dashboard.php');
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $pin = $_POST["pin"];
    $user = $_POST["username"];
    $pass = $_POST["pass"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $sql = "insert into user(username,password,fname,lname,address,pincode,email,gender) values('$user','$pass','$fname','$lname','$address',$pin,'$email','$gender')";
    // echo " ".$user." ".$pass; 
    $res_u = mysqli_query($con, $sql);
//if (mysqli_num_rows($res_u) == 1) {
    $_SESSION["user"] = $user;
    header("location:dashboard.php");
    // echo "user ";
}
//else{
  //  header("location:index.php");
    // echo "fail";
//}
//}
?>
