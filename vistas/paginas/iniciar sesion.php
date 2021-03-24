
<div class="global-container">
    <div class="card login-form" >
        <div class="card-body">
        <h2>iniciar sesion</h2>
            <form action="" class="form-inline" method="post">
            <div class="form-group">
                <label for="name" class="sr-only">correo</label>
                <input type="text" class="form-control" name="iniemail" id="">
            </div>
            <div class="form-group">
                <label for="pass" class="sr-only">contraseña</label>
                <input type="text" class="form-control" name="inipass" id="">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="iniciar sesion ">
            <?php
                $sesion = new formulario();
                $sesion->iniciar_sesion();  
            ?>
            </form>
        </div>
    </div>
</div>
<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
        <h2>Registrar usuario</h2>
        <form action="" class="form-inline" method="post">
            <div class="form-group">
                <label for="name" class="sr-only">nombre</label>
                <input type="text" class="form-control" name="regname" id="">
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">email</label>
                <input type="text" class="form-control" name="regemail" id="">
            </div>
            <div class="form-group">
                <label for="pass" class="sr-only">contraseña</label>
                <input type="text" class="form-control" name="regpass" id="">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="registrar">
            <?php
                $registrar = formulario::registrar();
                if($registrar=="si"){
                    echo '<script> 
                        window.location="index.php?paginas=CRUD";
                        </script>';
                }
            ?>
        </form>
        </div>
    </div>
</div>





