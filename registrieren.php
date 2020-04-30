<?php
session_start();
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Erfolg | Register</title>
    <!--<link rel="stylesheet" href="blog.css">--!>
</head>
<body>
<h1>Registration</h1>
<form method="post" action="doregister.php">

        <input type="text" name="username" placeholder="What's your name?"> <br>
        <input type="email" name="email"  placeholder="What's your E-Mail address?"> <br>
        <input type="password" name="password" placeholder="What's your password"> <br>

        <button type="submit" class="btn" name="reg_user">Register</button>

    <p>
        Already a member? <a href="login.php">Log in here</a>
    </p>
</form>
</body>
</html>