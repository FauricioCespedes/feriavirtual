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

		function BuscarTodos(){
				$todosAdmin=array();
				$conexion = new Conexion();

				$sql = "SELECT * FROM `ADMIN`";
				$resultado = $conexion->Ejecutar($sql);
						if(mysqli_num_rows($resultado)>0){
								while($fila=$resultado->fetch_assoc()){
										$r = new Admin();
										$r->setId($fila["ID"]);
										$r->setNombre($fila["NOMBRE"]);
										$r->setApellido($fila["APELLIDO"]);
										$r->setCorreo($fila["CORREO"]);
										$r->setContrasena($fila["CONTRASENA"]);
										$r->setEstado($fila["ESTADO"]);
										$todosAdmin[]=$r;
								}
						} 
						else{
								$todosAdmin = null;
						}
						$conexion->Cerrar();
						return $todosAdmin;
				}

				function NuevoAdmin(Admin $admin){
						$est = false;
						$conexion = new Conexion();

						$sql = "INSERT INTO `ADMIN`(`NOMBRE`,`APELLIDO`,`CORREO`, `CONTRASENA`,`ESTADO`)
						VALUES('".$admin->getNombre()."',
									'".$admin->getApellido()."',
									'".$admin->getCorreo()."',
									'".$admin->getContrasena()."',
									'".$admin->getEstado()."')";

						if($conexion->Ejecutar($sql)){
								$est = true;
						}$conexion->Cerrar();
						return $est;
				}

				function ModificarAdmin(Admin $admin){
						$est = false;
						$conexion = new Conexion();

						$sql = "UPDATE Admin SET NOMBRE='".$admin->getNombre()."',APELLIDO='".$admin->getApellido()."',CORREO='".$admin->getCorreo().
						"',CONTRASENA='".$admin->getContrasena()."',ESTADO='".$admin->getEstado()."'Where `ID` =".$admin->getId();

						if($conexion ->Ejecutar($sql)){
								$est = true;
						}
						$conexion->Cerrar();
						return $est;
				}

				function EliminarAdmin(Admin $admin){
						$est = false;
						$conexion = new Conexion();

						$sql = "UPDATE ADMIN SET ESTADO='0'Where `ID` =".$admin->getId();

						if($conexion ->Ejecutar($sql)){
								$est = true;
						}
						$conexion->Cerrar();
						return $est;
				}

				function BuscarAdmin($id){
						$admin = new Admin();
						$conexion = new Conexion();

						$sql = "SELECT *  FROM `ADMIN` WHERE `ID` = '$id'";
						$resultado=$conexion->Ejecutar($sql);

						if(mysqli_num_rows($resultado)>0){
								while ($fila = $resultado->fetch_assoc()){
										$admin->setId($fila["ID"]);
										$admin->setNombre($fila["NOMBRE"]);
										$admin->setApellido($fila["APELLIDO"]);
										$admin->setCorreo($fila["CORREO"]);
										$admin->setContrasena($fila["CONTRASENA"]);
										$admin->setEstado($fila["ESTADO"]);
								}
						}
						else{
								$admin=null;
						}
						$conexion->Cerrar();
						return $admin;
				}
}
