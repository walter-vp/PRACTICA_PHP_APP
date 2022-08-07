<?php 

// Declaración y asignación de variables
$nombre =   'Juan Perez';
$sueldo =   3050.78;
$edad=      35;
$fechanac = '1979-10-10';
$objTel=new stdClass();
$paises =   array('Perú','Venezuela','Paragua','Colombia');

// Impresión de tipos de datos
echo '$nombre es de tipo: '. gettype($nombre). '<br>';
echo '$sueldo es de tipo: '. gettype($sueldo). '<br>';
echo '$edad es de tipo: '.gettype($edad). '<br>';
echo '$fechanac es de tipo: '.gettype($fechanac). '<br>';
echo '$objTel es de tipo: '.gettype($objTel). '<br>';
echo '$paises es de tipo: '.gettype($paises). '<br>';

?>