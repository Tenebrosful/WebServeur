<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === 'GET') :
    session_start();
    if (isset($_SESSION["message"]) && !empty($_SESSION["message"]))
        echo "<div class='message'>{$_SESSION['message']}</div>";
    $_SESSION["message"] = "";
    ?>
    <form method="post" action="adduser.php">
        <div>
            <label>Nom d'utilisateur</label>
            <input name="username" required>
        </div>
        <div>
            <label>Mot de passe</label>
            <input type="password" name="password" onchange="if(this.checkValidity()) form.password_two.pattern = this.value;" required>
            <label>Confirmer le mot de passe</label>
            <input id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Les mots de passe ne correspondent pas.' : '');" required>
        </div>
        <input type="submit" value="S'inscrire">
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
    <input type="submit" value="Actualiser la page avec POST">
</form>

<form method="get" action="adduser.php">
    <input type="submit" value="S'inscrire en GET">
</form>
</body>
