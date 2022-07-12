<?php 
    class AdminMetodos{
        function LogIn($correo){
            $conexion = new Conexion();
            $admin = new Admin();

            $sql = "SELECT * FROM `ADMIN` WHERE `CORREO` = '$correo'";
            $resultado = $conexion->Ejecutar($sql);

            if(mysqli_num_rows($resultado)>0){
                while($fila=$resultado->fetch_assoc()){
                    $admin->setCorreo($fila["CORREO"]);
                    $admin->setContrasena($fila["CONTRASENA"]);
                    $admin->setEstado($fila["ESTADO"]);
                }
            }
            else{
                $admin = null;
            }
            $conexion->Cerrar();
            return $admin;
        }
    }