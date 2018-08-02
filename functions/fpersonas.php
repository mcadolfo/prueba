<?php
//archivo de conexion
require_once "conexion.php";

function Mostrar(){
    $mysql = conectar();
    $sql = "Select * from persona";
    if($resultado = $mysql->query($sql)){
        $tabla = "<table class='table' id='tabla' >"; 
            $tabla .="<thead class='theadN'>";
            $tabla .="<tr>";
              $tabla .="<th id='id'> ID </td>";
              $tabla .="<th id='nombre'> NOMBRE </td>";
              $tabla .="<th id='apellido'> APELLIDO </td>";
              $tabla .="<th id='direccion'> DIRECCIÓN </td>";
              $tabla .= "<td></td>";
              $tabla .= "<td></td>";
             // $tabla .= "<td></td>";
            $tabla .="</tr>";
            $tabla .="</thead>";
            $tabla .="<tbody>";
            while($fila = $resultado->fetch_assoc()){
                $tabla .="<tr class='rowN'>";
                   $tabla .= "<td>".$fila["id"]."</td>";
                   $tabla .= "<td>".$fila["nombre"]."</td>";
                   $tabla .= "<td>".$fila["apellido"]."</td>";
                   $tabla .= "<td>".$fila["direccion"]."</td>"; 
                   $cadena = $fila["id"]."||".$fila["nombre"]."||".$fila["apellido"]."||".$fila["direccion"];
                   $tabla .= "<td><button class='btn btn-outline-primary' data-toggle='modal' data-target='#ModalActualizar' onclick=\"agregaform('$cadena')\"><img src='../img/edit.png' alt='editar'/> </button></td>";
                   $tabla .= "<td><button class='btn btn-outline-danger' onclick=\"eliminaPersona('".$fila["id"]."')\"><img src='../img/drop.png'/> </button></td>";
                //   $tabla .= "<td></td>";
                
                $tabla .="</tr>";                
            }
            $tabla .="</tbody>";
        $tabla .= "</table>";
        printf($tabla);
    } 
    else{
        $respuesta = "No se pudo ejecutar la consulta";
    }
    $resultado->free();
    $mysql->close();
}
?>