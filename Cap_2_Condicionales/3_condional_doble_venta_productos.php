<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="3_condional_doble_venta_productos.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2 id="centrado">VENTA DE PRODUCTOS ELECTRODOMÉSTOS</h2>
        <img src="img/electrodomesticos.jpg" alt="" srcset="">
    </header>

    <main>
        <section>
            <!-- Inica sección de captura de datos código PHP -->
            <?php
            error_reporting(0);

            $cliente = $_POST['txtCliente'];
            $producto = $_POST['selProducto'];
            $cantidad = $_POST['txtCantidad'];

            if ($producto == 'Cocina')
                $selC = 'SELECTED';
            else
                $selC = '';


            if ($producto == 'Refrigeradora')
                $selR = 'SELECTED';
            else
                $selR = '';


            if ($producto == 'Televisión')
                $selT = 'SELECTED';
            else
                $selT = '';


            if ($producto == 'Lavadora')
                $selL = 'SELECTED';
            else
                $selL = '';


            if ($producto == 'Radiograbadora') {
                $selRa = 'SELECTED';
            } else {
                $selRa = '';
            }

            ?>

            <!-- Inicia FORMULARIO -->
            <form action="3_condional_doble_venta_productos.php" name="frmTienda" method="post">

                <!-- Inicia sección de entrada de Datos -->
                <table>
                    <tr>
                        <td class="col_izq">Cliente: </td>
                        <td class="col_der">
                            <input type="text" name="txtCliente" value="<?php echo $cliente; ?>" placeholder="Introdusca nombre del cliente...">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Producto: </td>
                        <td class="col_der">
                            <select name="selProducto">
                                <option value="Cocina" <?php echo $selC; ?>>Cocina de 6 hornillas</option>
                                <option value="Refrigeradora" <?php echo $selR; ?>>Refrigeradora</option>
                                <option value="Televisión" <?php echo $selT; ?>>Televisión</option>
                                <option value="Lavadora" <?php echo $selL; ?>>Lavadora</option>
                                <option value="Radiograbadora" <?php echo $selRa; ?>>Radiograbadora</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Cantidad: </td>
                        <td class="col_der">
                            <input type="text" name="txtCantidad" value="<?php echo $cantidad; ?>" placeholder="Introdusca cantidad de productos...">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq"></td>
                        <td class="col_der">
                            <input type="submit" value="Procesar">
                        </td>
                    </tr>

                    <!-- Sección de procesamiento de datos - PHP -->
                    <?php

                    if ($producto == 'Cocina') $precio = 1200;
                    if ($producto == 'Refrigeradora') $precio = 2500;
                    if ($producto == 'Televisión') $precio = 3200;
                    if ($producto == 'Lavadora') $precio = 1000;
                    if ($producto == 'Radiograbadora') $precio = 700;

                    $subTotal = $precio * $cantidad;

                    if ($subTotal > 10000)
                        $descuento = $subTotal * 10 / 100;
                    else
                        $descuento = $subTotal * 5 / 100;

                    $monto = $subTotal - $descuento;

                    ?>

                    <!-- Sección de presentación de resultados - PHP & HTML -->
                    <tr>
                        <td class="col_izd">Precio del Producto: </td>
                        <td class="col_der">
                            <?php echo 'S/. '.number_format($precio,2,'.','') ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izd">Sub Total a pagar: </td>
                        <td class="col_der">
                            <?php echo 'S/. '.number_format($subTotal,2,'.','') ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izd">Monto de descuento: </td>
                        <td class="col_der">
                            <?php echo 'S/. '.number_format($descuento,2,'.','') ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izd">Monto a pagar: </td>
                        <td class="col_der">
                            <?php echo 'S/. '.number_format($monto,2,'.','') ?>
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