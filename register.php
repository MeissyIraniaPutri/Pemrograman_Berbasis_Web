<?php
    session_start();

    if(isset($_SESSION["email"])) {
        header("Location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <form method="POST" action = "register_proccess.php">
        <label for="email"> Email:</label><br>
        <input type="text" id="email" name="email"> <br>

        <label for="password"> Password:</label><br>
        <input type="password" id="password" name="password"> <br>

        <br>

        <input type = "submit" value="Register">
    </form>
</body>
</html>