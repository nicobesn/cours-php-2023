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

// dzafd

// 2.
// Créer un tableau de 5 prénoms masculins.
// Créer un tableau de 5 prénoms féminins.
// Ctéer un tableau de 5 aliments.
// Créer un tableau de 5 villes

$tableauPrenomsHomme = ['Nicolas', 'Arthur', 'Paul', 'Clement', '...'];
$tableauPrenomsFemme = ['Manon', 'Marie', 'Léa', 'Monica', 'Julie'];
$tableauAliments = ['Tomates', 'Salades', 'Oignons', 'Pâtes', 'Riz'];
$tableauVilles = ['Rennes', 'Paris', 'Marseille', 'Lyon', 'Toulouse'];


// Generer toutes les combinaisons possibles (625)

foreach ($tableauPrenomsHomme as $prenomsH){
    foreach ($tableauPrenomsFemme as $prenomsF) {
        foreach ($tableauAliments as $aliments) {
            foreach ($tableauVilles as $villes){
                echo '<p>' . $prenomsH . ' et ' . $prenomsF . ' mangent ' . $aliments . ' à ' . $villes . '.</p>' ;
            }
        }
    }
}


// Générer 50 phrases aléatoires du genre "Arthur et Pauline mangent une Pomme à Paris"


// 3.
// Créer un tableau de 10 valeurs comprises entre 0 et 100 aléatoirement.
// Trouver la valeur maximun et la valeur minimum à chaque exécution du code.
// (sans utiliser les fonctions min et max)

$tableau = [];
for ($i = 1; $i <= 10; $i++) {
    $tableau[] = rand(0, 100);
}

echo $tableau;


// Postulat de départ / Conditions initiales
$min = $tableau[0];
$max = $tableau[0];

// Traitement 
foreach ($tableau as $valeur) {

    // recherche minimum 

    if ($valeur < $min) {
        echo $valeur;
        $min = $valeur;
    }

    if ($valeur > $max) {
        echo $valeur;
        $max = $valeur;
    }
}


// AFffichage de la solution 