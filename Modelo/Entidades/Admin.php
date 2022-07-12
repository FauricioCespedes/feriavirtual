<?php
    class Admin{
        private $id;
        private $nombre;
        private $apellido1;
        private $apellido2;
        private $correo;
        private $cedula;
        private $contrasena;
        private $estado;

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNombre(){
            return $this->nombre;
        }
    
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    
        public function getApellido1(){
            return $this->apellido1;
        }
    
        public function setApellido1($apellido1){
            $this->apellido1 = $apellido1;
        }
    
        public function getApellido2(){
            return $this->apellido2;
        }
    
        public function setApellido2($apellido2){
            $this->apellido2 = $apellido2;
        }
    
        public function getCorreo(){
            return $this->correo;
        }
    
        public function setCorreo($correo){
            $this->correo = $correo;
        }
    
        public function getCedula(){
            return $this->cedula;
        }
    
        public function setCedula($cedula){
            $this->cedula = $cedula;
        }
    
        public function getContrasena(){
            return $this->contrasena;
        }
    
        public function setContrasena($contrasena){
            $this->contrasena = $contrasena;
        }
    
        public function getEstado(){
            return $this->estado;
        }
    
        public function setEstado($estado){
            $this->estado = $estado;
        }
    }