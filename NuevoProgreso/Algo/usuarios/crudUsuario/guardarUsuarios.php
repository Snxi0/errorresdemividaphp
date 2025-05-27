<?php
include("../../crud/db.php");

 echo $_SERVER['REQUEST_URI']; 

if(isset($_POST['guardarUsuario'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $genero = $_POST['genero'];
    $rol = $_POST['rol'];

    $query = "INSERT INTO usuarios(cedula, nombre, apellidos, contraseña, telefono, fechaNacimiento, genero, rol)
    VALUES ('$cedula', '$nombre', '$apellido', '$password', '$telefono', '$fechaNacimiento', '$genero', '$rol')";
    $result = mysqli_query($conn, $query);

    if(!$result){
    die("Error en la consulta: " . mysqli_error($conn));
}


    $_SESSION['message'] = 'Usuario Registrado satisafactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../usuarios.php");

    
}


//isset significa si el dato existe 
?>