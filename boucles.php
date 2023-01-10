<?php
// Les boucles servent à répéter des instructions

// La boucle for
// Une valeur de départ
// Une condition d'arrêt
// Une méthode d'incrémentation

// Tout ça est gérer par un compteur 
// Souvent on appelera ce compteur $i


for ($i = 1; $i <= 100; $i++); {     // On s'épare les valeurs avec des points virgule " ; "

    echo '<p>' . $i . '</p>';
}

echo '<hr/>';

// 10 opérations
for ($i = 1; $i < 10; $i++) {

    echo '<p>' . $i . '</p>';
}

echo '<hr/>';

// 9 opérations
for ($i = 1; $i < 10; $i++) {

    echo '<p>' . $i . '</p>';
}

echo '<hr/>';

// 11 opérations
for ($i = 1; $i <= 10; $i++) {

    echo '<p>' . $i . '</p>';
}

// Dans 90 % des for, on aura quelque chose comme ci-dessus
// Mais on peut avoir d'autres déclaratons du for : 

// On peut descendre
for ($i = 1000; $i > 0; $i --) {

}

// On peut avance de 2 en 2

for ($i = 0; $i <= 1000; $i += 2) {
    
}

// On peut travailler avec des valeurs négatives

for ($i = -10; $i <= 10; $i ++) {
    
}

// Notion de bloc d'instruction
for ($i = 1; $i <= 10; $i++) {
    // Début de mon bloc

    $var = 'truc';
    if ($i == 2){

    }
    switch ($var) {

    }

    // Un autre for
    // Mais plus de $i
    for ($j = 1; $j <= 10; $j++) {

    }

    // Fin de mon bloc

}

// La boucle foreach ("pour charque")
// Boucle pour parcourir les éléments d'un tableau

$tableau = [1, 2, 3, 4, 5];
foreach ($tableau as $nombre) {
    echo '<p>' . $nombre . '</p>'; 
}

// après le "as" on donnera un nom intelligible

// Auto complétion de VS CODE

foreach ($variable as $key => $value) {
    # code...
}


// on ecrira

foreach ($tableau as $key => $nombre) {
    echo '<p>La valeur ' . $nombre . ' est indexée à ' . $key . '</p>';
}