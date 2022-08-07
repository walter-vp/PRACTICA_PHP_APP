<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="5_switch_venta_de_entradas.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2 id="centrado">VENTA DE ENTRADAS (TEATRO)</h2>
        <img src="img/sala_de_cine.jpg" alt="Sala de cines">
    </header>

    <main>
        <!-- Inica sección de captura de datos código PHP -->
        <?php

        error_reporting(0);
        $comprador = $_POST['txtComprador'];
        $fecha = $_POST['txtFecha'];
        $nAdultos = $_POST['txtAdultos'];
        $nNiños = $_POST['txtNiños'];

        $hoy = getdate(time());
        $nDia = $hoy['weekday'];

        /* Sección de procesamiento de datos - PHP */
        switch ($nDia) {
            case 'Monday':
                $cAdultos = 10;
                $cNiños = 5;
                break;
            case 'Tuesday':
                $cAdultos = 8;
                $cNiños = 4;
                break;
            case 'Wednesday':
                $cAdultos = 8;
                $cNiños = 4;
                break;
            case 'Thursday':
                $cAdultos = 10;
                $cNiños = 6;
                break;
            case 'Friday':
                $cAdultos = 16;
                $cNiños = 8;
                break;
            case 'Saturday':
                $cAdultos = 16;
                $cNiños = 8;
                break;
            case 'Sunday':
                $cAdultos = 20;
                $cNiños = 10;
                break;
            default:
                $nAdultos = 0;
                $nNiños = 0;
                break;
        }

        $adultos = $nAdultos * $cAdultos;
        $niños = $nNiños * $cNiños;

        ?>

        <section>
            <!-- Inicia FORMULARIO -->
            <form action="5_switch_venta_de_entradas.php" name="frmTeatro" method="POST">
                <table>
                    <!-- Inicia sección de entrada de Datos -->
                    <tr>
                        <td class="col_der">Comprador: </td>
                        <td class="col_izq">
                            <input type="text" name="txtComprador" value="<?php echo $comprador; ?>" placeholder="Ingresar nombre...">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der">Fecha Actual: </td>
                        <td class="col_izq">
                            <input type="text" name="txtFecha" value="<?php echo date('d/m/y'); ?>" readonly="true">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der">N° entrada adultos: </td>
                        <td class="col_izq">
                            <input type="text" name="txtAdultos" value="<?php echo $nAdultos; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der">N° entrada niños: </td>
                        <td class="col_izq">
                            <input type="text" name="txtNiños" value="<?php echo $nNiños; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der"></td>
                        <td class="col_izq">
                            <input type="submit" value="Adquirir">
                        </td>
                    </tr>

                    <!-- Sección de presentación de resultados - PHP & HTML -->
                    <?php
                    if (!empty($_POST['txtComprador'])) { ?>

                        <table class="R">
                            <tr>
                                <td class="col_der">Comprador: </td>
                                <td class="col_izq">
                                    <?php echo $comprador; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="col_der">Costo por adultos: </td>
                                <td class="col_izq">
                                    <?php echo 'S/. ' . number_format($adultos, 2, '.', '') ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="col_der">Costo por niños: </td>
                                <td class="col_izq">
                                    <?php echo 'S/. ' . number_format($niños, 2, '.', '') ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="col_der">Día de promoción: </td>
                                <td class="col_izq">
                                    <?php echo $nDia; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="col_der">Monto total a Pagar: </td>
                                <td class="col_izq">
                                    <?php echo 'S/. ' . number_format($adultos + $niños, 2, '.', '') ?>
                                </td>
                            </tr>
                        </table>

                    <?php } ?>

                </table>
            </form>
        </section>
    </main>

    <footer>
        <p>Todos los derechos reservados &copy;2021 Lic. Manuel Torres</p>
    </footer>

</body>

</html>