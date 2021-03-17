<?php
    class controlador{
        function mostrar(){
            include "vistas/plantilla.php";
        }
        function ctrpaginas(){
            if(isset($_GET["paginas"])){
                $pagina=$_GET["paginas"];
            }else 
                $pagina="iniciar sesion";
            $respuesta=modelo::modpaginas($pagina);
            include $respuesta;
        }
    }