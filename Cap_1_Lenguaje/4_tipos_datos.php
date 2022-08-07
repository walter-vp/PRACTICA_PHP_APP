<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4_tipos_datos.css">
    <title>Document</title>
</head>
<body>
    
  <main>
        <?php 
            $trabajador="Fernanda Ximena Torres Lázaro"; /* dato texto*/
            $fechanacimiento="10/10/1985"; /* dato fecha */
            $numerohijos=2; /* dato númro entero */
            $sueldo=4500.10; /* dato número float */
            $estado=true; /* dato boleano */
      
            echo 'Valor de la variable Tipo de Datos';
            echo '<hr>';
            echo '<br>'.$trabajador.' &hArr; Dato tipo: '.gettype($trabajador);
            echo '<br>'.$fechanacimiento.' &hArr; Dato tipo: '.gettype($fechanacimiento);
            echo '<br>'.$numerohijos.' &hArr; Dato tipo: '.gettype($numerohijos);
            echo '<br>'.$sueldo.' &hArr; Dato tipo: '.gettype($sueldo);
            echo '<br>'.$estado.' &hArr; Dato tipo: '.gettype($estado);
            echo '  '; 
        ?>
  </main>
  <footer>
        <p>Todos los derechos reservados &copy;2021 Lic. Manuel Torres</p>
    </footer>
</body>
</html>