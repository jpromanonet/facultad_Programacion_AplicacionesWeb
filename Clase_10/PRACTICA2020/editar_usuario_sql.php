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
        $editar = "
            update usuario
            set usuario='$p_usuario',clave='$p_clave',rol='$p_rol'
            where usuario = '$p_usuario'
        ";
        $resultado_editar = mysqli_query($conexion,$editar);

        echo "<script languaje='javascript' type='text/javascript'>
            window.opener.document.location.reload();
            self.close()
        </script>";

        echo "<script languaje='javascript' type='text/javascript'>
            window.close()
         </script>";

    }



?>