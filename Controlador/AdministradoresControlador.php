<?php
require_once "./Modelo/Conexion.php";
require_once "./Modelo/Metodos/AdminMetodos.php";
require_once "./Modelo/Entidades/Admin.php";

class AdministradoresControlador {

		public function VistaAdmin(){
				$adminMetodos = new AdminMetodos();
				$todosAdmin = $adminMetodos->BuscarTodos();

				require_once "./Vista/VistaAdmin.php";
				 //index.php?controlador=Admin&accion=VistaAdmin
		}

		public function VistaAdmin2(){
				$adminMetodos = new AdminMetodos();
				$todosAdmin = $adminMetodos->BuscarTodos();
				require_once "./Vista/admin/AdministrarAdmins.php";
		}

		public function CrearAdmin(){
				$admin = new Admin();
				$adminMetodos = new AdminMetodos();

				$nombre = $_POST['iptNombre'];
				$contrasena = $_POST['iptCedula'];
				$apellido = $_POST['iptApellido'];
				$correo = $_POST['iptCorreo'];

				$admin->setNombre($nombre);
				$admin->setApellido($apellido);
				$admin->setCorreo($correo);
				$admin->setContrasena($contrasena);
				$admin->setEstado(1);

				if($adminMetodos->NuevoAdmin($admin)){
						header("Location: index.php?controlador=Index&accion=Main");
				}
				else
						header("Location: index.php?controlador=Index&accion=Admin");
		//index.php?controlador=Admin&accion=CrearAdmin
		}
		public function ModificarAdmin(){
				$admin = new Admin();
				$adminMetodos = new AdminMetodos();

				$id = $_POST['id'];
				$nombre = $_POST['nombre'];
				$contrasena = $_POST['contrasena'];
				$apellido = $_POST['apellido'];
				$correo = $_POST['correo'];
				$estado = $_POST['estado'];



				$admin->setId($id);
				$admin->setContrasena($contrasena);
				$admin->setNombre($nombre);
				$admin->setApellido($apellido);
				$admin->setCorreo($correo);
				$admin->setEstado($estado);

				if($adminMetodos->ModificarAdmin($admin))
						header("Location: index.php?controlador=Administradores&accion=VistaAdmin2");
				else
						header("Location: index.php?controlador=Administradores&accion=VistaAdmin2");
		//index.php?controlador=Admin&accion=ModificarAdmin
		}
		
		public function ModificarAdmin2(){
				$admin = new Admin();
				$adminMetodos = new AdminMetodos();
			 
				if(isset($_REQUEST['id']))
				{
						$id=$_REQUEST['id'];    
						$admin=$adminMetodos->BuscarAdmin($id);
						//$admin->setEstado(0);
						require_once "./Vista/admin/ActualizarAdmin.php";
				}else {
						header("Location: index.php?controlador=Admin&accion=VistaAdmin");
				}
		//index.php?controlador=Admin&accion=ModificarAdmin2
		}

		public function EliminarAdmin(){
				$admin = new Admin();
				$adminMetodos = new AdminMetodos();
			 
				if(isset($_REQUEST['id']))
				{
						$id=$_REQUEST['id'];
						$admin=$adminMetodos->BuscarAdmin($id);
						$admin->setEstado(0);

						if($adminMetodos->ModificarAdmin($admin))
						header("Location: index.php?controlador=Admin&accion=VistaAdmin");
				}else {
						header("Location: index.php?controlador=Admin&accion=VistaAdmin");
				}
		//index.php?controlador=Registro&accion=EliminarRegistro
		}
}
