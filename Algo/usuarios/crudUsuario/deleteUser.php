<?php


include("../../crud/db.php");

    if(isset($_GET['id_user'])){
    $id = $_GET['id_user'];
    $query = "DELETE FROM usuarios WHERE id_user= $id";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Eliminacion fallida");
    }

    $_SESSION['message'] = 'Usuario Eliminado satisfactoriamente';
    $_SESSION['message_type']= 'danger';

    header("location: ../usuarios.php");
    }

?>