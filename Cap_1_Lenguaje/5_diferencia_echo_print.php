<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="5_diferencia_echo_print.css">
    <title>Diferencia entre ECHO y PRINT</title>
</head>
<body>
    <header>
        <h3 id="centrado">Casa de Cambio</h3>
    </header>

    <main>
        <section>
            <form name="frmontos" action="5_diferencia_echo_print.php" method="post">
                <table>
                    <tr>
                        <td class="col_izq">Monto en soles</td>
                        <td class="col_der">
                            <input type="text" name="txtSoles" />
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Monto en dólares: </td>
                        <td class="col_der">
                            <input type="text" name="txtDolares" />
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Monto en marcos: </td>
                        <td class="col_der">
                            <input type="text" name="txtMarcos" />
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
                        error_reporting(0);
                        $soles=$_POST['txtSoles'];
                        $dolares=$_POST['txtDolares'];
                        $marcos=$_POST['txtMarcos'];
                        $euros= (($soles*3.51)+$dolares+($marcos/2.12))*1.09;
                    ?>
                    <tr>
                        <td class="col_izq">Total Soles: </td>
                        
                        <td class="col_der_echo">
                            <?php echo('S/.'.number_format($soles,2));  ?>
                        </td>
                        
                        <td class="col_der_print">
                            <?php printf("S/.  %.2f",$soles); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Total Dólares</td>
                        
                        <td class="col_der_echo">
                            <?php echo ('$/.'.number_format($dolares,2));  ?>
                        </td>
                        
                        <td class="col_der_print">
                            <?php printf("$/. %.2f",$dolares);  ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Total Marcos</td>
                        
                        <td class="col_der_echo">
                            <?php echo ('DEM.'.number_format($marcos,2));  ?>
                        </td>
                        
                        <td class="col_der_print">
                            <?php printf("DEM.  %.2f",$marcos); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Monto Total en euros</td>
                        
                        <td class="col_der_echo">
                            <?php echo ('EUROS. '.number_format($euros,2));  ?>
                        </td>
                        
                        <td class="col_der_print">
                            <?php printf("EUROS. %.2f",$euros);  ?>
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