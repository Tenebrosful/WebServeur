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
    require "bdd.php";

    if (isset($erreurConnexion)){
        session_start();
        $_SESSION["message"] = "Erreur de connexion à la base de donnée !";
        header('Location: signin.php');
        exit();
    }
    /** @var $bdd */
    try {
        $stUserConnect = $bdd->prepare('SELECT COUNT(*) FROM Users WHERE username = :username AND password = :password');
        $stUserConnect->bindParam(":username",$_POST["username"]);
        $stUserConnect->bindParam(":password",$_POST["password"]);

        if ($stUserConnect->execute() && $stUserConnect->fetchColumn() != 0) {
            session_start();
            $_SESSION["username"] = $_POST["username"];
            header('Location: welcome.php');
            exit();
        } else {
            session_start();
            $_SESSION["message"] = "Le nom d'utilisateur ou le mot de passe est incorrect !";
            header('Location: signin.php');
        }
    } catch (PDOException $e){
        $_SESSION["message"] = "Une erreur est survenu concernant la base de donnée, veuillez consulter les logs !";
        header('Location: signin.php');
    }

} else
    echo $methodError;
?>
</body>
