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

            if($registroMetodos->NuevoRegistro($registro)){
								$texto = "Gracias por registrarte en la Feria Virtual COVAO 2022.";
								$to = $correo;
								$title = "Feria Virtual 2022";
								$massage = '<img style="width: 30%; display: block; margin: 1em auto;" src="https://covao.org/wp-content/uploads/2021/07/covao-logo-1.png" alt="Logo"><br><b>'.$title.'</b><br><br>';
								$massage .= wordwrap($texto, 70, "\r\n");
								$cabeceras = 'From: COVAO' . "\r\n" .
								'Reply-To: hola' . "\r\n" .
								'X-Mailer: PHP/' . phpversion();
								$cabeceras .= 'MIME-Version: 1.0' . "\r\n";
								$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

								mail($to, $title, $massage, $cabeceras);
								header("Location: index.php?controlador=Index&accion=Main");
						}
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
