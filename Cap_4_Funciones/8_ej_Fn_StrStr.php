<?php 

$mail= 'manuel.torres@hotmail.com';
$servidor= strstr($mail,'@',true);
$usuario= strstr($mail,'@',false);

echo 'El correo electrónico es: '.$mail. '<br>'.'<br>' ;
echo 'El DOMINIO del correo electrónico es: '.$servidor. '<br>'.'<br>';
echo 'El USUARIO del correo electrónico es: '.$usuario. '<br>'.'<br>';

?>