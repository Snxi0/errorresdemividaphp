<?php
$activo = 'perfil';
include('../includes/header.php');
?>
    <?php	include("../includes/session_cd.php")?>

            <div class="col py-3 custom-bd">
            <div class="container p-4 ">



            
    <div class="container mt-5">
        <div class="text-center mb-4">
        </div>

        <div class="row justify-content-center">
        <div class="col-md-6 text-center">


            <form action="agregarImagen.php" method="POST" enctype="multipart/form-data">
            
            <input type="file" class="img-file mb-5" id="fileInput" name="imagen">
            <img id="preview" src="uploads/<?php echo $user['imagen']; ?>" alt="Foto de perfil" class="profile-img mb-3 r" onclick="document.getElementById('fileInput').click();">

            
                <div class="mb-3 text-start">
                    
                
            </div>
            <div class="input-group">
                <span class="input-group-text">Nombre y Apellido </span> 
                        <input 
                            type="text" 
                            aria-label="First name" 
                            class="form-control" 
                            name="nombre" value="<?php echo $nombre; ?>">

                        <input 
                            type="text" 
                            aria-label="Last name" 
                            class="form-control" 
                            name="apellido" value="<?php echo $apellido; ?>">

            </div>

            <div class="mb-3 text-start">
                <label for="foto" class="form-label">Nueva Foto de Perfil</label>
            </div>

            <input type="submit" class="btn btn-success w-100" value="Guardar Cambios">

            </form>
        </div>
        </div>
    </div>




      <?php include('../includes/footer.php'); ?>