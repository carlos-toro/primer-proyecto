<?php
    require_once "modelo/conexion.php";
    class formulario{
        static function registrar(){
            if(isset($_POST["regname"])){
                $tabla="users";
                $datos=array("name"=>$_POST["regname"],"pass"=>$_POST["regpass"],
                "correo"=>$_POST["regemail"]);
                $stmt=conexion::llamar_conexion()->prepare("insert into $tabla 
                (name, correo, password) values (:name, :correo, :pass)");
                var_dump($datos);
                $stmt->bindParam(":name",$datos["name"],PDO::PARAM_STR);
                $stmt->bindParam(":correo",$datos["correo"],PDO::PARAM_STR);
                $stmt->bindParam(":pass",$datos["pass"],PDO::PARAM_STR);
                if($stmt->execute()){
                    return "si";
                    $_SESSION["sesion"]="ok";
                }
                else
                    return "no";
            }
        }
        static function leerdatos(){
                $tabla="users";
                $stmt=conexion::llamar_conexion()->prepare("select * from $tabla");
                $stmt->execute();
                return $stmt->fetchAll();
            
        }
        static function buscar(){
            if(isset($_GET["id"])){
                $tabla="users";
                $datos=array("id"=>$_GET["id"]);
                $stmt=conexion::llamar_conexion()->prepare("select * from $tabla where id=:id");
                var_dump($datos);
                $stmt->bindParam(":id",$datos["id"],PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch();
            }
        }
        static function actualizar(){
            if(isset($_POST["actname"])){
                $tabla="users";
                $datos=array("id"=>$_POST["id"],"name"=>$_POST["actname"],
                "pass"=>$_POST["actpass"]);
                $stmt=conexion::llamar_conexion()->prepare("update $tabla set 
                name=:name, password=:pass where id=:id");
                var_dump($datos);
                $stmt->bindParam(":name",$datos["name"],PDO::PARAM_STR);
                $stmt->bindParam(":pass",$datos["pass"],PDO::PARAM_STR);
                $stmt->bindParam(":id",$datos["id"],PDO::PARAM_INT);
                if($stmt->execute())
                    return "si";
                else
                    return "no";
            }
        }
        static function eliminar(){
            if(isset($_POST["eliid"])){
            $tabla="users";
            $datos=array("id"=>$_POST["eliid"]);
            $stmt=conexion::llamar_conexion()->prepare("delete from $tabla
            where id=:id");
            $stmt->bindParam(":id",$datos["id"],PDO::PARAM_INT);    
            if($stmt->execute())
                    return "si";
                else
                    return "no";
            }
        }
        function iniciar_sesion(){
            if(isset($_POST["inipass"])){
                $tabla="users";
                $datos=array("email"=>$_POST["iniemail"],"pass"=>$_POST["inipass"]);
                $stmt=conexion::llamar_conexion()->prepare("select * from $tabla where password=:pass");
                var_dump($datos);
                $stmt->bindParam(":pass",$datos["pass"],PDO::PARAM_INT);
                $stmt->execute();
                $respuesta= $stmt->fetch();
                var_dump($respuesta);
                if($respuesta==false){
                    echo '<script> 
                    window.location="index.php?paginas=CRUD";
                    </script>';

                }
                if($respuesta["correo"]==$datos["email"] && $respuesta["password"]==$datos["pass"]){
                    $_SESSION["sesion"]="ok";
                        echo '<script> 
                            window.location="index.php?paginas=CRUD";
                            </script>';
                }
            }
        }
    }