<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
</head>
<body>
    <?php

        require("header.php");

    ?>

<div class="login-section">
        <form action="loginagencycheck.php" method="post">
            <h1>Login to Car Rental Agency</h1>
            <input type="email" placeholder="Enter your email:" name="email" required><br>
            <input type="password" placeholder="Enter your password:" name="pwd" required>
            <button type="submit">Login</button><br>
            <p><a href="login.php">Are you a User, login here!</a></p>
            <p><a href="signup_agency.php">New to Car Rental Agency? Signup as Agency</a></p>
        </form>
    </div>

</body>
</html>

<?php

require("footer.php");

?>