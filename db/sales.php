<?php


//Récupérer des variables/valeurs d'une nouvelle vente

$heureVente = $_POST["ven_heur"];
$nomCommune = $_POST["com_nom"];
$stockProduit1 = $_POST["sto_qte1"];//La valeur de l'input n'est pas renvoyée ...
$nomProduit1 = $_POST["pro_nom1"];
$stockProduit2 = $_POST["sto_qte2"];//La valeur de l'input n'est pas renvoyée ...
$nomProduit2 = $_POST["pro_nom2"];

//Requète d'insertion à créer

// $nouvelleVente = pg_query ($connect, "");
// if (!$nouvelleVente) {
//       die('erreur SQL sur $nouvelleVente: '.pg_last_error());
//       exit;
// } else {
//       echo "la vente a bien été enregistrée";
// }


?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <title>Document</title>
</head>

<body>
<p>Message de confirmation ici</p>
<p><?php  echo "heureVente : ".$heureVente;
echo " nomCommune : ".$nomCommune; 
echo " stockProduit1 : ".$stockProduit1;
echo " nomProduit1 : ".$nomProduit1; 
echo " stockProduit2 : ".$stockProduit2;
echo " nomProduit2 : ".$nomProduit2; 


?></p>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
</body>

</html>