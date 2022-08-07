<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4_estruc_while_venta_de_produc.css">
    <title>Document</title>
</head>

<!-- Inica sección de captura de datos código PHP -->
<?php

    error_reporting(0);

    $producto = $_POST['selProducto'];
    $cantidad = $_POST['txtCantidad'];

    // Cargando el precio de la lista
    $precio = 0;
    switch ($producto) {
        case 'Lavadora':
            $precio = 1500;
            break;
        case 'Refirgeradora':
            $precio = 3500;
            break;
        case 'Radiograbadora':
            $precio = 500;
            break;
        case 'Tostadora':
            $precio = 500;
            break;
        default:
            $precio = 0;
            break;
    }

    if ($producto == 'Lavadora') $selLa = 'selected';
    else $selL = '';
    if ($producto == 'Refirgeradora') $selRe = 'selected';
    else $selL = '';
    if ($producto == 'Radiograbadora') $selRa = 'selected';
    else $selL = '';
    if ($producto == 'Tostadora') $selT = 'selected';
    else $selL = '';

    /* Sección de procesamiento de datos - PHP */
    $subtotal = $cantidad * $precio;
    $cuotas = $_POST['selCuotas'];

    if ($cuotas == '3') $sel3 = 'selected';
    else $sel3 = '';
    if ($cuotas == '6') $sel6 = 'selected';
    else $sel6 = '';
    if ($cuotas == '9') $sel9 = 'selected';
    else $sel9 = '';
    if ($cuotas == '12') $sel12 = 'selected';
    else $sel12 = '';

    ?>

<body>
    <header>
        <img src="img/venta_de_productos_enlinea.jpg" alt="">
        <h2 id="centrado">VENTA DE PRODUCTOS</h2>
    </header>
    
    

    <main>
        <section>
            <!-- Inicia FORMULARIO -->
            <form action="4_estruc_while_venta_de_produc.php" name="frmVenta" method="post">
                <!-- Inicia sección de entrada de Datos -->
                <table>
                    <tr>
                        <td class="col_der">Producto: </td>
                        <td class="col_cent">
                            <select name="selProducto" onchange="this.form.submit()">
                                <option value="seleccione">Seleciones un producto</option>
                                <option value="Lavadora" <?php echo $selLa; ?>>Lavadora</option>
                                <option value="Refirgeradora" <?php echo $selRe; ?>>Refirgeradora</option>
                                <option value="Radiograbadora" <?php echo $selRa; ?>>Radiograbadora</option>
                                <option value="Tostadora" <?php echo $selT; ?>>Tostadora</option>
                            </select>
                        </td>
                        <td class="col_izq" rowspan="7">
                            <input type="submit" value="Calcular">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der">Precio: </td>
                        <td class="col_cent">
                            <input type="text" name="$precio" readonly="readonly" value=" <?php
                                                                                            if (!empty($_POST['selProducto'])) echo number_format($precio, 2, '.', ''); ?> ">
                        </td>
                        <!-- <td class="col_izq"></td> -->
                    </tr>
                    <tr>
                        <td class="col_der">Cantidad: </td>
                        <td class="col_cent">
                            <input type="text" name="txtCantidad" value="<?php echo number_format($cantidad, 2, '.', '') ?>" required>
                        </td>
                        <!-- <td class="col_izq"></td> -->
                    </tr>
                    <?php

                    ?>

                    <tr>
                        <td class="col_der">SubTotal: </td>
                        <td class="col_cent">
                            <input type="text" name="$subtotal" readonly="readonly" value=" <?php echo number_format($subtotal, 2, '.', ''); ?> ">
                        </td>
                        <!-- <td class="col_izq"></td> -->
                    </tr>
                    <tr>
                        <td class="col_der">Cuotas: </td>
                        <td class="col_cent">
                            <select name="selCuotas">
                                <option value="0">0</option>
                                <option value="3" <?php echo $sel3; ?> >3</option>
                                <option value="6" <?php echo $sel6; ?> >6</option>
                                <option value="9" <?php echo $sel9; ?> >9</option>
                                <option value="12" <?php echo $sel12; ?> >12</option>
                            </select>
                        </td>
                        <!-- <td class="col_izq"></td> -->
                    </tr>
                    
                    <!-- Sección de presentación de resultados - PHP & HTML -->
                    <?php
                    if (!empty($cuotas) && $cuotas <> 0) { ?>
                        <tr>
                            <td class="col_der">Número de letras</td>
                            <td class="col_cent">Monto</td>
                            <!-- <td class="col_izq"></td> -->
                        </tr>

                        <?php
                        /* Sección de procesamiento de datos CUOTAS- PHP */
                        $i = 1;
                        $montoMensual = $subtotal / $cuotas;
                        while ($i <= $cuotas) { ?>
                            <tr>
                                <td class="col_der">
                                    <?php echo $i; ?>
                                </td>
                                <td class="col_cent">
                                    <?php echo 'S/. ' . number_format($montoMensual, 2, '.', ''); ?>
                                </td>
                                <!-- <td class="col_izq"></td> -->
                            </tr>
                        <?php
                            $i++;
                        };
                        ?>

                    <?php
                    }
                    ?>

                </table>

            </form>
        </section>
    </main>

    <footer>
        <p>Todos los derechos reservados &copy;2021 Lic. Manuel Torres</p>
    </footer>

</body>

</html>