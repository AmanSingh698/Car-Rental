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
        <form action="loginusercheck.php" method="post">
            <h1>Login to Car Rental Agency (User)</h1>
            <input type="email" placeholder="Enter your email:" name="email" required><br>
            <input type="password" placeholder="Enter your password:" name="pwd" required>
            <button type="submit">Login</button>
            <p><a href="login_agency.php">Login as a Agency</a></p><br>
            <p><a href="signup.php">Are you a new User, sign up here!</a></p>
        </form>
    </div>

</body>

</html>

<?php

require("footer.php");

?>