<?php
session_start();
require_once 'conexion.php';

if (!isset($_SESSION['usuario'])){
   header('Location: ../inicio.php');
}else{
   $nombreUsuario= $_SESSION['usuario'];
}

$op = $_POST['op'];

if($op=="agregar"){//Agregar un Usuario

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];

    $sql = "insert into persona (id,nombre,apellido,direccion) values (0,'$nombre','$apellido','$direccion')";
    //echo $sql;
    $mysql = conectar();
    echo $resultado = $mysql->query($sql);
    $mysql->close();

}else if($op=="eliminar"){//Eliminar un Usuario

    $id = $_POST['id'];
    
    $sql = "delete from persona where id=$id";;
    //echo $sql;
    $mysql = conectar();
    echo $resultado = $mysql->query($sql);
    $mysql->close();
}else if($op=="actualizar"){//Actualizar una Persona
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    
    $sql = "update persona set nombre='$nombre',apellido='$apellido',direccion='$direccion' where id =$id";
        $mysql = conectar();
    
        echo $mysql->query($sql);
        $mysql->close();
}
?>