<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1_condicional_simple_Salario_empleados.css">
    <title>Condicional Simple</title>
</head>

<body>
    <header>
        <h2 id="centrado">PAGO DE SALARIOS EMPLEADOS</h2>
        <img src="img/tecnologia.jpg" alt="Gente trabajando">
    </header>

    <main>
        <section>
            <!-- Inica sección de captura de datos código PHP -->
            <?php
            error_reporting(0);

            $empleado = $_POST['txtEmpleado'];
            $categoria = $_POST['selCategoria'];
            $horas = $_POST['txtHoras'];

            if ($categoria=='Jefe') 
                        $selJ='SELECTED';
                    else
                        $selJ="";
                if ($categoria=='Administrativo') 
                        $selA='SELECTED';
                    else
                        $selA="";
                if ($categoria=='Operario') 
                        $selO='SELECTED';
                    else
                        $selO="";
                if ($categoria=='Practicante') 
                        $selP='SELECTED';
                    else
                        $selP=""; 

            ?>


            <!-- Inicia FORMULARIO -->
            <!-- <form action="https://www.w3schools.com/action_page.php" name="frmSalario" method="post"> -->
            <form action="1_condicional_simple_Salario_empleados.php" name="frmSalario" method="post">
                <table>

                    <!-- Inicia sección de entrada de Datos -->
                    <tr>
                        <td class="col_izq">Empleado: </td>
                        <td class="col_der">
                            <input type="text" name="txtEmpleado" placeholder="Nombre empleado..."
                                value="<?= $empleado ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Horas: </td>
                        <td class="col_der">
                            <input type="text" name="txtHoras" placeholder="Horas laboradas..." value="<?= $horas ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Categoría: </td>
                        <td class="col_der">
                            <select name="selCategoria">
                                <option value="Jefe" <?php echo $selJ; ?>>Jefe</option>
                                <option value="Administrativo" <?php echo $selA; ?> >Administrativo</option>
                                <option value="Operario" <?php echo $selO; ?> >Operario</option>
                                <option value="Practicante" <?php echo $selP; ?> >Practicante</option>
                            </td>
                    </tr>
                    <tr>
                        <td class="col_izq">
                            <input type="submit" value="Calcular">
                        </td>
                        <td class="col_der">
                            <input type="reset" value="Limpiar">
                        </td>
                    </tr>

                    <!-- Sección de procesamiento de datos - PHP -->
                    <?php
                    if ($categoria == 'Jefe') $pagoHora = 50;
                    if ($categoria == 'Administrativo') $pagoHora = 30;
                    if ($categoria == 'Operario') $pagoHora = 15;
                    if ($categoria == 'Practicante') $pagoHora = 5;

                    $sBruto = $pagoHora * $horas;
                    $descuento = $sBruto * 15.0 / 100.0;
                    $sNeto = $sBruto - $descuento;
                    ?>

                    <!-- Sección de presentación de resultados - PHP & HTML -->
                    <tr>
                        <td class="col_izq">Salario Bruto: </td>
                        <td class="col_der">
                            <?php echo ('$ ' . number_format($sBruto, 2, '.', '')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Descuento: </td>
                        <td class="col_der">
                            <?php echo ('$ ' . number_format($descuento, 2, '.', '')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Salario Neto: </td>
                        <td class="col_der">
                            <?php echo ('$ ' . number_format($sNeto, 2, '.', '')); ?>
                        </td>
                    </tr>

                </table>

            </form>

        </section>
    </main>
    <footer>
        <p>Todos los derechos reservados &copy;2021 Lic. Manuel Torres</p>
    </footer>

</body>

</html>