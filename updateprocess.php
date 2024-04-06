<?php
include "db.php";

session_start();
$name = $_SESSION["username"];

$model = $_POST["model"];
$number = $_POST["number"];
$capacity = $_POST["capacity"];
$rent = $_POST["rent"];



$query = "UPDATE addcar SET model='$model',number='$number',capacity='$capacity',rent='$rent' WHERE session_name = '$name'";
//echo $query; 

$result = mysqli_query($conn, $query);
if($result)
{
    header("Location:viewcar.php");
}else{
    echo("Error description: " . mysqli_error($con));
}
?>