<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Welcome !</title>
</head>
<body>
<?php
$notConnectError = "<div>Pour accéder à cette page, une authentification est requise : <a href='signin.php'><input type='button' value='Se connecter'></a> </div>";
session_start();
if (isset($_SESSION["username"])){
    echo "<div>Bienvenu {$_SESSION['username']} ! Vive les Pandas Roux</div><a href='signout.php'><input type='button' value='Se déconnecter'></a>";
} else
    echo $notConnectError;
