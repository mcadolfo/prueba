<?php session_start();

require 'conexion.php';

$mensaje = '';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario_log = $_POST['usuario_log'];
    $clave_log=$_POST['clave_log'];//encriptar para comparar
    $mysql = conectar();
    $sql="select * from usuario where usuario='$usuario_log' AND clave='$clave_log'";
    $resultado=$mysql->query($sql);

    if($resultado->num_rows>0){
        $fila = $resultado->fetch_assoc();
          $infoUsuario = $fila['nombre'];//GENERAR LA VARIABLE DE SESIÓN
          $_SESSION['usuario']=$infoUsuario;
        header("Location: ./views/principal.php");
    }else{
        $mensaje='<div class="container alert alert-danger alert-dismissable text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Datos <strong>incorrectos</strong>, intente nuevamente.</div>';}
}

?>