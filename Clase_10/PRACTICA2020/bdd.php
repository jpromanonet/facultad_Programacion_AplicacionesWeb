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
        include("includes/menu.php"); 
        include("includes/conexion.php");


        // Paso 4) Escribimos las consultas SQL
        $consulta1 = 'select count(distinct usuario) as usuarios from usuario';

        $rol = 'administrador';
        $consulta2 = "select count(distinct usuario) as administradores from usuario
        where rol = '$rol' ";

        $rol = 'analista';
        $consulta3 = "select count(distinct usuario) as analistas from usuario
        where rol = '$rol' ";

        $consulta4 = 'select distinct * from usuario';

        // Paso 5) Ejecutamos las consultas.
        $resultado_query1 = mysqli_query($conexion,$consulta1)
        or die('Hubo un error en la Query');

        while($fila1 = mysqli_fetch_assoc($resultado_query1)){
            $cantidad_de_usuarios = $fila1['usuarios'];
        }

        $resultado_query2 = mysqli_query($conexion,$consulta2)
        or die('Error en la Query 2');

        while($fila2 = mysqli_fetch_assoc($resultado_query2)){
            $cantidad_de_administradores = $fila2['administradores'];
        }

        $resultado_query3 = mysqli_query($conexion,$consulta3)
        or die('Error en la Query 3');

        while($fila3 = mysqli_fetch_assoc($resultado_query3)){
            $cantidad_de_analistas = $fila3['analistas'];
        }

        $resultado_query4 = mysqli_query($conexion,$consulta4)
        or die('Error en la Query 4');

        // Paso 6) Cerramos la conexion
        mysqli_close($conexion);
    
    
    ?> 

</head>
<body class="container">
    <?php menu(); ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Conexión a base de datos.</h5>
    </div>

    <!-- Primer fila -->
    <div class='container'>
        <div class='row'>
            <div class=col-3>    
                <button type="button" class="btn btn-primary btn-block">
                    Cantidad de usuarios <span class="badge badge-light">
                        <?php echo $cantidad_de_usuarios; ?>
                    </span>
                </button>
            </div>
            <div class='col-3'>
            <button type="button" class="btn btn-primary btn-block">
                Administradores <span class="badge badge-light">
                    <?php echo $cantidad_de_administradores; ?>
                </span>
            </button> 
            </div> 
            <div class='col-3'>
            <button type="button" class="btn btn-primary btn-block">
                Analistas <span class="badge badge-light">
                    <?php echo $cantidad_de_analistas; ?>
                </span>
            </button> 
            </div> 
            <div class='col-3'>
                <button type="button" class="btn btn-danger btn-block">
                    <a href="alta_usuario.php" style="color:white;" target="blank">Nuevo registro</a>
                </button>
            </div>                         
        </div>    
    </div>

    <!-- Segunda fila / TABLA -->
    <br>
    <div class='container'>
        <div class='row'>

            <div class='table-responsive'>
                <table class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr style="background:#003325;color:white" class="text-center">
                            <td>Usuario</td><td>Clave</td><td>Rol</td><td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                            
                            while($qy4 = mysqli_fetch_array($resultado_query4)){
                                echo "<tr>";
                                    echo '<td>'.$qy4['usuario'].'</td>';
                                    echo "<td>".$qy4['clave']."</td>";
                                    echo "<td>".$qy4['rol']."</td>";
                                    echo "<td>
                                            <a href='editar_usuario.php?usuario=".$qy4['usuario']."
                                            &clave=".$qy4['clave']."
                                            &rol=".$qy4['rol']."
                                            ' target='blank'>Editar</a>
                                            |
                                            <a href='baja_usuario.php?usuario=".$qy4['usuario']."
                                            &clave=".$qy4['clave']."
                                            &rol=".$qy4['rol']."
                                            ' target='blank'>Eliminar</a>
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