<?php session_start();
 require "../functions/fpersonas.php";

if (!isset($_SESSION['usuario'])){
	header('Location: ../inicio.php');
}else{
	$nombreUsuario= $_SESSION['usuario'];
}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
        
      <!--Barra de navegacion -->
        <div class="container">          
          <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"> Sitio Principal </a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="principal.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item  active">
                <a class="nav-link" href="#">Personas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>

              <ul class="navbar-nav">
              <li class="nav-item dropdown navbar-toggler-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $nombreUsuario;?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Configuración</a>
                  <a class="dropdown-item" href= "../functions/logout.php">Salir</a>                
                </div>
              </li>
              </ul>
              <!--<a href= "../functions/logout.php" class="btn btn-outline-info my-2 my-sm-0 navbar-toggler-right">Salir</a>-->           
            </div>                    
          </nav>           
        </div>
        <!--Fin Barra de Navegacion -->

        <div class="jumbotron">
            <div class="container">
              <h1 class="display-5">Listado de Personas</h1>
              <p>Aquí se visualiza el listado de las personas que se encuentran registradas.</p>
              <p><button type="button" class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#myModal">Agregar una Persona &raquo;</button></p>
            </div>
        </div>


<!-- Modal Insertar -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Nombre</label>
        <input type="text" id="nombre" class="form-control input-sm"></input>
        <label>Apellido</label>
        <input type="text" id="apellido" class="form-control input-sm"></input>
        <label>Dirección</label>
        <input type="text" id="direccion" class="form-control input-sm"></input>            
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>-->
        <button type="button" class="btn btn-primary" id="InsPersona">Guardar</button>
      </div>
    </div>
  </div>
  </div>
<!-- Fin Modal Insertar -->

<!-- Modal Actualizar -->
  <div class="modal fade" id="ModalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="idpersona" name="">
        <label>Nombre</label>
        <input type="text" id="nombreu" class="form-control input-sm"></input>
        <label>Apellido</label>
        <input type="text" id="apellidou" class="form-control input-sm"></input>
        <label>Dirección</label>
        <input type="text" id="direccionu" class="form-control input-sm"></input>            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="actualizarPersona">Guardar</button>
      </div>
    </div>
  </div>
  </div>    
<!-- Fin Modal Actualizar -->



       <div class="container wrapperT" >
          <div id="Mitabla">
            <?php Mostrar()?>
          </div>
        </div>
    
    
        <script src="../jquery/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/funciones.js"></script>     
    </body>
</html>


<script type="text/javascript">
    $(document).ready(function(){

       $('#InsPersona').click(function(){
        nombre = $('#nombre').val();
        apellido = $('#apellido').val();
        direccion = $('#direccion').val();
        agregardatos(nombre,apellido,direccion);
    });

    $('#actualizarPersona').click(function(){
          actualizaDatos();
        });


  });
</script>

