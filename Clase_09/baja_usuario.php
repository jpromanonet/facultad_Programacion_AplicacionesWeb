<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar registro</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Recibo los valores por GET -->
    <?php
    $usuario = $_GET['usuario'];
    $clave = $_GET['clave']; 
    $rol = $_GET['rol'];  
    
    ?>


    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Eliminar registro.</h5>
    </div>  

    <!-- FORMULARIO -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="baja_usuario_sql.php" method="post">
                    <div class="form-group">
                        <label for="usuario" style="color:green" class="font-weight-bold">Usuario</label>
                        <input type="text" id="usuario" name="usuario" value=<?php echo $usuario; ?> readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="clave" style="color:green" class="font-weight-bold">Clave</label>
                        <input type="password" id="clave" name="clave" value=<?php echo $clave; ?> readonly class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="rol" style="color:green" class="font-weight-bold">Rol</label>
                        <input type="text" id="rol" name="rol" value=<?php echo $rol; ?> readonly class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="boton" value=1>Eliminar registro</button> 
                    <button type="submit" class="btn btn-danger btn-block" name="boton" value=0>Cancelar operación</button>       
                </form>
            </div>            
            <div class="col-3"></div>
        </div>
    </div> 

</head>
<body class="container">

    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>


