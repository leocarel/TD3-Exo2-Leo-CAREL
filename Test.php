<?php

// pour afficher les erreurs pour ce script 
ini_set('display_errors','1');

require_once('Produit.php');
require_once('ProduitUnite.php');
require_once('ProduitKilo.php');

$citronvert=new ProduitUnite(4, 1.4);
echo 'total citron vert : ';
echo $citronvert->Calcul();
echo ' €';

echo '</br>';

$mandarine=new ProduitKilo(2, 0.8);
echo 'total mandarine : '; 
echo $mandarine->Calcul();
echo ' €';
?>