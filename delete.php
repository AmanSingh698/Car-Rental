<?php 
include "db.php";
$id = $_GET['id'];
echo $id;
// die(); 
$query = "DELETE FROM addcar WHERE session_name='$id'";
$result = mysqli_query($conn, $query);
if($result){
    header ("location:viewcar.php");
}
else{
    echo("Error description: " . mysqli_error($con));
}
?>