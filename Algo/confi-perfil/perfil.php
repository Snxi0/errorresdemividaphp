    <?php include("../crud/db.php") ?>
    <?php	include("../includes/header.php")?>
    <?php	include("../includes/session_cd.php")?>


    
        <?php
            $id = $_SESSION['id_user'];
                $sql = "SELECT * FROM usuarios WHERE id_user = $id";
                $result = $conn->query($sql);
                $user = $result->fetch_assoc();
                ?>


    <div class="container-fluid ">
        <div class="row flex-nowrap w-100">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 custom-aside">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
            
                    <ul class="nav nav-pills flex-column  align-items-center align-items-sm-start custom-ul" id="menu">
                        <li class="nav-item">
                            <a href="../crud/inicio.php" class="nav-link align-middle px-0 custom-icon <?= esActivo('inicio') ?>">
                                <i class="fs-4 bi-house"> </i> 
                                <span class="ms-1 d-none d-sm-inline ">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="../registro/table.php"  class="nav-link px-0 align-middle custom-icon <?= esActivo('platos') ?>">
                                <i class="icon fs-4 bi-fork-knife veo"> </i> <span class="ms-1 d-none d-sm-inline ">Platos</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"> 
                            </ul>
                        </li>
                        <li>
                            <a href="" class="nav-link px-0 align-middle custom-icon <?= esActivo('ingredientes') ?>">
                                <i class="fs-4 bi bi-basket"> </i> <span class="ms-1 d-none d-sm-inline ">Ingredientes </span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle custom-icon">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">-</span></a>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle custom-icon">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline text-white">-</span> </a>
                        </li>
                        <li>
                            <a href="../usuarios/usuarios.php" class="nav-link px-0 align-middle custom-icon <?= esActivo('usuarios') ?>">
                                <i class="fs-4 bi-people"> </i> <span class="ms-1 d-none d-sm-inline ">Usuarios</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4 ">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="uploads/<?php echo $user['imagen']; ?>" alt="hugenerd" width="40" height="40" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1 custom-name" >
                            <?php echo $nombre . " " . $apellido; ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu text-small shadow custom-drop">
                            <li><a class="dropdown-item custom-a" href="../confi-perfil/perfil.php"><i class="bi bi-person"></i>
                            Profile</a></li>
                            <li><a class="dropdown-item custom-a" href="../confi-perfil/configuracion.php"><i class="bi bi-gear"></i>
                            Settings</a></li>
                            <li>
                                <hr class="dropdown-divider custom-hr">
                            </li>
                            <li><a class="dropdown-item custom-li" href="../logIn/cerrarsesion.php"><i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3 custom-bd">
            <div class="container p-4 ">



            
    <div class="container mt-5">
        <div class="text-center mb-4">
        </div>

        <div class="row justify-content-center">
        <div class="col-md-6 text-center">


            <form action="agregarImagen.php" method="POST" enctype="multipart/form-data">
            
            <input type="file" class="img-file mb-5" id="fileInput" name="imagen">
            <img src="uploads/<?php echo $user['imagen']; ?>" alt="Foto de perfil" class="profile-img mb-3 r" onclick="document.getElementById('fileInput').click();">

            
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



    <?php	include("../includes/footer.php")?>
