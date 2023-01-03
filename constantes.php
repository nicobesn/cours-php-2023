<?php

/* 
Une constante, c'est une valeur considérée importante dans le 
programme qui doit etre identifiée comme telle et qui n'a pas aucune raison
*/ 

// Exemple de la TVA : 20%

define ('TAUX_TVA', 20);

// On écrit les constance en FULL CAPS avec dez _ pour les espaces

$produitPrixHT = 100;
$produitTVA = $produitPrixHT * TAUX_TVA / 100;
$produitPrixTTC = $produitPrixHT + $produitTVA;
// echo $produitPrixTTC;

define ('PI', 3.14); // Contient une valeur décimal
define('GENERIC_MESSAGE_ERROR', 'An error occured on line'); // Contient une chaine de caractères



