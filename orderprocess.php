<?php

include "db.php";

session_start();

$name = $_SESSION["username"];

if(isset($_POST["name"]) && isset($_POST["mobile"]) && isset($_POST["day"]) && isset($_POST["destination"])){
    
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $day = $_POST["day"];
        $destination = $_POST["destination"];
}

$query = "insert into `orders`(name,mobile,day,destination,session_name) VALUES ('$name','$mobile','$day','$destination','$name')";

$result = mysqli_query($conn,$query);

if($result){
    echo "Order Booked";
    header("Location:home.php");
}else{
    echo "Order Failed";
}

?>

