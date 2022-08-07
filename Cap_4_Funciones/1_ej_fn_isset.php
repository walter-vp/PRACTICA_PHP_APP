<?php 

echo 'Ejemplo de la Función ISSET';
echo '<br>'; echo '<br>';

echo 'Ejemplo 01.';
echo '<br>';
$titulo = 'Fundamentos de programación con PHP';
if(isset($titulo)) 
echo 'La variable SI tiene contenido';
else
echo 'La variable NO tiene contenido';

echo '<br>'; echo '<br>';

echo 'Ejemplo 02.';
echo '<br>';

$resultado= isset($edad);
echo 'La variable tiene por definición: ';
echo '<br>';
echo var_dump($resultado);
?>