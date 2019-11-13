<?php
include "./config/config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST["username"];
    $pass = $_POST["pass"];
    $sql = "select * from user where username='$user' AND password='$pass'";
    // echo " ".$user." ".$pass; 
    $res_u = mysqli_query($con, $sql);
if (mysqli_num_rows($res_u) == 1) {
    $_SESSION["user"] = $user;
    header("location:dashboard.php");
    // echo "user ";
}
else{
    // die("Error: The user does not exist.");
    echo 'error occured';
    header("location:index.php");
    
}
}


?>


