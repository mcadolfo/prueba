<?php
//conexion con la base de datos

function conectar() {
    
    //Cambia por los detalles de tu base datos
    $dbserver = "localhost";
    $dbuser = "root";
    $password = "";
    $dbname = "prueba";
    
    $database = new mysqli($dbserver, $dbuser, $password, $dbname);
    
    if($database->connect_errno) {
        die("No se pudo conectar a la base de datos");
    }
    else{
        //$formato = "Conexión exitosa ".$database->host_info;
        //echo $formato;
        $formato = "Conexión exitosa %s";
       // printf($formato,$database->host_info);
    }
    return $database;
}

?>