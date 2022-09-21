<?php

function connexion($bdd)
{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=$bdd;charset=utf8", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!$pdo) :
        echo 'Connexion echouée';
    else :
        return $pdo;
    endif;
}

$pdo = connexion('loadmore');
