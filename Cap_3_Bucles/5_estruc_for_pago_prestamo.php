<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="5_estruc_for_pago_prestamo.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2 id="centrado">CASA DE PRESTAMO</h2>
        <img src="img/casa_prestamo.jpeg" alt="">
    </header>
    <!-- Inica sección de captura de datos código PHP -->
    <?php

    error_reporting(0);

    $cliente = $_POST['txtCliente'];
    $monto = $_POST['txtMonto'];
    $cuotas = $_POST['selCuota'];

    if ($cuotas == 3) $sel3 = 'selected';
    else $sel3 = '';
    if ($cuotas == 6) $sel6 = 'selected';
    else $sel6 = '';
    if ($cuotas == 9) $sel9 = 'selected';
    else $sel9 = '';
    if ($cuotas == 12) $sel12 = 'selected';
    else $sel12 = '';

    $msgCliente = '';
    $msgMonto = '';

    if (empty($cliente))
        $msgCliente = 'Debe registar nombre del cliente';

    if (empty($monto) || !is_numeric($monto))
        $msgMonto = 'Debe registrar correctamente el monto del prestamo';
    elseif ($monto <= 0)
        $msgMonto = 'El monto prestamos no debe ser inferior a 0';
    ?>

    <main>
        <section>
            <!-- Inicia FORMULARIO -->
            <form action="5_estruc_for_pago_prestamo.php" name="" method="post">
                <!-- Inicia sección de entrada de Datos -->
                <table>
                    <tr>
                        <td class="col_der">Cliente: </td>
                        <td class="col_cent">
                            <input type="text" name="txtCliente" value=" <?php echo $cliente; ?> ">
                        </td>
                        <td class="col_izq">
                            <?php echo $msgCliente; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der">Monto prestado: </td>
                        <td class="col_cent">
                            <input type="text" name="txtMonto" value=" <?php echo $monto; ?> ">
                        </td>
                        <td class="col_izq">
                            <?php echo $msgMonto; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der">N° de cuotas: </td>
                        <td class="col_cent">
                            <select name="selCuota">
                                <!-- <option value="seleccione">Seleciones numero de cuotas</option> -->
                                <option value="3" <?php echo $sel3; ?>>3</option>
                                <option value="6" <?php echo $sel6; ?>>6</option>
                                <option value="9" <?php echo $sel9; ?>>9</option>
                                <option value="12" <?php echo $sel12; ?>>12</option>
                            </select>
                        </td>
                        <td class="col_izq"></td>
                    </tr>
                    <tr>
                        <td class="col_der"></td>
                        <td class="col_cent">
                            <input type="submit" value="Cotizar">
                        </td>
                        <td class="col_izq"></td>
                    </tr>
                </table>

                <!-- Sección de presentación de resultados - PHP & HTML -->
                <?php
                if (!empty($cliente) && !empty($monto)) { ?>
                    <table>
                        <tr id="fila">
                            <td>N° DE CUOTA: </td>
                            <td>FECHAS DE PAGO: </td>
                            <td>MONTO MENSUAL: </td>
                        </tr>
                        <?php
                        switch ($cuotas) {
                            case 3:
                                $montoMensual = ($monto * 1.05) / $cuotas;
                                break;
                            case 6:
                                $montoMensual = ($monto * 1.07) / $cuotas;
                                break;
                            case 9:
                                $montoMensual = ($monto * 1.10) / $cuotas;
                                break;
                            case 12:
                                $montoMensual = ($monto * 1.20) / $cuotas;
                                break;
                            default:
                                
                                break;
                        } // Cierre del Switch

                        $fecha = date('d-m-y');

                        for ($i = 1; $i <= $cuotas; $i++) {
                        ?>

                            <tr>
                                <td>
                                    <?php echo $i . ' cuota'; ?>
                                </td>
                                <td>
                                    <?php echo date('d/m/y', strtotime("$fecha + $i month")); ?>
                                </td>
                                <td>
                                    <?php echo 'S/. ' . number_format($montoMensual, 2, '.', '') ?>
                                </td>
                            </tr>

                        <?php }; ?>
                        <!-- Cierre del for ? -->
                    </table>

                <?php }; ?>
                <!-- Cierre del if ? -->

            </form>

        </section>
    </main>

    <footer>
        <p>Todos los derechos reservados &copy;2021 Lic. Manuel Torres</p>
    </footer>

</body>

</html>