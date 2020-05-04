<?php
session_start();
?>
<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-ah209', 'ah209', 'aeQuei7cei', array('charset'=>'utf8'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Erfolg | Register</title>
</head>
<body>
<?php
$h=hash ("sha256", $_POST ["password"]);
$statement=$pdo->prepare("INSERT INTO users (id, username, email, password) VALUES (:username, :email, :password)");
$statement->bindParam (":username", $_POST ["username"]);
$statement->bindParam(":email", $_POST ["email"]);
$statement->bindParam (":password", $h);
if($statement->execute()){
    echo 'We are so happy you joined "Erfolg" ';
} else{
    echo 'Datenbank-Error:';
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
    die();
}

?>
<p>
    Start sharing your thoughts with your friends <a href="login.php">Log in here</a>
</p>
</body>
</html>