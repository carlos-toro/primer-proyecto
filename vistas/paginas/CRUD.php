<?php
    if(!isset($_SESSION["sesion"]))
        echo '<script> 
        window.location="index.php?paginas=iniciar sesion";
        </script>';
    else{
        if($_SESSION["sesion"]!="ok"){
            echo '<script> 
                window.location="index.php?paginas=iniciar sesion";
                </script>';
        }
    }
    $usuarios=formulario::leerdatos();
?>
<h2>CRUD</h2>
<a href="index.php?paginas=salir">salir</a>
<table  border="solid" width="500px">
    <thead>
        <th>id</th>
        <th>nombre</th>
        <th>password</th>
        <th>datos</th>
    </thead>
    <tbody>
    <?php foreach($usuarios as $key => $values): ?>
        <tr>
            <td><?php echo $values["id"]; ?></td>
            <td><?php echo $values["name"]; ?></td>
            <td><?php echo $values["correo"]; ?></td>
            <td><?php echo $values["password"]; ?></td>
            <td>
                <a href="index.php?paginas=actualizar&id=<?php echo $values["id"]; ?>">actualizar</a>
                <form action="" method="post">
                    <input type="hidden" name="eliid" value="<?php echo $values["id"]; ?>">
                    <input type="submit" value="eliminar">
                    <?php
                        $eliminar=formulario::eliminar();
                        if($eliminar=="si"){
                            echo '<script> 
                                window.location="index.php?paginas=CRUD";
                            </script>';
                        }
                    ?>
                </form>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>