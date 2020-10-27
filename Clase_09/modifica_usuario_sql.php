<?php
    // Conexion al servidor
    include('includes/conexion.php');

    // Recibo los valores por POST.
	$p_usuario = $_POST['usuario'];
	$p_clave = $_POST['clave'];
    $p_rol = $_POST['rol'];
    $p_boton = $_POST['boton'];

    $original = $_POST['original'];
 
    // Verifico si boton = cero
    if($p_boton==0){
        // Cierro el formulario y recargo la pagina anterior.
        echo "<script languaje='javascript' type='text/javascript'>
                window.close();
            </script>";
    }

    // Verifico si boton = uno
    if($p_boton==1){
        $modifica = "
            update usuario 
            set usuario='$p_usuario',clave='$p_clave',rol='$p_rol'
            where usuario = '$original'
        ";
        $resultado_modifica = mysqli_query($conexion,$modifica);

        // Cierro el formulario y recargo la pagina anterior.
        echo "<script languaje='javascript' type='text/javascript'>
                window.opener.document.location.reload();self.close()
            </script>";
        
        echo "<script languaje='javascript' type='text/javascript'>
                window.close();
            </script>";        
    }    

?>