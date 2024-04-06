<?php

include "db.php";

session_start();
$name = $_SESSION['username'];

$query = "select * from `orders` where session_name='$name'";

$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
    echo "<p>Your Name : $row[name]";
    echo "<p>Your Mobile Number : $row[mobile]";
    echo "<p>Number of days you booked for : $row[day]";
    echo "<p>Your Destination : $row[destination]";
}
