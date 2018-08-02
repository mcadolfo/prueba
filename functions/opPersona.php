<?php
require_once 'persona_e.php';

$person = new Persona('adolfo','natera','San Felix');
$personas[]=array();

for ($i = 0; $i<10;$i++){
  $personas[$i] = new Persona('nombre'.$i,'apellido'.$i,'direccion'.$i);
}

//echo count($personas).'<br>';
for ($i = 0; $i<count($personas);$i++){
    $persona = $personas[$i];
//    echo $persona->getNombre().'<br>';
    $persona->agregar();
  }
  

?>