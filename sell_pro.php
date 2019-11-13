<?php 
include "./config/config.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user=$_POST["username"];
    $email=$_POST["email"];
    $category=$_POST["category"];
    $pro_name=$_POST["pro_name"];
    $detail=$_POST["detail"];
    $quantity=$_POST["quantity"];
    $cost=$_POST["amount"];
    $img=$_POST["file_cv"];
    $sql="insert into $category(p_name,detail,cost,quantity,image,seller_id,seller_email) values('$pro_name','$detail',$cost,$quantity,'$img','$user','$email')";
    $res_u = mysqli_query($con, $sql);
    //$row= $res->fetch_assoc();
    //$pro_id=$row["pro_id"];
    //$_SESSION["user"] = $user;
    if (mysqli_num_rows($res_u) == 1) {
        $_SESSION["user"] = $user;
        $_SESSION["p_name"]="$pro_name";
        echo 'product added successfully';
        header("location:dashboard.php");
        //echo "user ";
    }
    else{
        echo "addition failed";
        header("location:category.php");
        
    }
    header("location:dashboard.php");

}
?>