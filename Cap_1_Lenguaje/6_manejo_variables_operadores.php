<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="6_manejo_variables_operadores.css">
    <title>Manejo Variales & Operadores</title>
</head>

<body>
    <header>
        <h3 id="centrado">PAGO DE EMPLEADOS</h3>
    </header>

    <main>
        <section>
            <form name="frmPagos" action="6_manejo_variables_operadores.php" method="post">
                <table>
                    <tr>
                        <td class="col_izq">Empleados: </td>
                        <td class="col_der">
                            <input type="text" name="txtEmpleado" placeholder="Nombre y apellidos..." />
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Horas Trabajadas: </td>
                        <td class="col_der">
                            <input type="text" name="txtHoras" placeholder="Total horas..." />
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Tarifa por hora: </td>
                        <td class="col_der">
                            <input type="text" name="txtTarifa" placeholder="Tarifa x Hr..." />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Procesar" />
                        </td>
                        <td>
                            <input type="reset" value="Limpiar">
                        </td>
                    </tr>

                    <?php
                    /* Captura de variables */
                    error_reporting(0);
                    $empleado = $_POST['txtEmpleado'];
                    $hora = $_POST['txtHoras'];
                    $tarifa = $_POST['txtTarifa'];

                    /* Procesamiento de variables */
                    $sueldoBruto = $hora * $tarifa;
                    $descuentoEssalud = $sueldoBruto * 0.12;
                    $descuentoAFP = $sueldoBruto * 0.12;

                    $sueldoNeto = $sueldoBruto - $descuentoEssalud - $descuentoAFP;
                    ?>
                    <tr>
                        <td class="col_izq">Empleado: </td>

                        <td class="col_der_echo">
                            <?php echo $empleado;  ?>
                        </td>

                    </tr>
                    <tr>
                        <td class="col_izq">Horas Trabajadas: </td>

                        <td class="col_der_echo">
                            <?php echo $hora;  ?>
                        </td>

                    </tr>
                    <tr>
                        <td class="col_izq">Tarifa por Hora: </td>

                        <td class="col_der_echo">
                            <?php echo ('S/. ' . number_format($tarifa, 2));  ?>
                        </td>

                    </tr>
                    <tr>
                        <td class="col_izq">Sueldo Bruto: </td>

                        <td class="col_der_echo">
                            <?php echo ('S/. ' . number_format($sueldoBruto, 2));  ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="col_izq">ESSALUD: </td>

                        <td class="col_der_echo">
                            <?php echo ('S/. ' . number_format($descuentoEssalud, 2));  ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="col_izq">Descuento AFP: </td>

                        <td class="col_der_echo">
                            <?php echo ('S/. ' . number_format($descuentoAFP, 2));  ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="col_izq">Sueldo Neto: </td>

                        <td class="col_der_echo">
                            <?php echo ('S/. ' . number_format($sueldoNeto, 2));  ?>
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