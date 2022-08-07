<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="7_ej_STR_LEN.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2 id="centrado">Validación usando STR_LEN</h2>
        <img src="img/cuestionarios-formularios.jpg" alt="">
    </header>

    <?php 
    
    error_reporting(0);
    
    // Capturando valores
    $dni=$_POST['txtDNI'];

    /* Validando valores */
    $mensaje='';
    if(!preg_match('/^[[:digit:]]+$/ ', $dni))
        $mensaje='Error en datos del DNI contiene letras';
    elseif (strlen($dni) != 8)
        $mensaje='DNI debe tener 8 caracteres numéricos';
    ?>

    <main>
        <section>
            <form action="7_ej_STR_LEN.php" name="frmEmpleado" method="post">
                <table>
                    <tr>
                        <td class="col_der">Ingrese DNI del empleado</td>
                        <td class="col_cent">
                            <input type="text" name="txtDNI" value="<?php echo $_POST['txtDNI'] ?>">
                        </td>
                        <td class="col_izq">
                            <?php echo $mensaje; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der"></td>
                        <td class="col_cent">
                            <input type="submit" value="Validar">
                        </td>
                        <td class="col_izq"></td>
                    </tr>
                </table>
            </form>
        </section>
    </main>
</body>

</html>