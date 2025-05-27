<?php

$cedula_usuario = $_SESSION['cedula'] ?? '';

if ($cedula_usuario != '') {
    $query = "SELECT nombre, apellidos FROM usuarios WHERE cedula = '$cedula_usuario'";
    $resultado = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($resultado)) {
        $nombre = $row['nombre'];
        $apellido = $row['apellidos'];
    } else {
        $nombre = "Usuario";
        $apellido = "";
    }
} else {
    // Si no hay sesión activa, redirigir al login
    header("Location: ../logIn/Login.php");
    exit;
}
?>