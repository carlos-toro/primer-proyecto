<h2>registrar ventas</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label for="name">iduser</label>
    <input type="text" name="id_user" id="">
    <label for="email">idproducto</label>
    <input type="text" name="id_prod" id="">
    <label for="pass">precio</label>
    <input type="text" name="precio" id="">
    <label for="">imagen</label>
    <input type="file" name="imagen" id="">
    <input type="submit" value="registrar">
    <?php
        $registrar = tablas::registrar_compra();
        if($registrar=="si"){
            echo '<script> 
                window.location="index.php?paginas=CRUD";
                </script>';
        }
    ?>
</form>