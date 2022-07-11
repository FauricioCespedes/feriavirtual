<?php
    require_once "./Modelo/Conexion.php";
    require_once "./Modelo/Metodos/RegistroMetodos.php";
    require_once "./Modelo/Entidades/Registro.php";

    class RegistroControlador {

        public function CrearRegistro(){
            $registro = new Registro();
            $registroMetodos = new RegistroMetodos();

            $nombre = $_POST['iptNombre'];
            $cedula = $_POST['iptCedula'];
            $apellido = $_POST['iptApellido'];
            $correo = $_POST['iptCorreo'];

            $registro->setNombre($nombre);
            $registro->setCedula($cedula);
            $registro->setApellido($apellido);
            $registro->setCorreo($correo);

            if($registroMetodos->NuevoRegistro($registro))
                header("Location: ");
            else
                header("Location: ");
        //index.php?controlador=Registro&accion=CrearRegistro
        }
        public function ModificarRegistro(){
            $registro = new Registro();
            $registroMetodos = new RegistroMetodos();

            $id = $_REQUEST['id'];
            $nombre = $_POST['nombre'];
            $cedula = $_POST['cedula'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
    
    
            $registro->setId($id);
            $registro->setCedula($cedula);
            $registro->setNombre($nombre);
            $registro->setApellido($apellido);
            $registro->setCorreo($correo);
    
            if($registroMetodos->ModificarRegistro($registro))
                header("Location: ");
            else
                header("Location: ");
        }
        
        public function ModificarRegistro2(){
            $registro = new Registro();
            $registroMetodos = new RegistroMetodos();
           
            if(isset($_REQUEST['id']))
            {
                $id=$_REQUEST['id'];
                $registro=$registroMetodos->BuscarRegistro($id);
                require_once "";
            }else {
                header("Location: ");
            }
            
        }



    }