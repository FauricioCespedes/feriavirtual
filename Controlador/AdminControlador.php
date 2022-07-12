<?php

    require_once "./Modelo/Conexion.php";
    require_once "./Modelo/Metodos/AdminMetodos.php";
    require_once "./Modelo/Entidades/Admin.php";

    class AdminControlador {

         function Login(){

            $admin = new Admin();
            $adminMetodos = new AdminMetodos();

            $contrasena = $_POST['contrasena'];
            $correo = $_POST['correo'];

            $admin = $adminMetodos->LogIn($correo);

            if($admin != null){
                if($admin->getContrasena() == $contrasena && $admin->getCorreo() == $correo){
                    if($admin->getEstado()==1){
                        session_start();
                        $_SESSION['acceso'] = 1;
                        header("Location: index.php?controlador=Registro&accion=VistaRegistro");
                    }else if($admin->getEstado()==2){
                        session_start();
                        $_SESSION['acceso'] = 2;
                        header("Location: index.php?controlador=Registro&accion=VistaRegistro");
                    }else{
                        $_SESSION['acceso'] = 0;
                        header("Location: index.php?controlador=Index&accion=Login");
                    }
                }
                else{
                    header("Location: index.php?controlador=Index&accion=Login");
                }
            }
            else{
                header("Location: index.php?controlador=Index&accion=Login");
            }
        //index.php?controlador=Admin&accion=Login
        }
    }