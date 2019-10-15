<?php

// Connexion à la base de données bddArtotheque
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=jobsetudiants; charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


?>