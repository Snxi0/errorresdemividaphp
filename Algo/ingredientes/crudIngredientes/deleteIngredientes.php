<?php


include("../../crud/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM ingredientes WHERE id= $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Eliminacion fallida");
    }

    $_SESSION['message'] = 'Ingrediente Eliminado satisfactoriamente';
    $_SESSION['message_type'] = 'danger';

    header("location: ../ingredientes.php");
}

?>