<?php 

for($i=1; $i <= 10; $i++)
    echo 'La serie es: '. $i . '<br>';

echo '<br>'. '<br>';

for($i=10; $i >= 1; $i--)
    echo 'La serie es: '. $i . '<br>';

echo '<br>'. '<br>';

/* Ciclo de repeticiones hasta N */
$n=20;

for ($i=1; $i <= $n ; $i++) { 
    
    // Buscar los pares
    if($i % 2==0)
    echo 'La serie de número pares es: '. $i . '<br>';
}

echo '<br>'. '<br>';

/* Ciclo de repeticiones hasta N */
$n =10;

$num=1;
$den=2;
$suma=0;

for ($i=1; $i <= $n ; $i++) { 
    
    echo 'La serie numérica es: '.$num .'/'.$den. '<br>' ;

    $suma += $num / $den;
    $num +=1;
    $den +=2;
}

echo '<br>'. '<br>';

for ($i=1; $i <= 12 ; $i++) { 
    echo 'Tabla de multiplicar  -> '. $n . ' x ' . $i . ' = ' . $n*$i . '<br>';
}

echo '<br>'. '<br>';

//Uso de la instrucción "break" en la estructura for

$n=100;
$c=0;
echo 'SE imprimen los número multiplos de 5 de la serie del 1 - 100: ' . '<br>' . '<br>';

for ($i=1; $i <= $n ; $i++) { 
    if( $i % 5 == 0){
        echo 'El número de la serie es: ' . $i . '<br>';
        $c++;
    }
    if ($c == 10) {
        break;
    }
}

echo '<br>'. '<br>';

//Uso de la instrucción "continue" en la estructura for

$n=100;
$c=0;
echo 'NO imprime los número multiplos de 5 de la serie del 1 - 100: ' . '<br>' . '<br>';

for ($i=1; $i <= $n ; $i++) { 
    if( $i % 5 == 0){
        continue;
    }
    echo 'El número de la serie es: ' . $i . '<br>';
}



