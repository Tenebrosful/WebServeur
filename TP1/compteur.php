<?php
session_start();

if (!array_key_exists('compteur', $_SESSION)) $_SESSION['compteur'] = 0; else $_SESSION['compteur']++;

echo "Nombre de requête : {$_SESSION['compteur']}";
?>

<button onclick="window.location.href='resetCompteur.php'">Reset</a>