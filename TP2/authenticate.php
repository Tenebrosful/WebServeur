<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Authentification ...</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') :
    ?>
<?php
else:
    ?>
    <div>Une erreur c'est produite : une requête POST est attendu</div>
    <div>Requête actuelle : <?php echo $_SERVER["REQUEST_METHOD"] ?></div>
    <a href="signin.php">
        <input type="button" value="Retourner vers la page de connection">
    </a>
<?php
endif;
?>
</body>
