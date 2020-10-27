<?php
    // Conexion al servidor
    include('includes/conexion.php');

    // Recibo los valores por POST.
	$p_usuario = $_POST['usuario'];
	$p_clave = $_POST['clave'];
    $p_rol = $_POST['rol'];
    $p_boton = $_POST['boton'];
 
    // Verifico si boton = cero
    if($p_boton==0){
        // Cierro el formulario y recargo la pagina anterior.
        echo "<script languaje='javascript' type='text/javascript'>
                window.close();
            </script>";
    }

    // Verifico si boton = uno
    if($p_boton==1){
        $baja = "delete from usuario where usuario = '$p_usuario' ";
        $resultado_baja = mysqli_query($conexion,$baja);

        // Cierro el formulario y recargo la pagina anterior.
        echo "<script languaje='javascript' type='text/javascript'>
                window.opener.document.location.reload();self.close()
            </script>";
        
        echo "<script languaje='javascript' type='text/javascript'>
                window.close();
            </script>";        
    }    

?>