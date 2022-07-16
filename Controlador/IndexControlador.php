<?php
    class IndexControlador {
        
        public function Main(){
            require_once "./Vista/Main.php";
        //index.php?controlador=Index&accion=Main

        }
        public function Registro(){
            require_once "./Vista/Registro.php";
        //index.php?controlador=Index&accion=Registro
        }
        public function Login(){
            require_once "./Vista/Login.php";
        //index.php?controlador=Index&accion=Login
        }
        public function Salir(){
            require_once "./Vista/Login.php";
						session_start();
						session_destroy();
        //index.php?controlador=Index&accion=Login
        }
    }
