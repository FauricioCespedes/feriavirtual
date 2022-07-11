<?php
    require_once "./Modelo/Conexion.php";
    require_once "./Modelo/Metodos/RegistroMetodos.php";
    require_once "./Modelo/Entidades/Registro.php";

    class RegistroControlador {

        public function VistaRegistro(){
            $registroMetodos= new RegistroMetodos();
            $todosRegistro=$registroMetodos->BuscarTodos();

            require_once "./Vista/VistaRegistro.php";
             //index.php?controlador=Registro&accion=VistaRegistro
        }
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
            $registro->setEstado(1);

            if($registroMetodos->NuevoRegistro($registro))
                header("Location: index.php?controlador=Index&accion=Main");
            else
                header("Location: index.php?controlador=Index&accion=Registro");
        //index.php?controlador=Registro&accion=CrearRegistro
        }
        public function ModificarRegistro(){
            $registro = new Registro();
            $registroMetodos = new RegistroMetodos();

            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $cedula = $_POST['cedula'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $estado = $_POST['estado'];

    
    
            $registro->setId($id);
            $registro->setCedula($cedula);
            $registro->setNombre($nombre);
            $registro->setApellido($apellido);
            $registro->setCorreo($correo);
            $registro->setEstado($estado);
    
            if($registroMetodos->ModificarRegistro($registro))
                header("Location: index.php?controlador=Registro&accion=VistaRegistro");
            else
                header("Location: ./Vista/ActualizarRegistro.php");
        //index.php?controlador=Registro&accion=ModificarRegistro
        }
        
        public function ModificarRegistro2(){
            $registro = new Registro();
            $registroMetodos = new RegistroMetodos();
           
            if(isset($_REQUEST['id']))
            {
                $id=$_REQUEST['id'];    
                $registro=$registroMetodos->BuscarRegistro($id);
                //$registro->setEstado(0);
                require_once "./Vista/ActualizarRegistro.php";
            }else {
                header("Location: index.php?controlador=Registro&accion=VistaRegistro");
            }
        //index.php?controlador=Registro&accion=ModificarRegistro2
        }

        public function EliminarRegistro(){
            $registro = new Registro();
            $registroMetodos = new RegistroMetodos();
           
            if(isset($_REQUEST['id']))
            {
                $id=$_REQUEST['id'];
                $registro=$registroMetodos->BuscarRegistro($id);
                $registro->setEstado(0);

                if($registroMetodos->ModificarRegistro($registro))
                header("Location: index.php?controlador=Registro&accion=VistaRegistro");
            }else {
                header("Location: index.php?controlador=Registro&accion=VistaRegistro");
            }
        //index.php?controlador=Registro&accion=EliminarRegistro
        }




    }