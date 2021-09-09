<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === 'GET') :
    session_start();
    if (isset($_SESSION["message"]) && !empty($_SESSION["message"]))
        echo "<div class='message'>{$_SESSION['message']}</div>";
    ?>
    <form method="post" action="authenticate.php">
        <div>
            <label>Nom d'utilisateur</label>
            <input name="username" required>
        </div>
        <div>
            <label>Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit" value="Se connecter">
    </form>
<?php
else:
    ?>
    <div>Une erreur c'est produite : une requête GET est attendu</div>
    <div>Requête actuelle : <?php echo $_SERVER["REQUEST_METHOD"] ?></div>
<?php
endif;
?>

<form method="post" action="">
    <input type="submit" value="Actualiser la page avec POST">
</form>

<form method="get" action="">
    <input type="submit" value="Actualiser la page avec GET">
</form>

<form method="get" action="authenticate.php">
    <input type="submit" value="Se connecter en GET">
</form>
</body>
