<?php require './functions/login.php';?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>Inicio</title>
        
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body class="body-log">
    <section class="login-block">
        <div class="container container-new ">
            <div class="row">
                <div class="col-md-4 login-sec">
                   <h2 class="text-center">Inicio de Sesión</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="login-form" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
                            <input type="text" class="form-control" placeholder="" name="usuario_log" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
                            <input type="password" class="form-control" placeholder="" name="clave_log" required>
                        </div>
                        <div class="text-center">                        
                            <div><?php echo $mensaje; ?> </div>
                            <button type="submit" class="btn btn-login" name="loguearse" value="LOGIN">Entrar</button>
                        </div>
                    </form>
                    <div class="copy-text">Created with by <a href="http://grafreez.com">Grafreez.com</a></div>
                </div>
                <div class="col-md-8 banner-sec">
                    <div class="banner-text">
                        <h2>This is Heaven</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>