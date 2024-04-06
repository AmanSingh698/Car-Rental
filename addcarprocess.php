<?php
session_start();

$name = $_SESSION["username"];

include "db.php";

if(isset($_POST["model"])&& isset($_POST["number"]) && isset($_POST["capacity"]) && isset($_POST["rent"])){
    $model = $_POST["model"];
    $number = $_POST["number"];
    $capacity = $_POST["capacity"];
    $rent = $_POST["rent"];

    // $query1 = "select * from `agency_signup` where mobile='$mobile'";
    // $result1 = mysqli_query($conn,$query1);

    $query = "insert into `addcar` (model, number, capacity, rent, session_name) VALUES ('$model','$number','$capacity','$rent','$name')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Car Added Successfully..";
        echo "<a href=viewcar.php>View Your Cars here..</a>";
    }else{
        echo "Car not added successfully..";
    }
    }


?>