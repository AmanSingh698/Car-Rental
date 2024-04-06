<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 #customers th {
  border: 5px solid black;
  padding: 8px;
  border:2px;
}
#customers td,tr{
  border: 5px solid red;
  padding: 8px;
  border:2px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  border:2px;
}
</style>
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
</body>
</html>
<?php

include "db.php";

// if(isset($_POST["mobile"])){
//   if(empty($_POST["mobile"])){
//     echo "Please enter mobile number";
//   }else{
//     $mobile = $_POST["mobile"];
//   }
// }

session_start();
$name = $_SESSION["username"];

echo "<h3>View Your Cars:</h3>";

$query1 = "select * from `addcar` where session_name='$name'";

$result1 = mysqli_query($conn,$query1);

// $row = mysqli_fetch_assoc($result1);

// var_dump($row);

// die();

echo "<table id='customers' border='2'>";
echo "<tr border='1'>";
echo "<th>Model Number </th>";
echo "<th>Vehicle Number</th>";
echo "<th>Seating Capacity </th>";
echo "<th>Rent Per Day</th>";
echo "<th>Action</th>";
echo "</tr>";


while($row = mysqli_fetch_assoc($result1)){
    if($row["session_name"]==$name){
    echo "<tr>";
    echo "<td>$row[model]</td>";
     echo "<td>$row[number]</td>";
     echo "<td>$row[capacity]</td>";
     echo "<td>$row[rent]</td>";
     echo "<td><a href='edit.php?id=$row[session_name]'>Edit</a><a href='delete.php?id=$row[session_name]'> Delete</a></td>";
    echo "</tr>";
}

}

?>