<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="2_condicional_simple_obsequio_clientes.css">
    <title>Condicional Simple</title>
</head>

<body>
    <header>
        <h2 id="centrado">OBSEQUIO A CLIENTES</h2>
        <img src="img/regalos_clientes_tienda.jpg" alt="">
    </header>

    <main>
        <section>
            <!-- Inica sección de captura de datos código PHP -->
            <?php 
                error_reporting(0);

                $cliente=$_POST['txtCliente'];
                $monto=$_POST['txtMonto'];
                $ticket=$_POST['txtNumero'];

            ?>

            <!-- Inicia FORMULARIO -->
            <form action="2_condicional_simple_obsequio_clientes.php" name='frmObsequio' method="post">
                <!-- Inicia sección de entrada de Datos -->
                <table>
                    <tr>
                        <td class="col_izq">Nombre del Cliente: </td>
                        <td class="col_der">
                            <input type="text" name="txtCliente" value="<?php echo $cliente; ?>" placeholder="Ingresar nombre del cliente...">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Monto Total $: </td>
                        <td class="col_der">
                            <input type="text" name="txtMonto" value="<?php echo $monto; ?>" placeholder="Ingresar monto a pagar...">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Número de Ticket: </td>
                        <td class="col_der">
                            <input type="text" name="txtNumero" value="<?php echo $ticket; ?>" placeholder="Ingresar número de ticket obtenido...">
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq"></td>
                        <td class="col_der">
                            <input type="submit" value="Procesar">
                            <input type="reset" value="Limpiar">
                        </td>
                    </tr>

                    <!-- Sección de procesamiento de datos - PHP -->
                    <?php 

                        if ($ticket>=1 && $ticket<=4) {
                            $obsequio="Canasta con productos diversos";
                            $descuento=$monto*16.0/100;
                        }
                        
                        if ($ticket>=5 && $ticket<=9) {
                            $obsequio="Saco de Azucar de 20Kg.";
                            $descuento=$monto*13.0/100;
                        }
                        
                        if ($ticket>=10 && $ticket<=14) {
                            $obsequio="Botella Aceite 5 litros";
                            $descuento=$monto*6.0/100;
                        }

                        if ($ticket>=15 && $ticket<=19) {
                            $obsequio="Caja de leche de 24 latras grandes";
                            $descuento=$monto*12.0/100;
                        }

                        if ($ticket==20) {
                            $obsequio="Saco de Azucar de 50Kg.";
                            $descuento=$monto*10.0/100;
                        }

                        if ($ticket<1 || $ticket>20) {
                            echo    '<script>
                                        alert("Ticket NO válido...!!");
                                    </script>';
                        }
                        $nuevoMonto= $monto-$descuento;
                    ?>

                    <!-- Sección de presentación de resultados - PHP & HTML -->
                    <tr>
                        <td class="col_izq">Monto a cancelar: </td>
                        <td class="col_der">
                            <?php echo 'S/. '.number_format($nuevoMonto,2,'.','')  ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Obsequio obtenido: </td>
                        <td class="col_der">
                            <?php echo $obsequio; ?>
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