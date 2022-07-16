<?php
    class Admin{
        private $id;
        private $nombre;
        private $apellido;
        private $correo;
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
    
        public function getApellido(){
            return $this->apellido;
        }
    
        public function setApellido($apellido1){
            $this->apellido = $apellido1;
        }
    
        public function getCorreo(){
            return $this->correo;
        }
    
        public function setCorreo($correo){
            $this->correo = $correo;
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
