<?php

//Optimisation si le temps : faire une fonction prenant les requetes comme argument


//permettre   l’affichage   du   stock   de   chaque   fruit   ou   légume   quelque   soit   le  moment de la journée

$stockActuel = pg_query ($connect, "SELECT pro_nom, sum(st) FROM (SELECT pro_leg,pro_nom, -sto_qte as st FROM stock INNER JOIN produit ON pro_id=spro_id WHERE sto_pert = True UNION SELECT pro_leg, pro_nom, sto_qte as st FROM stock INNER JOIN produit ON pro_id=spro_id WHERE sto_pert = False UNION SELECT pro_leg, pro_nom, -con_qte as st FROM contenu INNER JOIN produit ON cpro_id = pro_id) as s GROUP BY pro_leg,pro_nom ORDER BY  pro_leg,pro_nom");
if (!$stockActuel) {
      die('erreur SQL sur $stockActuel: '.pg_last_error());
      exit;
}

$stockLegumes = pg_query ($connect, "SELECT pro_nom, sum(st) FROM (SELECT pro_leg,pro_nom, -sto_qte as st FROM stock INNER JOIN produit ON pro_id=spro_id WHERE sto_pert = True UNION SELECT pro_leg, pro_nom, sto_qte as st FROM stock INNER JOIN produit ON pro_id=spro_id WHERE sto_pert = False UNION SELECT pro_leg, pro_nom, -con_qte as st FROM contenu INNER JOIN produit ON cpro_id = pro_id) as s WHERE pro_leg='t' GROUP BY pro_leg,pro_nom ORDER BY  pro_leg,pro_nom");
if (!$stockLegumes) {
      die('erreur SQL sur $stockLegumes: '.pg_last_error());
      exit;
}


$stockFruits = pg_query ($connect, "SELECT pro_nom, sum(st) FROM (SELECT pro_leg,pro_nom, -sto_qte as st FROM stock INNER JOIN produit ON pro_id=spro_id WHERE sto_pert = True UNION SELECT pro_leg, pro_nom, sto_qte as st FROM stock INNER JOIN produit ON pro_id=spro_id WHERE sto_pert = False UNION SELECT pro_leg, pro_nom, -con_qte as st FROM contenu INNER JOIN produit ON cpro_id = pro_id) as s WHERE pro_leg='f' GROUP BY pro_leg,pro_nom ORDER BY  pro_leg,pro_nom");
if (!$stockFruits) {
      die('erreur SQL sur $stockFruits: '.pg_last_error());
      exit;
}



//Afficher les noms de villes dans le menu déroulant
$nomsVilles = pg_query ($connect, "SELECT com_nom FROM commune;");
if (!$nomsVilles) {
    die('erreur SQL sur $nomsVilles: '.pg_last_error());
    exit;
}

// Afficher les noms de produits dans le premier menu déroulant
$nomsProduits = pg_query ($connect, "SELECT pro_nom FROM produit;");
if (!$nomsProduits) {
    die('erreur SQL sur $nomsProduits: '.pg_last_error());
    exit;
}

// Afficher les noms de produits dans le dexième menu déroulant

$nomsProduits2 = pg_query ($connect, "SELECT pro_nom FROM produit;");
if (!$nomsProduits2) {
    die('erreur SQL sur $nomsProduits2: '.pg_last_error());
    exit;
}

// visualiser,   sur   un   page   ‘géomarketing’,   les   5   communes   les   plus  consommatrices de ses produits, en temps réel.

$top5Conso = pg_query ($connect, "SELECT  SUM(sto_qte)AS sum,com_nom FROM  stock, commune GROUP BY com_nom,spro_id ORDER BY SUM(sto_qte) LIMIT 5;");
if (!$top5Conso) {
    die('erreur SQL sur $top5Conso: '.pg_last_error());
    exit;
}

?>

