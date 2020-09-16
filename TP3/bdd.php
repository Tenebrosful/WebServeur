<?php

define("dns","mysql:host=localhost;dbname=PWeb");
define("user","bernar32z3u");
define("pass","PandaRoux");

try {
    $bdd = new PDO(dns, user, pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    $erreurConnexion = true;
}