<?php
session_start(); // 🔹 Necesario para usar $_SESSION

include('../crud/db.php');

$cedula = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// 🔐 Usar consulta preparada para evitar inyección SQL
$stmt = $conn->prepare("SELECT id_user, cedula FROM usuarios WHERE cedula = ? AND contraseña = ?");
$stmt->bind_param("ss", $cedula, $contraseña);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();

    // Guardamos ID y cédula en la sesión
    $_SESSION['id_user'] = $usuario['id_user'];
    $_SESSION['cedula'] = $usuario['cedula'];

    header("Location: ../crud/inicio.php");
    exit();
} else {
    $error = "⚠️ Usuario o contraseña incorrectos";
}
$stmt->close();
?>
