<?php
    $usuarios=formulario::buscar();
    var_dump($usuarios);
?>
<h2>actualizar</h2>
<form action="" method="post">
    <label for="name">nombre</label>
    <input type="text" name="actname" id="" value="<?php echo $usuarios["name"]; ?>">
    <label for="pass">contraseña</label>
    <input type="text" name="actpass" id="" value="<?php echo $usuarios["password"]; ?>">
    <input type="hidden" name="id" value="<?php echo $usuarios["id"]; ?>">
    <input type="submit" value="actualizar">
    <?php
        $actualizar = formulario::actualizar();
        if($actualizar=="si"){
            echo '<script> 
            window.location="index.php?paginas=CRUD";
            </script>';
        }
    ?>
</form>