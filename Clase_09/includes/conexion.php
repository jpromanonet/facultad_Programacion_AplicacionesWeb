<?php

    // PASO 1) Datos de conexion
    $usuario = 'root';
    $clave = '';
    $servidor = 'localhost';
    $basededatos = 'tp1';

    // PASO 2) Creo la variable de conexion
    $conexion = mysqli_connect($servidor,$usuario,$clave) 
    or die('No se pudo conectar con el servidor');

    // PASO 3) conectamos con la base de datos.
    $db = mysqli_select_db($conexion,$basededatos)
    or die('No se conecto a la BDD');
    mysqli_set_charset($conexion,'utf-8');

?>


