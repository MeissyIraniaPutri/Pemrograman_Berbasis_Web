<?php
session_start();

if (isset($_SESSION["email"])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <h1> Login Admin </h1>


    <form method="POST" action="./login_proccess.php">
        <div>
            <label for="email"> Email:</label><br>
            <input type="email" id="email" name="email">
        </div>
        <br>
        <div>
            <label for="password"> Password:</label><br>
            <input type="password" id="password" name="password">
        </div>
        <br>

        <button type="submit" name="submit"> LOGIN </button>
    </form>
</body>

</html>