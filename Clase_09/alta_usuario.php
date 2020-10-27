<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir y codigo PHP -->
    <?php 
    include('includes/conexion.php'); 

    $mensaje = 'Ingrese los nuevos datos';
    if(isset($_GET['mensaje'])){
        if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base';}
    }

    ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Alta de nuevo usuario.</h5>
    </div>     

</head>
<body class="container">

    <!-- FORMULARIO -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="alta_usuario_sql.php" method="post">
                    <div class="form-group">
                        <label for="usuario" style="color:green" class="font-weight-bold">Ingrese el usuario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="clave" style="color:green" class="font-weight-bold">Ingrese la clave</label>
                        <input type="password" id="clave" name="clave" placeholder="Ingrese su clave" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="rol" style="color:green" class="font-weight-bold">Ingrese el rol</label>
                        <input type="text" id="rol" name="rol" placeholder="Ingrese su rol" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cargar registro</button>  
                    <?php echo $mensaje; ?>                                    
                </form>
            </div>
            
            <div class="col-3"></div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>


