<?php
$activo = 'inicio';
include('../includes/header.php');
?>

<?php	include("../includes/session_cd.php")?>


<?php  
    if (!isset($_SESSION['cedula'])) {
    header("Location: ../login/login.php");
    exit();
}
?>



        <div class="col py-3 custom-bd">
            <div class="carousel">
                      <div class="slides">
                        <img src="../img/img-carrusel/2.png" alt="Imagen 1">
                        <img src="../img/img-carrusel/4.png" alt="Imagen 2">
                        <img src="../img/img-carrusel/3.png" alt="Imagen 3">
                        <img src="../img/img-carrusel/1.png" alt="Imagen 3">
                        <!-- Puedes agregar más imágenes -->
                      </div>
                    </div>
        </div>


            <div class="container p-4 ">
            </div>


  <?php include('../includes/footer.php'); ?>



