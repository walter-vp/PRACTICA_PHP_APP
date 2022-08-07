<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="7_manejo_de_constantes.css">
    <title>Manejo de Constantes</title>
</head>

<body>
    <header>
        <h1 id="centrado">VENTA DE PRODUCTOS</h1>
    </header>

    <main>
        <section>
            <form name="frmVenta" action="7_manejo_de_constantes.php" method="post">
                <table>
                    <tr>
                        <td class="col_izq">Cantidad: </td>
                        <td class="col_der">
                            <input type="text" name="txtCantidad" placeholder="Ingresar cantidad..." />
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

                    /* Defines una CONSTANTE */
                    define("COSTO_UNITARIO", 20.25);
                    define("DESCUENTO", 0.10);

                    /* Define una Variable */
                    $cantidad = $_POST['txtCantidad'];


                    /* Procesamiento - Cálculos */
                    $importeCompra = COSTO_UNITARIO * $cantidad;
                    $importeDescuento = $importeCompra * DESCUENTO;
                    $importePagar = $importeCompra - $importeDescuento;

                    ?>
                    <tr>
                        <td class="col_izq">Precio Producto: </td>

                        <td class="col_der_echo">
                            <?php echo "$/. ".COSTO_UNITARIO; ?>
                        </td>

                    </tr>
                    <tr>
                        <td class="col_izq">Cantidad: </td>

                        <td class="col_der_echo">
                            <?php echo $cantidad;  ?>
                        </td>

                    </tr>
                    <tr>
                        <td class="col_izq">Importe de compra: </td>

                        <td class="col_der_echo">
                            <?php echo ('S/. ' . number_format($importeCompra, 2));  ?>
                        </td>

                    </tr>
                    <tr>
                        <td class="col_izq">Descuento: </td>

                        <td class="col_der_echo">
                            <?php echo ('S/. ' . number_format($importeDescuento, 2));  ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="col_izq">Importe Neto: </td>

                        <td class="col_der_echo">
                            <?php echo ('S/. ' . number_format($importePagar, 2));  ?>
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