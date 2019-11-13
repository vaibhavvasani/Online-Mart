<?php
    include "./config/config.php";
    // if(!isset($_SESSION['user'])){
    //     header('location:login.php');
    // }
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user=$_SESSION['user'];
        $seller_id=$_SESSION['seller_id'];
        $seller_email=$_SESSION['seller_email'];
        $p_name=$_SESSION['p_name'];
        $msg="You have wished to buy the product . Please contact with the seller using email id ";
        $sql = "insert into notif(userid,seller_id,seller_email,message) values('$user','$seller_id','$seller_email','$msg')";
        $res_u = mysqli_query($con, $sql);
        $_SESSION["user"] = $user;
        $_SESSION["seller_email"] = $seller_email;
        $_SESSION["seller_id"] = $seller_id;
        $_SESSION["msg"] = $msg;
        header('location:cart.php');
    //}
    
?>