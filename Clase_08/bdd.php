<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
     <?php  
        include('includes/menu.php');  

        // PASO 1) Datos de conexion
        $usuario = 'root';
        $clave = '';
        $servidor = 'localhost';
        $basededatos = 'tp1';

        // PASO 2) Creamos la variable de conexion.
        $conexion = mysqli_connect($servidor,$usuario,$clave)
        or die('No se pudo conectar al servidor');

        // PASO 3) Me conecto a la base de datos.
        $db = mysqli_select_db($conexion,$basededatos)
        or die('No se puedo conectar a la BDD');
        mysqli_set_charset($conexion,'utf8');
     
        // PASO 4) Consultas de SQL.
        $consulta1 = "select count(distinct usuario) as usuarios from usuario";

        $rol1 = 'administrador';
        $consulta2 = "select count(distinct usuario) as administradores from usuario where rol='$rol1' ";

        $consulta3 = "select count(distinct usuario) as analistas from usuario where rol='analista' ";

        $consulta4 = "select * from usuario";

        // PASO 5) Ejecutamos las querys

        // Query 1
        $resultado1 = mysqli_query($conexion,$consulta1)
        or die('Error en la Query');

        while($a = mysqli_fetch_assoc($resultado1)){
            $cantidad_usuarios = $a['usuarios'];
        }

        // Query 2
        $resultado2 = mysqli_query($conexion,$consulta2)
        or die('Error en la Query 2');

        while($b = mysqli_fetch_assoc($resultado2)){
            $cantidad_administradores = $b['administradores'];
        }

        // Query 3
        $resultado3 = mysqli_query($conexion,$consulta3)
        or die('Error en la Query 3');

        while($c = mysqli_fetch_assoc($resultado3)){
            $cantidad_analistas = $c['analistas'];
        }

        //Query 4
        $resultado4 = mysqli_query($conexion,$consulta4)
        or die('Error en la Query 4');

        // PASO 6) Cerramos la conexion.
        mysqli_close($conexion);
     
     ?>

</head>
<body class="container">
    <?php menu(); ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Conexion al servidor de base de datos.</h5>
    </div>

    <!-- Fila 1 -->
    <div class="container">
        <div class="row">
            <div class="col-3">
            <button type="button" class="btn btn-primary">
                Cantidad de Usuarios <span class="badge badge-light">
                    <?php echo $cantidad_usuarios; ?>
                </span>
            </button>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-success">
                    Administradores <span class="badge badge-light">
                        <?php echo $cantidad_administradores; ?>
                    </span>
                </button>            
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-warning">
                    Analistas <span class="badge badge-light">
                        <?php echo $cantidad_analistas; ?>
                    </span>
                </button>             
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-outline-danger">
                    <a href="#" target="_blank">Nuevo Usuario</a>
                </button>
            </div>
        </div>
    </div>
    <br>

    <!-- Fila 2 Tabla -->
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr style="background:#003325;color:white" class="text-center">
                            <td>Usuario</td><td>Clave</td><td>Rol</td><td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>                    
                        <?php
                        while($z = mysqli_fetch_array($resultado4)){
                            echo "<tr>";
                                echo "<td>".$z['usuario']."</td>";
                                echo "<td>".$z['clave']."</td>";
                                echo "<td>".$z['rol']."</td>";
                                echo "<td>
                                        <a href='#' target='_blank'>Editar</a>
                                        <a href='#' target='_blank'>Eliminar</a>
                                      </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>


