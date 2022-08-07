<?php

echo 'Imprime los 10 número en forma ascendente: ' . '<br>' . '<br>';

$i = 1;
/* Ciclo de repeticiones hasta 10 */
do {
    echo 'El numero es: ' . $i . '<br>';
    $i++;
} while ($i <= 10);


echo '<br>' . '<br>';

echo 'Imprime los 10 número en forma descendente: ' . '<br>' . '<br>';

$i = 10;
/* Ciclo de repeticiones hasta 10 */
do {
    echo 'El número es: ' . $i . '<br>';
    $i--;
} while ($i >= 1);

echo '<br>' . '<br>';

echo 'Imprime los número de la serie: ' . '<br>' . '<br>';

$i = 1;
$num = 1;
$den = 2;

$n = 10;
/* Ciclo de repeticiones hasta n*/
do {
    echo 'El número ' . $i . ' de la serie es: ' . $num . '/' . $den . '<br>';
    $num += 2;
    $den += 2;
    $i++;
} while ($i <= $n);


echo '<br>' . '<br>';

echo 'Imprime los número de la serie: ' . '<br>' . '<br>';

$i = 1;
$num = 1;
$den = 5;

$n = 10;
/* Ciclo de repeticiones hasta n*/
do {
    if ($i % 2 !== 0)
        echo 'El número ' . $i . ' de la serie es: ' . $num . '/' . $den . '<br>';
    else
        echo 'El número ' . $i . ' de la serie es: ' . ' - ' . $num . '/' . $den . '<br>';
    $num += 1;
    $den += 5;
    $i++;
} while ($i <= $n);


echo '<br>' . '<br>';

//Uso de la instrucción "break" en la estructura While
$n = 100;
$c = 0;
$i = 1;

echo 'SE imprimen los número multiplos de 7 de la serie del 1 - 100: ' . '<br>' . '<br>';

do {
    if ($i % 7 == 0) {
        echo 'El número de la serie es: ' . $i . '<br>';
        $c++;
    }
    if ($c == 7) break;
    else $i++;
} while ($i <= $n);



echo '<br>' . '<br>';

//Uso de la instrucción "continue" en la estructura While
$n = 50;

$i = 0;

echo 'NO imprime los número multiplos de 7 de la serie del 1 - 100: ' . '<br>' . '<br>';

do {
    $i++;
    if ($i % 7 == 0)
        continue;
    echo 'El número de la serie es: ' . $i . '<br>';
} while ($i <= $n);


echo '<br>' . '<br>';

$n = 10;
$i = 1;

do {
    $j = 1;
    while ($j <= $i) {
        echo $i . ' ';
        $j++;
    }
    echo '<br>';
    $i++;
} while ($i <= $n);