<?php
#Esta función se utiliza para iniciar o reanudar una sesión en PHP
session_start();
#Este bloque verifica si se ha enviado el formulario de inicio de sesión, comprobando si el botón de enviar (btningresar) 
if (!empty($_POST["btningresar"])) {
#se comprueba si los campos de usuario y contraseña no están vacíos en el formulario enviado
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
#Se asigna el valor a los campos usuario y password en una variable declarada
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
#Se hace una consulta sql de la talba "usuario" donde los nombres coincidan con los valores declarados
        $sql=$conexion->query(" select * from usuario where usuario='$usuario' and clave='$password' ");
#Se verifica si se encontraron resultados en la consulta SQL. Si la consulta devuelve al menos una fila, se procede a iniciar sesión
        if ($datos=$sql->fetch_object()) {
#Se asigna el valor del campo '' a los datos de la consulta a $_SESSION[""]
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombres;
            $_SESSION["apellido"]=$datos->apellidos;
#Redirige a la nueva pagina de inicio
            header("location: inicio.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
        

    }else {
        echo "Campos vacios";
    }
}

?>