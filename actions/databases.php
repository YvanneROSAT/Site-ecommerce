<?php
try {
    # j'ai démarrer la session de l'utilisateur ici parce que chaqu'un de mes fichiers devrais 
    # implémenté la bdd pour accèder au requète
    $host = 'yvannerosat.com';
    $dbname = 'u479250329_project';
    $username = 'u479250329_yvanne';
    $password = 'Majestyc.007';

    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $bdd->query("SET NAMES UTF8");
} catch (exception $e) {
    die('Une erreur a été trouver : ' . $e->getMessage());
}
