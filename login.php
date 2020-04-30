<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erfolg | Login</title>
    <!--<link rel="stylesheet" href="blog.css">--!>
</head>
<body>
<h1>Erfolg</h1>

<h2>Login</h2>

<h3>Nice to have you here! Please Log in!</h3>

<form action="Login_do.php" method="post"><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" value="Let's Go!">
</form>
<br>
<a href="registrieren.php" target="inhalt">Sign up</a>

</body>
</html>
