<?php
include("../crud/db.php");
$id = $_GET['id'];

// Obtener datos actuales del ingrediente
$datos = $conn->query("SELECT * FROM ingredientes WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevo_nombre = $conn->real_escape_string($_POST['nombre']);

    // Verificar si se subió una nueva imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $nombre_tmp = $_FILES['imagen']['tmp_name'];
        $imagen_nombre = basename($_FILES['imagen']['name']);
        $directorio = "uploads/";

        // Mover la imagen al directorio
        if (move_uploaded_file($nombre_tmp, $directorio . $imagen_nombre)) {
            // Actualizar nombre e imagen
            $conn->query("UPDATE ingredientes SET nombre='$nuevo_nombre', imagen='$imagen_nombre' WHERE id=$id");
        }
    } else {
        // Solo actualizar el nombre
        $conn->query("UPDATE ingredientes SET nombre='$nuevo_nombre' WHERE id=$id");
    }

    header("Location: configuracion.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Ingrediente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5 bg-black">
    <h2>Editar Ingrediente</h2>

    <form method="POST" enctype="multipart/form-data">
        <label>Nombre del ingrediente</label>
        <input type="text" name="nombre" class="form-control mb-2" value="<?php echo htmlspecialchars($datos['nombre']); ?>" required>

        <?php if (!empty($datos['imagen'])): ?>
            <label>Imagen actual</label><br>
            <img src="uploads/<?php echo htmlspecialchars($datos['imagen']); ?>" alt="Imagen actual" style="max-width: 200px; margin-bottom: 10px;"><br>
        <?php endif; ?>

        <label>Cambiar imagen (opcional)</label>
        <input type="file" name="imagen" class="form-control mb-2">

        <button class="btn btn-primary">Actualizar</button>
        <a href="configuracion.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
