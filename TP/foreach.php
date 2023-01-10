<?php

//
// Exercices autour des tableaux
//

// 1.
// Créer un tableau vide
// Remplissez ce tableau de 1 à 1000.

$tableau = [];

for ($i = 1; $i  <= 1000 ; $i++) { 
    $tableau[] = $i;
}

echo '<pre>';
print_r($tableau);
echo '</pre>';

echo '<hr />';

// a) En parcourant le tableau, affichez tous les multiples de 3.

foreach ($tableau as $nombre) {
    if ($nombre%3 == 0 && $nombre !== 0) {
        echo '<p>' . $nombre . '</p>';
    }
}

// b) En parcourant le tableau, affichez les nombres multiples de 3 et de 5

echo '<hr />';

foreach ($tableau as $nombre) {
    if ($nombre%3 == 0 && $nombre%5 == 0 && $nombre !== 0) {
        echo '<p>' . $nombre . '</p>';
    }
}

// c) Et compter combien il y en a.

// 2.
// Créer un tableau de 5 prénoms masculins.
// Créer un tableau de 5 prénoms féminins.
// Ctéer un tableau de 5 aliments.
// Créer un tableau de 5 villes
// Générer 50 phrases aléatoires du genre "Arthur et Pauline mangent une Pomme à Paris"


$tableauPrenomsHomme = ['Nicolas', 'Arthur', 'Paul', 'Clement', '...'];
$tableauPrenomsFemme = ['Manon', 'Marie', 'Léa', 'Monica', 'Julie'];
$tableauAliments = ['Tomates', 'Salades',];
$tableauVilles = [];


echo '<pre>';
print_r($tableau);
echo '</pre>';