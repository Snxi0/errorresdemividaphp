<?php
include("../crud/db.php");
$id = $_GET['id'];

$img = $conn->query("SELECT imagen FROM ingredientes WHERE id=$id")->fetch_assoc();
unlink("uploads/" . $img['imagen']);

$conn->query("DELETE FROM ingredientes WHERE id=$id");
header("Location: configuracion.php");

?>
