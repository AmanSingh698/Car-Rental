<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="orderprocess.php" method="post">
        <label for="">Enter Your Name :</label><br>
        <input type="text" name="name" required><br>
        <label for="">Enter Your Mobile Number :</label><br>
        <input type="text" name="mobile" required><br>
        <label for="">Enter the number of days you want to book :</label><br>
        <input type="number" name="day" required><br>
        <label for="">Enter Your Destination :</label><br>
        <input type="text" name="destination" required><br>
        <button>Book Now!</button>
    </form>
</body>
</html>