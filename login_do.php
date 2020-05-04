<?php
session_start();
?>
<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-ah209', 'ah209', 'aeQuei7cei', array('charset'=>'utf8'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Erfolg | Login</title>
</head>
<body>
    <?php
    if (isset($SESSION["id"])){
        echo "<li><a href=\'logout.php'\>Logout</a></li>";
    }
    ?>

<?php
$h=hash ("sha256", $_POST ["password"]);
$statement=$pdo->prepare("SELECT id FROM users WHERE username=:username AND password=:password");
$statement->bindParam (":username", $_POST ["username"]);
$statement->bindParam (":password", $h);

$statement->execute();
$row=$statement->fetch();

if (!$row){
    echo "<h1>Wrong username or password.</h1>";
    echo "<li><a href=\"login.php\">Try again!</a></li>";
    die();
}
echo "<h1>Yeah, you're in!</h1>";
//id des Nutzers wird in Session gespeichert
    $_SESSION["id"] = $row ["id"];
//Rückführunf auf Startseite
header('location: index.php');

?>
</body>
</html>
