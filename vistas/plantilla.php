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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form/style.css">
</head>
<body>
    <header>
    <h1 class="centered-absolute">E-COMMERS</h1>
        <ul class="nav nav-pills justify-content-center">
            <li><a class="dropdown-item" href="index.php?paginas=iniciar sesion">iniciar sesion</a></li>
            <li><a class="dropdown-item" href="index.php?paginas=registrarCompras">registrar compras</a></li>
            <li><a class="dropdown-item" href="index.php?paginas=registrarProductos">registrar productos</a></li>
            <li><a class="dropdown-item" href="index.php?paginas=CRUD">CRUD</a></li>
        
        </ul>
    </header>

  
    <section>
        <?php
            $paginas=new controlador();
            $paginas->ctrpaginas();

        ?>
    </section>
</body>
</html>