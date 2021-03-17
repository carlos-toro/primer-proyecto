<?php
    class tablas{
        static function registrar_compra(){
            if(isset($_POST["id_users"])){

                $fichero=$_FILES["imagen"];

                
                $car_imagen=array("imagen"=>($_FILES['imagen']['name']));
                $imagen=strtolower(end($car_imagen));
                $ruta ="imagenes/".$imagen;
                move_uploaded_file($fichero["tmp_name"],$ruta);

                $datos=array("id_users"=>$_POST["id_users"],"id_prod"=>$_POST["id_prod"],
                "precio"=>$_POST["precio"]);




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
    }