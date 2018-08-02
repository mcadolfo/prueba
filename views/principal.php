<?php session_start();

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
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="personas.php">Personas</a>
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

    
        <!-- Main jumbotron for a primary marketing message or call to action -->
       <div class="jumbotron">
          <div class="container">
            <h1 class="display-5">Bienvenido, <?php echo $nombreUsuario; ?></h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
          </div>
        </div>
    
       <!-- <div class="container">          
          <div class="row">
            <div class="col-md-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
           </div>
            <div class="col-md-4">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>
    
          <footer>
            <p>&copy; 2016 Company, Inc.</p>
          </footer>
        </div> --><!-- /container -->
    
    
        <script src="../jquery/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
      </body>
</html>
        