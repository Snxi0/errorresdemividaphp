<?php
include("../crud/db.php");

$id = $_SESSION['id_user']; // Simulamos el usuario con ID = 1
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$imagen = '';

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
    $nombre_img = basename($_FILES['imagen']['name']);
    $ruta_destino = 'uploads/' . $nombre_img;
    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_destino);
    $imagen = $nombre_img;

    $sql = "UPDATE usuarios SET nombre = ?, imagen = ?, apellidos = ? WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('MySQL prepare error: ' . $conn->error);
    }
    $stmt->bind_param("sssi", $nombre, $imagen, $apellido, $id);
} else {
    $sql = "UPDATE usuarios SET nombre = ?, apellidos = ? WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('MySQL prepare error: ' . $conn->error);
    }
    $stmt->bind_param("ssi", $nombre, $apellido, $id);
}

if ($stmt->execute()) {
    header("Location: perfil.php");
} else {
    echo "Error al actualizar: " . $stmt->error;
}
?>
