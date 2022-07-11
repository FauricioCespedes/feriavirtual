<?php
    class Registro{
        private $nombre;
        private $apellido;
        private $correo;
        private $cedula;
        private $id;
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
    
        public function setApellido($apellido){
            $this->apellido = $apellido;
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
        public function getEstado(){
            return $this->estado;
        }
    
        public function setEstado($estado){
            $this->estado = $estado;
        }

    }