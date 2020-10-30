<?php

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $clave = $_POST['clave'];

    if(isset($_POST['materia1'])){
        $materia1 = $_POST['materia1'];
    }else $materia1 = '';

    if(isset($_POST['materia2'])){
        $materia2 = $_POST['materia2'];
    }else $materia2 = '';

    if(isset($_POST['materia3'])){
        $materia3 = $_POST['materia3'];
    } else $materia3 = '';

    $materias = $materia1.' '.$materia2.' '.$materia3;

    if(isset($_POST['nivel'])){
        $nivel = $_POST['nivel'];
    }else $nivel = 'No se especifico el nivel de ingles';

    $motivo = $_POST['selector1'];

    echo '<h3>Nombre recibido: '.$nombre.'</h3>';
    echo '<h3>Apellido recibido: '.$apellido.'</h3>';
    echo '<h3>Clave recibida: '.$clave.'</h3>';
    echo '<h3>Materias favoritas: '.$materias.'</h3>';
    echo '<h3>Nivel de ingles: '.$nivel.'</h3>';
    echo '<h3>Motivo de su contacto: '.$motivo.'</h3>';

?>