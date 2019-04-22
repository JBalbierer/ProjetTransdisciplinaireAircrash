<?php

//Renvoie si une session est en cours ou non.
function Connecter() {
    return isset($_SESSION['login']);
}

?>