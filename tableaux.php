<?php
// Un tableau permet de stocker et manipuler plusieurs valeurs

// Premier type de tableau : "auto indexer"
// tableau = variable
$tableauTest = [1, 2, 3]; // valeur séparées par des virgules
// auto indexer car les index ne sont pas défini manuellement, ils sont numériques et commencent par 0. Ils s'incrémentent de 1 en 1

// affichage du tableau avec print_r
// echo $tableau ne fonctionnera pas car PHP ne peux pas concaténer un tableau
echo '<pre>';
print_r($tableauTest);
echo '</pre>';

$tableau = [0, 3, 4, 5, 8, 9, 12, 1234, 324, 3, 2];

// Important : dans un tableau auto indexé, on ne mélange pas les types de valeurs
echo '<pre>';
print_r($tableau);
echo '</pre>';

// On evite donc ce genre de tableau :
$tableauPasBien = ['Bonjour', 3, 'Salut', 5, 6];


// Dans un tableau on peut mettre du texte, des nombres et aussi d'autre tableaux

$tableauAPlusieursDimensions = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]; // Ecrire sur plusieurs lignes pour + de lisibilité

echo '<pre>';
print_r($tableauAPlusieursDimensions);
echo '</pre>';

// Acceder à une valeur precise dans un tableau 
// Pour ca, on va utiliser les index

echo $tableau[6];
echo ' 6eme valeur du Deuxieme tableau ';
// aller chercher l'index 6 => 12 
// Le premier index d'un tableau commence a zero

echo '</br>';
echo $tableauAPlusieursDimensions [0][2];
echo ' Affichage de la 3eme valeur du 1er tableau ';
echo '</br>';
echo $tableauAPlusieursDimensions [1][1];
echo ' Affichage de la 2eme valeur du 2 eme tableau ';

// --------------------------------------------------------------------------------------

// Deuxieme tableau : index manuels

$eleve = [
    'prenom' => 'Nicolas',
    'age' => 23,
    'profession' => 'Etudiant & salarié domaine du loisir',
    'matieres' => ['Developpement', 'Design', 'Marketing']
];


// Les index sont des chaines de caracte
// Pas de caractères spéciaux
// Ecrit en snake_case

echo '<pre>';
print_r($eleve);
echo '</pre>';

$phrase = 'Je m\'appelle ' .$eleve['prenom'] . ' j\'ai ' .$eleve['age']. ' ans.';

echo $phrase;