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

$force = random_int(1, 10);
$agilite = random_int(1, 10);
$piecesDOr = random_int(50, 100);

$force = 9;
$agilite = 7;
$piecesDOr = 50;

$NbJourDeLaSemaine = random_int(1, 7);
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

$jour = $joursDeLaSemaine[$NbJourDeLaSemaine - 1];

$histoire .= '<p>Nous sommes le ' . $joursDeLaSemaine[array_rand($joursDeLaSemaine)] . '.</p>';

// 7.
// Si je suis en début de semaine (lundi, mardi, mercredi) je me rends à ma destination par un chemin de 740m, et je gagne 1 point de force
// Si je suis en fin de semaine (les autres jours), je me rends à ma destination par un chemin de 1345m, et je perds 1 point d'agilité

// $debutSemaine = (array_rand($joursDeLaSemaine));

// if ($debutSemaine) {
//     $distanceParcourue += 740;
//     $force += 1;
//     $histoire .= $nomDuHeros . ' prend le chemin de 740m et gagne 1 point de force. </p>';
// }

// else {
//     $distanceParcourue += 1345;
//     $agilite -= 1;
//     $histoire .= $nomDuHeros . ' prend le chemin de 1345m et perd 1 point d\'agilité. </p>'; 
// }

switch ($$NbJourDeLaSemaine) {

    case '1':
    case '2':
    case '3':
        $distanceParcourue += 740;
        $force += 1;
        $histoire .= $nomDuHeros . ' prend le chemin de 740m et gagne 1 points de force.</p>';
        break;

    case '4':
    case '5':
    case '6':
    case '7':
        $distanceParcourue += 1345;
        $agilite -= 1;
        $histoire .= $nomDuHeros . ' prend le chemin de 1345m et perd 1 point d\'aglité.</p>';
        break;
}

// 8. A l'aide d'un "if elseif elseif..." déterminer la tranche de 20, dans laquelle se trouve le nombre de pièces d'or (0-20; 21-40; 41-60; jusque 100)
// Gérez le cas où il y aurait plus de 100 pièces également

if ($piecesDOr >= 0 && $piecesDOr <= 20) {
    $histoire .= $nomDuHeros . ' possède peu de pièce, car il possède ' . $piecesDOr . '.</p>';
} elseif ($piecesDOr >= 21 && $piecesDOr <= 40) {
    $histoire .= $nomDuHeros . ' possède un nombre de pièce limité, car il possède ' . $piecesDOr . '.</p>';
} elseif ($piecesDOr >= 41 && $piecesDOr <= 60) {
    $histoire .= $nomDuHeros . ' possède pas mal de pièce, car il possède ' . $piecesDOr . '.</p>';
} elseif ($piecesDOr >= 61 && $piecesDOr <= 99) {
    $histoire .= $nomDuHeros . ' possède beaucoup de pièce, car il possède ' . $piecesDOr . '.</p>';
} elseif ($piecesDOr >= 100) {
    $histoire .= $nomDuHeros . ' possède énormément de pièce, car il possède ' . $piecesDOr . '.</p>';
}

// avec le switch

switch (true) {

    case $piecesDOr <= 20:
        $histoire .= '<p>Je suis dans la tranche 0-20</p>';
        break;
}


$distanceSelonJour = match ($jour) {

    'Lundi', 'Mardi', 'Mercredi' => 740,
    default => 1345
};

// Le switch
// Le switch permet de tester différentes valeurs d'une même variable
// Peut être + lisible que des if/else/if/else imbriqués

// Il faut que la variable testée et les valeurs comparées soient du même type
// On peut regrouper els case entre eux
// le break peut être utile pour finir un switch quans un cas concordant a été trouvé
// Dans 99 % des cas : case / + break



























$histoire .= '<p>Il a parcouru ' . $distanceParcourue . 'm.</p>';
$histoire .= '<p>Il lui reste ' . $piecesDOr . ' pièces d\'or en poche</p>';
echo $histoire;
