<?php
    class Alumno
    {
        private $id;
        private $DUI;
        private $Nombre;
        private $Apellido;
        private $direccion;
        private $telefono;
        private $Sexo;
        private $Correo;
        private $FechaNacimiento;
        private $cargo;
        private $Edad;
        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }
