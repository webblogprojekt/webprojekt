
<?php
session_start();
?>
<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; 
 dbname=datenbankname', 'datenbanklogin', 'datenbankpasswort',
    array('charset'=>'utf8'));
?>
<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Erfolg | Register</title>
        <!--<link rel="stylesheet" href="blog.css">--!>
</head>
<body>
#Nach der Registrierung wird der User mit seinem Namen begruesst, bei Fehler: die
     <?php
        if (!isset( $_POST["username"])) {
            echo "Fehler in der Formular-Übermittlung.";
            die();
        }
        echo "Hello";
        echo "<br>";
        echo $_POST["username"];

     ?>
</body>
</html>