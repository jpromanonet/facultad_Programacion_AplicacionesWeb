<?php
    // Esto es un echo
    echo '<h1>Hola Mundo.</h1>';
    echo '<h1>Título</h1>';
    echo '<h2>Sub título</h2>';
    echo '<p>Parrafo</p>';
    // Ahora vienen los print
    // Print con paréntesis.
    print("Hola mundo con comillas dobles.");
    print('Hola mundo con comillas simples.');
    // Print con paréntesis.
    print("Hola mundo con comillas dobles.<br>");
    print('Hola mundo con comillas simples.<br>');
    // Print con paréntesis.
    print("<h1>Hola mundo con comillas dobles.</h1>");
    print('<h2>Hola mundo con comillas simples.</h2>');
    // Print con saltos de linea
    print"<h1>Hola \"mundo\" mostrando comillas en pantalla.</h1>";
    //
    // Vamos a ver variables n.n
    //
    $a = 'Hola';
    $b = 'Mundo';

    // Variables concatenadas.
    echo '<h3> Concatenamos variables y texto. </h3>';
    echo $a.' - '.$b;

    // Lista de variables.
    echo '<br><br><h3> Concatenamos variables y texto. </h3>';
    echo $a,$b;

    // Variables con idiomas
    define('IDIOMA','Castellano');

    echo IDIOMA;

    define('IDIOMA','Castellano');

    echo 'El lenguaje de la Web es: '.IDIOMA;

    // Arrays en PHP
    $paises[0] = 'Argentina';
    $paises[1] = 'Brasil';
    $paises[2] = 'Uruguay';

    echo $paises[1];

    // Trabajando con Arrays
    $numeros[0] = 12;
    $numeros[1] = 5;
    $numeros[2] = 3;

    echo 'Suma = ',$numeros[0]+$numeros[1]+$numeros[2];

    // Declaración implicita de matrices
    $numeros[] = 12;
    $numeros[] = 5;
    $numeros[] = 3;

    echo 'Suma = ',$numeros[0]+$numeros[1]+$numeros[2];

    // Declaración mixta de matrices
    $numeros[2] = 12;
    $numeros[] = 5;
    $numeros[] = 3;

    echo 'Suma = ',$numeros[2]+$numeros[3]+$numeros[4];

    // La función Array
    $paises = array('Argentina','Brasil','Uruguay');

    echo $paises[2];
?>