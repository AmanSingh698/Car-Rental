<?php
include "db.php";
if(isset($_POST['email']) && isset($_POST['pwd'])){
$email = $_POST["email"];
$password = $_POST["pwd"];

$query = "select * from `agency_signup` where email='$email' and pwd='$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION["username"] = $row["name"];
    $_SESSION["id"] = $row["email"];
    header('Location:addcar.php');
}else{
    echo mysqli_error($conn);
}

}

?>