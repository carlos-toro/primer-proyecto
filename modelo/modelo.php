<?php
    class modelo{
        static function modpaginas($pagina){
            if($pagina=="CRUD"||$pagina=="registrarCompras"
            ||$pagina=="registrarUsuarios"||$pagina=="registrarProductos"||$pagina=="actualizar"||$pagina=="salir")
                $respuesta="vistas/paginas/".$pagina.".php";
            else if($pagina=="iniciar sesion"){
                $respuesta="vistas/paginas/iniciar sesion.php";
            }
            else 
                $respuesta="vistas/paginas/iniciar sesion.php";
            return $respuesta;
        }
    }
    