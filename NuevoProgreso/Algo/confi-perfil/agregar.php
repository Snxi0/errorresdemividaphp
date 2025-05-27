<?php
include("../crud/db.php");


$nombre = $_POST['nombre'];
$imagen = $_FILES['imagen']['name'];
$tmp = $_FILES['imagen']['tmp_name'];

move_uploaded_file($tmp, "uploads/" . $imagen);

$conn->query("INSERT INTO ingredientes(nombre, imagen) VALUES('$nombre', '$imagen')");
header("Location: configuracion.php");

?>