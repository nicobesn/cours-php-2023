<?php
// On va raconter une histoire...
$histoire = ''; // On fait un seul echo à la fin (déjà écrit)
$nomDuHeros = 'Spider-Man'; // A choisir
$prenomHeros = 'Peter Parker';
$distanceParcourue = 0;

// 1. Racontez comment s'appelle le héros, en complétant la variable $histoire, utilisez un peu d'html : hX, p, b, etc.

$histoire .= '<h1>Bienvenue à New York, </h1>' .
    '<p> Une ville où beaucoup d\'évenement ce passe, entre vie paissible et nombreux criminels, nous allons suivre l\'histoire de <b>' . $prenomHeros .
    '</b>, aussi connue sous le nom de <b>' . $nomDuHeros . '</b>.</p>';

// On va définir quelques valeurs aléatoirement

$force = rand(1, 10);
$agilite = rand(1, 10);
$piecesDOr = rand(50, 100);

$force = 9;
$agilite = 7;
$piecesDOr = 50;


$NbJourDeLaSemaine = rand(1, 7);
$joursDeLaSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

//
// Exercices autour du if
// (Complétez l'histoire à chaque fois qu'il se passe quelque chose)
//
// 2.
// Si la force est supérieure à 8, alors je gagne 1 point d'agilité.

$histoire .= '<p>Sa force est de ' . $force . '</p>';
if ($force > 8) {
    $agilite++;
    $histoire .= '<p>Il gagne + 1 point d\'agilité.</p>';
}

// 3.
// Si ma force est inférieure à 6, je passe par le chemin de gauche, qui fait 500m, sinon je passe par le chemin de droite, qui fait 850m.
// Dans le chemin de droite, je trouve 4 pièces d'or

if ($force < 6) {
    $distanceParcourue += 500;
    $histoire .= '<p>Il passe par le chemin de gauche, la distance qu\'il a parcourue est de ' . $distanceParcourue . ' m.</p>';
} else {
    $distanceParcourue += 850;
    $piecesDOr += 4;
    $histoire .= '<p>Il passe par le chemin de droite, la distance qu\'il a parcourue est de ' . $distanceParcourue . ' m. et il trouve de l\'or. </p>';
}

// 4.
// Je parcours 150m
// Si j'ai plus de 80 pièces d'or, j'en dépense 30 pour m'offrir 2 points d'agilité
// Si j'en ai moins de 80 et + de 60, j'en dépense 15 pour m'offrir 1 point d'agilité
// Si j'en ai moins de 60, j'en dépense 5 pour m'offrir 1 point de force

$histoire .= '<p>Il à ' . $piecesDOr . ' pièces d\'or.</p>';
$histoire .= 'Il parcourt 150m';
$distanceParcourue += 150;

if ($piecesDOr > 80) {
    $piecesDOr -= 30;
    $agilite += 2;

    $histoire .= '<p> Il perd 30 pieces d\'or et gagne +2 points d\'agilités.</p>';
} elseif ($piecesDOr > 60) {
    $piecesDOr -= 15;
    $agilite++;
    $histoire .= '<p> Il perd 15 pieces d\'or et gagne +1 point d\'agilités.</p>';
} else {
    $piecesDOr -= 5;
    $force++;
    $histoire .= '<p> Il perd 5 pieces d\'or et gagne +1 point de force.</p>';
}
// 5. 
// Je parcours 300m
// Si ma force et mon agilité sont supérieures à 6, je gagne 10 pièce d'or
// Si ma force ou mon agilité est inférieure à 3, je perds 10 pièces d'or
// (stockez les conditions dans des variables)

$histoire .= '<p> Il parcout 300m</p>';
$distanceParcourue += 300;
$histoire .= '<p> Sa force actuel est de ' . $force . '.</p>' .
    '<p> Son agilité est de ' . $agilite . '.</p>';

$conditionPourGagner = ($force > 6 && $agilite > 6);
$conditionPourPerdre = ($force < 3 || $agilite < 3);

if ($conditionPourGagner) {
}
// 6.
// Indiquez dans l'histoire quel jour nous sommes
// 7.
// Si je suis en début de semaine (lundi, mardi, mercredi) je me rends à ma destination par un chemin de 740m, et je gagne 1 point de force
// Si je suis en fin de semaine (les autres jours), je me rends à ma destination par un chemin de 1345m, et je perds 1 point d'agilité
// 8. A l'aide d'un "if elseif elseif..." déterminer la tranche de 20, dans laquelle se trouve le nombre de pièces d'or (0-20; 21-40; 41-60; jusque 100)
// Gérez le cas où il y aurait plus de 100 pièces également

$histoire .= '<p>Il a parcouru ' . $distanceParcourue . 'm.</p>';
$histoire .= '<p>Il lui reste ' . $piecesDOr . ' pièces d\'or en poche</p>';
echo $histoire;
