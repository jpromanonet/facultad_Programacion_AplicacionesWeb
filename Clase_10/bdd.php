<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
    <?php  
    include('includes/menu.php');

    include('includes/conexion.php');

    // PASO 4) Consultas en SQL
    $consulta1 = "select count(distinct usuario) as usuarios from usuario";

    $rol1 = 'administrador';
    $consulta2 = "select count(distinct usuario) as administradores from usuario where rol='$rol1' ";

    $rol2 = 'analista';
    $consulta3 = "select count(distinct usuario) as analistas from usuario where rol='$rol2' ";

    $consulta4 = "select * from usuario";

    // PASO 5) Ejecutamos las consultas SQL

    //*** Query 1
    $resultado1 = mysqli_query($conexion,$consulta1) or die('Error en la Query 1');

    while($a = mysqli_fetch_assoc($resultado1)){
        $cantidad_de_usuarios = $a['usuarios'];
    }

    //*** Query 2
    $resultado2 = mysqli_query($conexion,$consulta2) or die('Error en Query 2');

    while($b = mysqli_fetch_assoc($resultado2)){
        $cantidad_de_administradores = $b['administradores'];
    }

    //*** Query 3
    $resultado3 = mysqli_query($conexion,$consulta3) or die('Error en la query 3');

    while($c = mysqli_fetch_assoc($resultado3)){
        $cantidad_de_analistas = $c['analistas'];
    }

    //*** Query 4
    $resultado4 = mysqli_query($conexion,$consulta4) or die('Error en la Query 4');
    
    // PASO 6) Cierro la conexion
    mysqli_close($conexion); 

    ?>

</head>
<body class="container">
    <?php menu(); ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">ABM básico.</h5>
    </div>    

    <!-- FILA 1 -->
    <div class="container">
        <div class="row">
            <div class="col-3">
                <button type="button" class="btn btn-primary btn-block">
                    Cantidad de usuarios <span class="badge badge-light"><?php echo $cantidad_de_usuarios; ?></span>
                </button>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary btn-block">
                    Cant. Administradores <span class="badge badge-light"><?php echo $cantidad_de_administradores; ?></span>
                </button>            
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary btn-block">
                    Cant. Analistas <span class="badge badge-light"><?php echo $cantidad_de_analistas; ?></span>
                </button>            
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-danger btn-block">
                    <a href="alta_usuario.php" target="_blank" style="color:white">Nuevo usuario.</a>
                </button>
            </div>
        </div>
    </div><br>

    <!-- FILA 2 - TABLA -->
    <div class="container">
        <div class="row">
            <div class='col-1'></div>
            <div class='col-10'>            
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr style="background:#003325;color:white" class="text-center">
                                <td>Usuario</td><td>Clave</td><td>Rol</td><td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($d = mysqli_fetch_array($resultado4)){
                                echo "<tr>";
                                    echo "<td>".$d['usuario']."</td>";
                                    echo "<td>".$d['clave']."</td>";
                                    echo "<td>".$d['rol']."</td>";
                                    echo "<td>
                                            <a href='modifica_usuario.php?usuario=".$d['usuario']."
                                            &clave=".$d['clave']."
                                            &rol=".$d['rol']." ' 
                                            target='_blank'>Editar</a>
                                            |
                                            <a href='baja_usuario.php?usuario=".$d['usuario']."
                                            &clave=".$d['clave']."
                                            &rol=".$d['rol']." ' 
                                            target='_blank'>Eliminar</a>
                                        </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>               
                </div>                       
            </div>
            <div class='col-1'></div>
        </div>
    </div>


    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>


