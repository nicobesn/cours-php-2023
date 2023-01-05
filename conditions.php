<?php

$monAge = rand(5, 25);
define('AGE_LIMITE_POUR_PASSER_LE_PERMIS', 18);

echo '<p>J\'ai ' . $monAge . ' ans</p>';
echo '<p>On peut passer le permis à ' . AGE_LIMITE_POUR_PASSER_LE_PERMIS . ' ans</p>';

if ($monAge >= AGE_LIMITE_POUR_PASSER_LE_PERMIS) {
    echo '<p>Je peux aller m\'insrire à l\'auto-école</p>';
} else {

    $ageAttente = AGE_LIMITE_POUR_PASSER_LE_PERMIS - $monAge;
    $phrase = '<p>J\'attends encore ' . $ageAttente . ' année';

    if ($ageAttente !== 1) {
        $phrase .= 's';
    }

    $phrase .= '...</p>';
    echo $phrase;
}
// Version ternaire

if ($monAge >= AGE_LIMITE_POUR_PASSER_LE_PERMIS) {
    echo '<p>Je peux aller m\'insrire à l\'auto-école</p>';
} else {
    $ageAttente = AGE_LIMITE_POUR_PASSER_LE_PERMIS - $monAge;

    // Ternaire = "if" condensé
    $mot = ($ageAttente === 1) ? 'an' : 'années';
    $phrase = '<p>J\'attends encore ' . $ageAttente . ' ' . $mot . '...</p>';

    echo $phrase;
}


/* 

La strucure :
Mot clé "if"
La conditon, comparaison, booléen se trouve entre ()

Plusieurs opérateurs de comparaison :
    // > plus grand que, >= plus grand ou égal
    // < plus petit que, <= plus petit ou égal
    // == égal (à éviter)
    // === strictement égal (à favoriser)

Un premier bloc d'instructions, délimité par { }
Si nécessaire le mot clé "else"
Un second bloc d'instruction, délimité par { }

*/