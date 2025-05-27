<?php
include("../../crud/db.php");



if(isset($_POST['guardarIngrediente'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];

    $query = "INSERT INTO ingredientes(nombre, descripcion, cantidad_disponible)
    VALUES ('$nombre', '$descripcion', '$cantidad')";
    $result = mysqli_query($conn, $query);

    if(!$result){
    die("Error en la consulta: " . mysqli_error($conn));
}

    $_SESSION['message'] = 'Ingredientes Registrado satisafactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../ingredientes.php");

    
}


//isset significa si el dato existe 
?>