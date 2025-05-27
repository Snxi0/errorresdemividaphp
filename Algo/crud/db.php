<?php

if (session_status() === PHP_SESSION_NONE) { //significa que no hay ninguna sesión activa.
    session_start(); //Esta línea verifica si no hay una sesión iniciada aún.


}

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'desercion'
);
?>
