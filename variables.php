<?php

// Premier type de variable : 
// CHAINES DE CARACTERES

// Déclaration d'une variable, utilisation de $

// Nomage = très important
// Pas de caractères spéciaux 
// utilisation du camelCase 
// Ne pas nommer : $var, $ truc, $caract, ... 
// Quelque exeption : exercices algos , $i $key dans certains cas

$sautDeLigne = '<br />';

$maPremiereChaineDeCaracteres = 'Bonjour' . $sautDeLigne; 

echo $maPremiereChaineDeCaracteres; 


$maPremiereChaineDeCaracteres = 'Au revoir'; 

echo $maPremiereChaineDeCaracteres; 

/*
Notes : 
L'opérateur de concaténation est le point .

Cela sert a "coller" les chaines de caracteres ensemble
*/

$prenom = 'Bryan';
$piece = 'Kitchen';

$phrase = $prenom . ' is in the ' . $piece;

echo $sautDeLigne;
echo $sautDeLigne;
echo $phrase;

$piece = 'Bathroom'; 

$autrePhrase = ''; // Chaine de caractères vide
$autrePhrase = $autrePhrase . $prenom;
$autrePhrase = $autrePhrase . ' is in the '; 
$autrePhrase = $autrePhrase . $piece;

echo $sautDeLigne;
echo $sautDeLigne;
echo $autrePhrase;

// Opérateur de concaténation "condensé", avec .=

$autrePhrase = '';
$autrePhrase .= $prenom;
$autrePhrase .= ' is in the ';
$autrePhrase .= $piece;

echo $sautDeLigne;
echo $sautDeLigne;
echo $autrePhrase;
echo $sautDeLigne;


// Cas particulier avec l'apostrophe 
$phrase = 'Je suis à l\école'; // Utilisation d'un backslash
// "Echappement de caractère"

// Utilisation des doubles quotes
$phrase = "Je suis à l'école et je dis : \"Bonjour\"";

// Publipostage de variables
$lieu ='jardin';
$phrase = "Je suis dans le $lieu"; // La variables est exécutée

echo $sautDeLigne;
echo $phrase;
echo $sautDeLigne;
// -------------------------------------------------------------------------------------------

// Deuxieme type de variables, les nombres ENTIERS

$unNombre = 35;
$unAutreNombre = 11;

// Il y a une limite à ce que peut contenir PHP (PHP_INT_MAX)
// PHP n'est pas "très bon" pour gérer des grands nombres

$unNombreNegatif = -7;

// Calculs
// 5 opérateurs important pour les calculs
// Addition : +
// Soustraction : -
// Multipication : * 
// Division : /
// Modulu : % (reste de la division euclidienne)

$calcul = $unNombre + 9;

$calcul = $unAutreNombre - 34;

$calcul = $unNombre * $unAutreNombre;

$calcul = $unAutreNombre / $unNombre;

$calcul = $unNombre + $unNombre + $unNombre + $unAutreNombre;

echo $sautDeLigne;
$calcul = $unNombre + ($unAutreNombre * $unNombreNegatif);
echo $calcul;
echo $sautDeLigne;
// On peut faire des opérations mathématiques aussi complexes que nécessaires

$calculIntermédiaire = $unAutreNombre * $unNombreNegatif;
$calculFinal = $unNombre +$calculIntermédiaire;

$participants = 20;
$tailleDeGroupe = 3;



$participantsSansGroupe = $participants % $tailleDeGroupe;

$nbGroupesComplets = ($participants - $participantsSansGroupe) / $tailleDeGroupe;

echo $sautDeLigne;
echo $nbGroupesComplets;

// Opérateurs condensés
// Addition : +=
// Soustraction : -=
// Multipication : *=
// Division : /=
// Modulo : %=

$somme = 0;
$somme = $somme + 1;
$somme = $somme + 2;
$somme = $somme + 3;

// Version condensée

$somme = 0;
$somme += 1;
$somme += 2;
$somme += 3;

// += et -= sont souvent utilisée
// Les autres beaucoup moins
// C'est à l'appréciation du développeur 

// ---------------------------------------------------------------------------

// 3eme type de variable : Les nomnbres DECIMAUX

$unNombreDecimal = 23.34;

// Utilisation du . et pas , 

// On peut utiliser tous les opérateurs de calculs sur les nombres décimaux

$unNombreEntier = 34 + 18;
$unNombreDecimal = 34 / 18;


// en PHP, on peut "tout" concaténer

$nombre = 34;
$phrase = 'Le SRFC a actuellement ' . $nombre .' points.';
echo $sautDeLigne;
echo $phrase;
echo $sautDeLigne;


// PHP transforme tout seul le nombre entier en chaine de caractères : 34 => '34' pour pouvoir réalser la concaténation.
// Attention, PHP fait souvent des choses automatique, pouvant entrainer de effets de bords et de bugs.
