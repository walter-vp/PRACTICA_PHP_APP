<?php

// Asignación de valores a variables
$codigo = '00007';
echo 'código original: ' . $codigo . '<br>';

/* Aplicamos settype */
settype($codigo, 'integer');
$nuevocodigo = sprintf("%05d", $codigo + 1);

// Impresión del nuevo código
echo 'El valor de $codigo es: ' . $nuevocodigo;

echo '<br>' . '<br>';

$codigo = $nuevocodigo;
echo 'Los 10 nuevos códigos autogenerados son: '. '<br>';
for ($i = 1; $i <= 10; $i++) {
    $nuevocodigo = sprintf("%05d", $codigo + $i);
    echo 'El valor de $codigo item '.$i.' es: ' . $nuevocodigo . '<br>';
}
