<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Authentification ...</title>
</head>
<body>
<?php

$passwordError = "<div>ERREUR : Le nom d'utilisateur ou le mot de passe est incorrect.<a href='signin.php'><input type='button' value='Retourner sur la page de connexion'></a></div>";
$methodError = "<div>Une erreur c'est produite : une requête POST est attendu</div><div>Requête actuelle : " . $_SERVER['REQUEST_METHOD'] . "</div><a href='signin.php'><input type='button' value='Retourner vers la page de connection'></a>";

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    require "users.php";
    if (key_exists($_POST["username"], $users) && $users[$_POST["username"]] === $_POST["password"]) {
        session_start();
        $_SESSION["username"] = $_POST["username"];
        header('Location: welcome.php');
        exit();
    } else
        echo $passwordError;
        session_start();
        $_SESSION["message"] = "Le nom d'utilisateur ou le mot de passe est incorrect !";
} else
    echo $methodError;
?>
</body>
