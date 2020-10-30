<?php

    include("includes/conexion.php");

    // Recibo los valores del formulario.
    $p_usuario = $_POST['usuario'];
    $p_clave = $_POST['clave'];
    $p_rol = $_POST['rol'];
    $p_boton = $_POST['boton'];

    // Estructura de desicion
    if($p_boton==0){
        echo "<script languaje='javascript' type='text/javascript'>
        window.close()
        </script>";
    }else{
        $baja = "delete from usuario where usuario = '$p_usuario' ";
        $resultado_baja = mysqli_query($conexion,$baja);

        echo "<script languaje='javascript' type='text/javascript'>
            window.opener.document.location.reload();
            self.close()
        </script>";

        echo "<script languaje='javascript' type='text/javascript'>
            window.close()
         </script>";

    }



?>