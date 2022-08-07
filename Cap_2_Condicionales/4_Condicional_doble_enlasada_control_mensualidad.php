<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4_Condicional_doble_enlasada_control_mensualidad.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2 id="centrado">Mensualidad de la Universidad</h2>
        <img src="img/estudiantes_universitarios.jpg" alt="">
    </header>

    <main>
        <!-- Inica sección de captura de datos código PHP -->
        <?php
        error_reporting(0);

        /* Captura de variable - Formulario */
        $alumno = $_POST['txtAlumno'];
        $categoria = $_POST['selCategoria'];
        $promedio = $_POST['txtPromedio'];

        /* Marcar selección */
        if ($categoria == 'A') $selA = 'selected';
        else $selA = '';

        if ($categoria == 'B') $selB = 'selected';
        else $selB = '';

        if ($categoria == 'C') $selC = 'selected';
        else $selC = '';

        if ($categoria == 'D') $selD = 'selected';
        else $selD = '';

        /* Iniciación de variables */
        $mAlumno = '';
        $mCategoria = '';
        $mPromedio = '';

        if (empty($alumno) || !is_string($promedio)) {
            $mAlumno = 'Debe registrar nombre del alumno';
        }

        if (empty($categoria)) {
            $mCategoria = 'Debe seleccionar una categoría ';
        }

        if (empty($promedio) || !is_numeric($promedio)) {
            $mPromedio = 'Debe registar correctamente el promedio';
        } elseif ($promedio < 0 || $promedio > 20) {
            $mPromedio = 'El promedio debe ser entre 0 y 20';
        }
        ?>

        <section>
            <!-- Inicia FORMULARIO -->
            <form action="4_Condicional_doble_enlasada_control_mensualidad.php" name="frmUniversidad" method="post">

                <table>
                    <!-- Inicia sección de entrada de Datos -->
                    <tr>
                        <td class="col_izq">Nombre completo del alumno: </td>
                        <td class="col_centro">
                            <input type="text" name="txtAlumno" value="<?php echo $alumno; ?>" placeholder="Nombre alumno...">
                        </td>
                        <td class="col_der">
                            <p>
                                <?php echo $mAlumno; ?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Seleccionar categoria: </td>
                        <td class="col_centro">
                            <select name="selCategoria">
                                <option value="Seleccione" selected>Seleccione una categoria</option>
                                <option value="A" <?php echo $selA; ?>>A</option>
                                <option value="B" <?php echo $selB; ?>>B</option>
                                <option value="C" <?php echo $selC; ?>>C</option>
                                <option value="D" <?php echo $selD; ?>>D</option>
                            </select>
                        </td>
                        <td class="col_der">
                            <p>
                                <?php echo $mCategoria; ?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq">Ingresar promedio: </td>
                        <td class="col_centro">
                            <input type="text" name="txtPromedio" value="<?php echo $promedio; ?>" placeholder="Ingresar promedio...">
                        </td>
                        <td class="col_der">
                            <p>
                                <?php echo $mPromedio; ?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_izq"></td>
                        <td class="col_centro">
                            <input type="submit" value="Procesar">
                        </td>
                        <td class="col_der">

                        </td>
                    </tr>

                    <!-- Sección de procesamiento de datos - PHP -->
                    <?php
                        if ($categoria == 'A') {
                            $monto = 850;
                        } elseif ($categoria == 'B') {
                            $monto = 750;
                        } elseif ($categoria == 'C') {
                            $monto = 650;
                        } elseif ($categoria == 'D') {
                            $monto = 550;
                        } else {
                            $monto = 0;
                        }

                        if ($promedio < 12) {
                            $descuento = 0;
                        } elseif ($promedio <= 15) {
                            $descuento = $monto * 10.0 / 100;
                        } elseif ($promedio <= 17) {
                            $descuento = $monto * 15.0 / 100;
                        } elseif ($promedio <= 19) {
                            $descuento = $monto * 25.0 / 100;
                        } elseif ($promedio == 20) {
                            $descuento = $monto * 50.0 / 100;
                        }

                        $montoCancelado = $monto - $descuento;

                    ?>

                    <!-- Sección de presentación de resultados - PHP & HTML -->
                    <tr>
                        <td class="col_izq">Monto mensualidad: </td>
                        <td class="col_centro">
                            <?php echo 'S/. '.number_format($monto,2,'.',''); ?>
                        </td>
                        <td class="col_izq"></td>
                    </tr>
                    <tr>
                        <td class="col_izq">Monto descuento: </td>
                        <td class="col_centro">
                            <?php echo 'S/. '.number_format($descuento,2,'.',''); ?>
                        </td>
                        <td class="col_izq"></td>
                    </tr>
                    <tr>
                        <td class="col_izq">Monto cancelado: </td>
                        <td class="col_centro">
                            <?php echo 'S/. '.number_format($montoCancelado,2,'.',''); ?>
                        </td>
                        <td class="col_izq"></td>
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