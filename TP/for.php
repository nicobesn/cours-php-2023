<?php





// 1.
// Ecrivez 100 fois : "Je ne copierais pas le code PHP de mon voisin"

$phrase = 'Je ne copierais pas le code PHP de mon voisin';
for ($i = 1; $i <= 100; $i++){
    echo '<p>' . $phrase . '</p>' ;
}

// 3.
// Trouver la somme des 100 premiers nombres : 1 + 2 + 3 + ... + 100 = ?

$somme = 0;
for ($i = 1; $i <= 100; $i ++) {
    $somme = $somme + $i; 

}

echo '<p>Somme : ' . $somme . '</p>';

// 4.
// Trouver la somme des 100 premiers nombres paires :  2 + 4 + 6 + ... + 200 = ?

        // 2 façons de faire, avec ou sans modulo

// V1 avec Modulo
$somme = 0;
for ($i = 1; $i <= 200; $i ++) {
    if ($i%2 == 0) {
        $somme += $i;
    }
}

echo '<p>Somme : ' . $somme . '</p>';

// V2 sans modulo
$somme = 0;
for ($i = 2; $i <= 200; $i += 2) {
    $somme += $i;
}

echo '<p>Somme : ' . $somme . '</p>';



// 5.
// Trouver la différence ebtre la somme des carrés des 100 premiers nombres et le carré de la somme des 100 premiers nombres :
// (1^2 + 2^2 + 3^2 + ... + 100^2) - (1 + 2 + 3 + ... + 100)^2

// la somme des carrés

$sommeDesCarres = 0;

for ($i = 1; $i <= 100; $i++) {
    $carre = $i * $i;
    $sommeDesCarres += $carre;
}


// carré de la somme

$somme = 0;
for ($i = 1; $i <= 100; $i++) {
    
}