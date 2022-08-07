<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="3_pagina_dinamica.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h3>Listado de Casos Desarrollados</h3>
    </header>
    <main>
        <section>
            <?php
            for ($i = 1; $i <= 7; $i++) {
            ?>
                <p>Casos <?php echo $i; ?> </p>
            <?php
            }
            ?>
        </section>
    </main>

    <footer>
        <h4>Todos los derechos reservados &copy;2021 Lic. Manuel Torres</h4>
    </footer>
</body>

</html>