<?php
session_start();
$name = $_SESSION["username"];
// echo "<h2> Welcome to Car Rental Agency, $name";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addcar.css">
</head>

<body>

    <div class="logout">
        <a href="logout.php"><button>Log Out</button></a>
    </div>
    <div class="heading">
        <h2>Welcome to Car Rental Agency , <?php echo $name; ?></h2>
    </div>

    <div class="addcar">
        <h2>Add your car here..</h2>
    </div>

    <div class="addsection">
        <form action="addcarprocess.php" method="post">
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
        </form>
    </div>

    <h2><a href="viewcar.php">View Your Cars :</a></h2>
</body>

</html>