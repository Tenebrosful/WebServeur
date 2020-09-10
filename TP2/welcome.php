<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Welcome !</title>
</head>
<body>
<?php
    $notConnectError = "<div>Pour accéder à cette page, une authentification est requise : <a href='signin.php'><input type='button' value='Se connecter'></a> </div>"
    session_start();
    if (isset($_SESSION["username"])){

    } else
        echo $notConnectError;
