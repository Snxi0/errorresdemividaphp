<?php include("../crud/db.php")?><!--apenas inicie la apliacion empice a conectar la base de datos-->
<?php	include("../includes/header.php")?>
<?php	include("../includes/session_cd.php")?>

<?php $activo = 'usuarios'; ?>






<div class="container-fluid ">
    <div class="row flex-nowrap w-100">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 custom-aside">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
        
                <ul class="nav nav-pills flex-column  align-items-center align-items-sm-start custom-ul" id="menu">
                    <li class="nav-item">
                        <a href="../crud/inicio.php" class="nav-link align-middle px-0 custom-icon <?= esActivo('inicio') ?>">
                            <i class="fs-4 bi-house"> </i> 
                            <span class="ms-1 d-none d-sm-inline  ">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="../registro/table.php"  class="nav-link px-0 align-middle custom-icon <?= esActivo('platos') ?>">
                            <i class="icon fs-4 bi-fork-knife veo"> </i> <span class="ms-1 d-none d-sm-inline ">Platos</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"> 
                        </ul>
                    </li>
                    <li>
                        <a href="../ingredientes/ingredientes.php" class="nav-link px-0 align-middle custom-icon <?= esActivo('ingredientes') ?>">
                            <i class="fs-4 bi bi-basket "> </i> <span class="ms-1 d-none d-sm-inline ">Ingredientes </span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle custom-icon">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline ">-</span></a>
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
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1 custom-name">
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





<!----------------------------------------- GESTION DE USUARIOS--------------------------------------->


<div class="row">

    <div class="col-md-4">  
        
    <?php  if(isset($_SESSION['message'])) {?>
        <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php 
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
    //limpia los datos que tengo en secion
    }?> <!-- verificar que existen los datos guardados y mostrar mensaj-->

        <div class="card card-body bg-black">
            <a href="registroUsuarios.php">
                <input type="submit" class="btn btn-custom w-100 mt-3"  value="Agregar Usuario">
            </a>
        </div>
    </div>

    <div class="col md-8 ">
        <table class="table table-hover table-striped  custom-table">
            <thead>
                <tr >
                    <th>CEDULA</th> 
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TELEFONO</th>
                    <th>ROL</th>
                    <th>ESTADO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT * FROM usuarios";
                $resultas = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($resultas)){?> <tr>
                    <td> <?php echo $row['cedula'] ?></td>
                    <td> <?php echo $row['nombre'] ?></td>
                    <td> <?php echo $row['apellidos'] ?></td>
                    <td> <?php echo $row['telefono'] ?></td>
                    <td> <?php echo $row['rol'] ?></td>
                    <td> <?php echo $row['id_estado'] ?></td>
                    <td>
                        <a href="crudUsuario/deleteUser.php?id_user=<?php echo $row['id_user']?>"class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>








<?php	include("../includes/footer.php")?>
