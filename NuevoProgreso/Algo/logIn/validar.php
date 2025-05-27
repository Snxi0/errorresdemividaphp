<?php
include('../crud/db.php');


$cedula = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// 👇 Consulta sin preparación (NO RECOMENDADA para producción)
$query = "SELECT id_user, cedula FROM usuarios WHERE cedula = '$cedula' AND contraseña = '$contraseña'";
$resultado = mysqli_query($conn, $query);

if (mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);

    $_SESSION['id_user'] = $usuario['id_user'];
    $_SESSION['cedula'] = $usuario['cedula'];

    header("Location: ../crud/inicio.php");
    exit();
} else {
    $error = "⚠️ Usuario o contraseña incorrectos";
}
?>
