<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("header.php");
    ?>

<div class="signup">
        <form action="signupprocess.php" method="post">
            <h1>Looks like you're a new user!</h1>
            <p>Sign up to use our services and we wish you a very happy journey ahead 🤞</p>
            <input type="text" placeholder="Enter Your Name :" name="name" required><br>
            <input type="email" placeholder="Enter Your email :" name="email" required><br>
            <input type="password" placeholder="Enter Your password : " name="pwd" required><br>
            <input type="text" placeholder="Enter Your Mobile Number : " name="mobile" required><br>
            <button class="signup-button" type="submit" name="signup">Sign Up</button><br>
            <button class="login-button"><a href="signup_agency.php">Signup as Agency</a></button>
            
        </form>
    </div>
</body>
</html>

<?php

require("footer.php");

?>