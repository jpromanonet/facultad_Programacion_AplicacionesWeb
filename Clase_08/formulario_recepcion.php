<?php
    // Recibo los datos.
    $p_nombre = $_POST['nombre'];
    $p_apellido = $_POST['apellido'];
    $p_clave = $_POST['clave'];

    if(isset($_POST['materia1'])){
        $p_materia1 = $_POST['materia1'];
    }else $p_materia1 = '';

    if(isset($_POST['materia2'])){
        $p_materia2 = $_POST['materia2'];
    }else $p_materia2 = '';

    if(isset($_POST['materia3'])){
        $p_materia3 = $_POST['materia3'];
    }else $p_materia3 = '';

    if(isset($_POST['nivel'])){
        $p_nivel = $_POST['nivel'];
    }else $p_nivel = 'El nivel de ingles no fue enviado';

    $p_selector1 = $_POST['selector1'];

    echo '<br>';
    echo '<h3>Nombre recibido: '.$p_nombre.'</h3>';
    echo '<h3>Apellido recibido: '.$p_apellido.'<h3>';
    echo '<h3>Clave ingresada: '.$p_clave.'<h3>';
    echo '<h3>Tus materias favoritas son: '.$p_materia1.' '.$p_materia2.' '.$p_materia3.'</h3>';
    echo '<h3>Nivel de ingles: '.$p_nivel.'<h3>';
    echo '<h3>Motivo del contacto: '.$p_selector1.'<h3>';
?>