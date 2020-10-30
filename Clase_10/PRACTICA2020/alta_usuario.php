<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
     <?php  
       $mensaje = 'Ingrese los nuevos datos';
       if(isset($_GET['mensaje'])){
           if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base';}
       }
     
     ?>


</head>
<body class="container">

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Alta de nuevo registro.</h5>
    </div>     

    <!-- Formulario -->
    <div class="container">
       <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            
                <form action="alta_usuario_sql.php" method="post">
                    <div class="form-group">
                        <label for="usuario">Ingrese el usuario.</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Ingrese el usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="clave">Ingrese la clave.</label>
                        <input type="password" id="clave" name="clave" placeholder="Ingrese la clave" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="rol">Ingrese el rol.</label>
                        <input type="text" id="rol" name="rol" placeholder="Ingrese el rol" class="form-control">
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


