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

