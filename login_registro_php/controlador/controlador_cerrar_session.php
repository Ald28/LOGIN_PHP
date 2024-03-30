<?php

#Esta función se utiliza para iniciar o reanudar una sesión en PHP. En este caso, se inicia la sesión.
session_start();
#Esta función se utiliza para destruir todos los datos registrados en una sesión. En este caso, se destruyen todas las variables de sesión y se cierra la sesión actual.
session_destroy();
#redirige al usuario a la página de inicio de sesión
header("location: ../login.php");

?>