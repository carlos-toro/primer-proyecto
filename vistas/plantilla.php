<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="index.php?paginas=iniciar sesion">iniciar sesion</a>
        <a href="index.php?paginas=registrarCompras">registrar compras</a>
        <a href="index.php?paginas=registrarProductos">registrar productos</a>
        <a href="index.php?paginas=CRUD">CRUD</a>
    </header>
    <section>
        <?php
            $paginas=new controlador();
            $paginas->ctrpaginas();

        ?>
    </section>
</body>
</html>