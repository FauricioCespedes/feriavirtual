<?php
    class RegistroMetodos{

        function BuscarTodos(){
            $todosRegistro=array();
            $conexion = new Conexion();
    
            $sql = "SELECT * FROM `REGISTRO`";
            $resultado = $conexion->Ejecutar($sql);
                if(mysqli_num_rows($resultado)>0){
                    while($fila=$resultado->fetch_assoc()){
                        $r = new Registro();
                        $r->setId($fila["ID"]);
                        $r->setNombre($fila["NOMBRE"]);
                        $r->setApellido($fila["APELLIDO"]);
                        $r->setCorreo($fila["CORREO"]);
                        $r->setCedula($fila["CEDULA"]);
                        $r->setEstado($fila["ESTADO"]);
                        $todosRegistro[]=$r;
                    }
                } 
                else{
                    $todosRegistro = null;
                }
                $conexion->Cerrar();
                return $todosRegistro;
            }
    
            function NuevoRegistro(Registro $registro){
                $est = false;
                $conexion = new Conexion();
    
                $sql = "INSERT INTO `REGISTRO`(`NOMBRE`,`APELLIDO`,`CORREO`, `CEDULA`,`ESTADO`)
                VALUES('".$registro->getNombre()."',
                      '".$registro->getApellido()."',
                      '".$registro->getCorreo()."',
                      '".$registro->getCedula()."',
                      '".$registro->getEstado()."')";
    
                if($conexion->Ejecutar($sql)){
                    $est = true;
                }$conexion->Cerrar();
                return $est;
            }
    
            function ModificarRegistro(Registro $registro){
                $est = false;
                $conexion = new Conexion();
    
                $sql = "UPDATE Registro SET NOMBRE='".$registro->getNombre()."',APELLIDO='".$registro->getApellido()."',CORREO='".$registro->getCorreo().
                "',CEDULA='".$registro->getCedula()."',ESTADO='".$registro->getEstado()."'Where `ID` =".$registro->getId();
    
                if($conexion ->Ejecutar($sql)){
                    $est = true;
                }
                $conexion->Cerrar();
                return $est;
            }
    
            function EliminarRegistro(Registro $registro){
                $est = false;
                $conexion = new Conexion();
    
                $sql = "UPDATE REGISTRO SET ESTADO='0'Where `ID` =".$registro->getId();
    
                if($conexion ->Ejecutar($sql)){
                    $est = true;
                }
                $conexion->Cerrar();
                return $est;
            }
    
            function BuscarRegistro($id){
                $registro = new Registro();
                $conexion = new Conexion();
    
                $sql = "SELECT *  FROM `REGISTRO` WHERE `ID` = '$id'";
                $resultado=$conexion->Ejecutar($sql);
    
                if(mysqli_num_rows($resultado)>0){
                    while ($fila = $resultado->fetch_assoc()){
                        $registro->setId($fila["ID"]);
                        $registro->setNombre($fila["NOMBRE"]);
                        $registro->setApellido($fila["APELLIDO"]);
                        $registro->setCorreo($fila["CORREO"]);
                        $registro->setCedula($fila["CEDULA"]);
                        $registro->setEstado($fila["ESTADO"]);
                    }
                }
                else{
                    $registro=null;
                }
                $conexion->Cerrar();
                return $registro;
            }
    }
