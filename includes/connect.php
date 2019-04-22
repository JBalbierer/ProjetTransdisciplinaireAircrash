<?php
// Ce fichier nous permet de connecter nos fichiers à la base de données
$bdd = new PDO("mysql:host=localhost;dbname=examen;charset=utf8",
        "examen_user", "julien", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
?>