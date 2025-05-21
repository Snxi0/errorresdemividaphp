<?php
include("db.php");


if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO tarea(titulo,descripcion) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("failed");
    }

    $_SESSION['message'] = 'Tarea guardada satisafactoriamente';
    $_SESSION['message_type'] = 'success';
    
    header("location: ../registro/table.php");
    
}


//isset significa si el dato existe 
?>
