<?php
require_once 'persona_e.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form class="form-control" action="#">
        <label>Nombre</label>
        <input type="text" id="nombre" class="form-control input-sm"></input>
        <label>Apellido</label>
        <input type="text" id="apellido" class="form-control input-sm"></input>
        <label>Dirección</label>
        <input type="text" id="direccion" class="form-control input-sm"></input>
        <button type="button" class="btn btn-primary" id="InsPersona" onclick="agregar()">Guardar</button>            
        </form>
    </div>
    <div>

    </div>

    <div class="container">
         <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-block" id="MyDiv">
                <h3 class="card-title">Elementos</h3>
                <p id="MyP" class="card-text"></p>

              </div>
            </div>
          </div>

    </div>

    <script src="../jquery/jquery-3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/funciones.js"></script>     
</body>
</html>