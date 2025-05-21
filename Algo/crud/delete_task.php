<?php

use LDAP\Result;

include("db.php");

    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tarea WHERE id= $id";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Eliminacion fallida");
    }
    $_SESSION['message'] = 'Tarea Eliminada satisfactoriamente';
    $_SESSION['message_type']= 'danger';
    header("location: ../registro/table.php");
    }

?>