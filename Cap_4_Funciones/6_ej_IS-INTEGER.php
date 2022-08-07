<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="5_ej_empty.css">
    <title>Document</title>
</head>

<?php
// Validamos que los campos no esten vacios
error_reporting(0);
/* Capturando valores */
$usuario = $_POST['txtUsuario'];
$nota = $_POST['txtNota'];
$clave = $_POST['txtClave'];

/* Validando el usuario */
$menUsuario = '';
$menClave = '';

if (empty($usuario)) {
    $menUsuario = 'Ingrese nombre del usuario';
}

if (empty($nota)) {
    $menNota = 'Ingrese la nota de examen';
}

if (empty($clave)) {
    $menClave = 'Ingrese clave';
}
echo $nota;

if (!is_numeric($nota)) {
    $menNota = 'Ingrese un número válido';
} elseif ($nota < 0 || $nota > 20) {
    $menNota = 'El rango de la nota es de 0 a 20';
}

?>

<body>

    <head>
        <h2 id="centrado">Validación usando IS_INTEGER</h2>
        <img src="img/cuestionarios-formularios.jpg" alt="">
    </head>
    <main>
        <section>
            <form action="6_ej_IS-INTEGER.php" method="post" name="frmLogin">
                <table>
                    <tr>
                        <td class="col_der">Ingrese usuario: </td>
                        <td class="col_cent">
                            <input type="text" name="txtUsuario" value="<?php echo $_POST['txtUsuario'] ?>" id="">
                        </td>
                        <td class="col_izq">
                            <?php echo $menUsuario ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der">Ingrese Nota: </td>
                        <td class="col_cent">
                            <input type="text" name="txtNota" value="<?php echo $_POST['txtNota'] ?>">
                        </td>
                        <td class="col_izq">
                            <?php echo $menNota ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der">Ingrese Clave: </td>
                        <td class="col_cent">
                            <input type="password" name="txtClave" value="<?php echo $_POST['txtClave'] ?>">
                        </td>
                        <td class="col_izq">
                            <?php echo $menClave ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col_der"></td>
                        <td class="col_cent">
                            <input type="submit" value="Validar">
                        </td>
                        <td class="col_izq"></td>
                    </tr>
                </table>
            </form>
        </section>
    </main>

</body>

</html>