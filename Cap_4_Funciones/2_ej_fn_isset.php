<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="2_ej_fn_isset.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1 id="centrado">Validación usando ISSET</h1>
        <img src="img/cuestionarios-formularios.jpg" alt="">
    </header>

    <?php
    error_reporting(0);
    if (isset($_POST['txtMonto']))
        $mensaje = 'Ingreso correcto';
    else
        $mensaje = 'Ingreso debe ingresar un monto';
    ?>

    <main>
        <section>
            <form action="2_ej_fn_isset.php" method="post">
                <table>
                    <tr>
                        <td class="col_izq">Ingrese Monto: </td>
                        <td class="col_cent">
                            <input type="text" name="txtMonto" value=" <?php echo $_POST['txtMonto'] ?> ">
                        </td>
                        <td class="col_der">
                            <?php echo $mensaje; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq" rowspan="3"></td>
                        <td class="col_cent">
                            <input type="submit" value="Validar">
                        </td>
                        <td class="col_der"></td>
                    </tr>
                </table>
            </form>
        </section>
    </main>
</body>

</html>