<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erfolg | Logout</title>
    <!--<link rel="stylesheet" href="blog.css">--!>
</head>
<body>
<h1>Logout</h1>

<div class="content">
    <p>You're logged out! </p>
    <p>
        <a href="login.php" target="inhalt">Please Log in :)</a>
    </p>
</div>

</body>
</html>