<?php

if (!empty($_POST["btnregistrar"])) {
    if (empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["usuario"]) or empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Uno de los campos esta vacio</div>';
    } else {
        $nombre = $_POST["nombres"];
        $apellido = $_POST["apellidos"];
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];
        $sql=$conexion->query(" insert into usuario(nombres, apellidos, usuario, clave) values ('$nombre','$apellido','$usuario','$clave') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Usuario registrado con exito</div>';  
        } else {
            echo '<div class="alert alert-primary">Error al agregar usuario</div>';
        }
        
    }
    
}

?>