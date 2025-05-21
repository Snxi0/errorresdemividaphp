<?php


include("../../crud/db.php");

    if(isset($_GET['num_consecutivo'])){
    $id = $_GET['num_consecutivo'];
    $query = "DELETE FROM ingredientes WHERE num_consecutivo= $id";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Eliminacion fallida");
    }

    $_SESSION['message'] = 'Ingrediente Eliminado satisfactoriamente';
    $_SESSION['message_type']= 'danger';

    header("location: ../ingredientes.php");
    }

?>