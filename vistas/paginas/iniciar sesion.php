<h2>iniciar sesion</h2>
<form action="" method="post">
    <label for="name">correo</label>
    <input type="text" name="iniemail" id="">
    <label for="pass">contraseña</label>
    <input type="text" name="inipass" id="">
    <input type="submit" value="iniciar sesion ">
    <?php
        $sesion = new formulario();
        $sesion->iniciar_sesion();  
    ?>
</form>

<h2>Registrar usuario</h2>
<br>
<br>
<form action="" method="post">
    <label for="name">nombre</label>
    <input type="text" name="regname" id="">
    <label for="email">email</label>
    <input type="text" name="regemail" id="">
    <label for="pass">contraseña</label>
    <input type="text" name="regpass" id="">
    <input type="submit" value="registrar">
    <?php
        $registrar = formulario::registrar();
        if($registrar=="si"){
            echo '<script> 
                window.location="index.php?paginas=CRUD";
                </script>';
        }
    ?>
</form>