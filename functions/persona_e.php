<?php
require_once 'conexion.php';
    class Persona
        {
            private $nombre;
            private $apellido;
            private $direccion;

            public function __construct($nombrex, $apellidox, $direccionx){
             $this->nombre = $nombrex;
             $this->apellido = $apellidox;
             $this->direccion = $direccionx;
            }

            public function getNombre(){
                return $this->nombre;
            }

            public function setNombre($nombre){$this->nombre = $nombre;}

            public function agregar(){ 
                $sql = "insert into persona (id,nombre,apellido,direccion) values (0,'$this->nombre','$this->apellido','$this->direccion')";
                $mysql = conectar();
                $resultado = $mysql->query($sql);
                $mysql->close();
                return $resultado;
            }

        }
    

?>