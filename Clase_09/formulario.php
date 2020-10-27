<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
     <?php  include('includes/menu.php');?>

</head>
<body class="container">
    <?php menu(); ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Envio de datos al servidor.</h5>
    </div>

    <!--Formulario -->
    <div class="row">
        <div class="col-3"></div>

        <div class="col-6">
            <form method="post" action="formulario_recepcion.php">
                <hr size="2px" color="black" />
                <div class="form-group">
                    <label for="nombre">Nombre del usuario.</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido del usuario.</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" class="form-control">
                </div> 
                <div class="form-group">
                    <label for="clave">Clave del usuario.</label>
                    <input type="password" id="clave" name="clave" placeholder="Ingrese su clave" class="form-control">
                </div>
                <hr size="2px" color="black" />  
                <h6 class="font-italic">Seleccione sus materias favoritas.</h6>    
                <div class="form-group">
                    <input type="checkbox" id="materia1" name="materia1" value="php">
                    <label for="materia1">Aplicaciones Web</label>                   
                </div> 
                <div class="form-group">
                    <input type="checkbox" id="materia2" name="materia2" value="java">
                    <label for="materia2">JAVA</label>                   
                </div>
                <div class="form-group">
                    <input type="checkbox" id="materia3" name="materia3" value="asp_net">
                    <label for="materia3">ASP Net</label>                   
                </div>                                                            

                <hr size="2px" color="black" />  
                <fieldset>
                <legend>Seleccione su nivel de inglés</legend>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" value="alta">Alto
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" value="medio">Medio
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" value="bajo">Bajo
                        </label>
                    </div>
                </fieldset>
                <hr size="2px" color="black" />

                <div class="form-group">
                    <label for="selector1">Seleccione el motivo de su contacto.</label>
                    <select name="selector1" id="selector1">
                        <option value="consulta">Consulta</option>
                        <option value="sugerencia">Sugerencia</option>
                        <option value="queja">Queja</option>
                    </select>
                </div>
                <hr size="2px" color="black" />

                <button type="submit" class="btn btn-primary btn-block">Enviar</button>  
                <br><br>                             
            </form>
        </div>
        
        <div class="col-3"></div>
    </div>    

    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>


