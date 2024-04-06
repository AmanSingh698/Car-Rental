<?php
include "db.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pwd"];
$mobile = $_POST["mobile"];

$query = "insert into `user_signup`(name, email, pwd, mobile) VALUES('$name', '$email', '$password', '$mobile')";

$result = mysqli_query($conn, $query);

if($result){
    echo "<h2> Signup Success, login now.. redirecting..</h2>";
    header("Location:login.php");
}else{
    imap_alerts("SignUp failed");
}


?>