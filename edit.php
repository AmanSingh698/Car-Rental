<?php
include "db.php";
session_start();
$name = $_SESSION["username"];
$id = $_GET['id'];
$query = "SELECT * FROM addcar WHERE session_name = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($row);
?>

<form action="updateprocess.php" method="post">
    <h1>Please Update the given details below:</h1>
    <pre>
    <label for="">Enter the Vehicle Model :</label><br>
            <input type="text" name="model" required><br>
            <label for="">Enter the Vehicle Number :</label><br>
            <input type="text" name="number" required><br>
            <label for="">Enter the Vehicle Seating Capacity :</label><br>
            <input type="text" name="capacity" required><br>
            <label for="">Enter the Rent per Day :</label><br>
            <input type="text" name="rent"  required><br>
            <!-- <label for="">Enter your registered mobile number :</label>
            <input type="text" name="mobile" required><br> -->
            <input type="submit" value="Add Car">
</pre>
</form>