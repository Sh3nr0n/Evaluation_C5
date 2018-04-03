<?php

$connect = pg_connect("host=localhost port=5432 dbname=bdpoireau_ok user=admin password=admin");

if (!$connect) {
    die('erreur connexion: '.pg_last_error());
} else {
    echo "test connexion : OK";
}

?>
