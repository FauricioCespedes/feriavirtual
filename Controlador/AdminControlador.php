<?php

    require_once "./Modelo/Conexion.php";
    require_once "./Modelo/Metodos/AdminMetodos.php";
    require_once "./Modelo/Entidades/Admin.php";
    session_start();

    class AdminControlador {

         function Login(){
            $admin = new Admin();
            $adminMetodos = new AdminMetodos();

            $contrasena = $_POST['contrasena'];
            $correo = $_POST['correo'];

            $admin = $adminMetodos->LogIn($correo);

            if($admin != null){
                if($admin->getContrasena() == $contrasena && $admin->getCorreo() == $correo){
                    $_SESSION['Estado'] = 1;
                    header("Location: index.php?controlador=Registro&accion=VistaRegistro");
                }
                else{
                    $_SESSION['Estado'] = 0;
                    header("Location: index.php?controlador=Index&accion=Login");
                }
            }
            else{
                $_SESSION['Estado'] = 0;
                header("Location: index.php?controlador=Index&accion=Login");
            }
        //index.php?controlador=Admin&accion=Login
        }
    }