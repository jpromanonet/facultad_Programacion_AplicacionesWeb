<?php
    function menu(){  ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="formulario.php">Formulario</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="bdd.php">ABM Básico</a>
                </li>                
                </ul>
            </div>            
            </div>
        </nav>        
<?php
   }
?>