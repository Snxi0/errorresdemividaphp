<?php include("../crud/db.php"); ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/session_cd.php"); ?>

<div class="container-fluid">
    <div class="row flex-nowrap w-100">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 custom-aside">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                <!-- Aquí va tu menú lateral (aside) -->
                <ul class="nav nav-pills flex-column align-items-center align-items-sm-start custom-ul" id="menu">
                    <li class="nav-item">
                        <a href="../crud/inicio.php" class="nav-link align-middle px-0 custom-icon <?= esActivo('inicio') ?>">
                            <i class="fs-4 bi-house"></i>
                            <span class="ms-1 d-none d-sm-inline">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="../registro/table.php" class="nav-link px-0 align-middle custom-icon <?= esActivo('platos') ?>">
                            <i class="icon fs-4 bi-fork-knife veo"></i>
                            <span class="ms-1 d-none d-sm-inline">Platos</span>
                        </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        </ul>
                    </li>
                    <li>
                        <a href="../ingredientes/ingredientes.php" class="nav-link px-0 align-middle custom-icon <?= esActivo('ingredientes') ?>">
                            <i class="fs-4 bi bi-basket"></i>
                            <span class="ms-1 d-none d-sm-inline">Ingredientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle custom-icon">
                            <i class="fs-4 bi-bootstrap"></i>
                            <span class="ms-1 d-none d-sm-inline text-white">-</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle custom-icon">
                            <i class="fs-4 bi-grid"></i>
                            <span class="ms-1 d-none d-sm-inline text-white">-</span>
                        </a>
                    </li>
                    <li>
                        <a href="../usuarios/usuarios.php" class="nav-link px-0 align-middle custom-icon <?= esActivo('usuarios') ?>">
                            <i class="fs-4 bi-people"></i>
                            <span class="ms-1 d-none d-sm-inline"></span> Usuarios
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1 custom-name">
                            <?php echo $nombre . " " . $apellido; ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu text-small shadow custom-drop">
                        <li><a class="dropdown-item custom-a" href="../confi-perfil/perfil.php"><i class="bi bi-person"></i> Profile</a></li>
                        <li><a class="dropdown-item custom-a" href="../confi-perfil/configuracion.php"><i class="bi bi-gear"></i> Settings</a></li>
                        <li>
                            <hr class="dropdown-divider custom-hr">
                        </li>
                        <li><a class="dropdown-item custom-li" href="../logIn/cerrarsesion.php"><i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col py-3 custom-bd">
            <div class="container p-4">










                <div class="container py-5">
                    <h2>Agregar Ingrediente</h2>
                    <form action="agregar.php" method="POST" enctype="multipart/form-data" class="mb-5">
                        <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre del ingrediente">
                        <input type="file" name="imagen" class="form-control mb-2">
                        <button class="btn btn-primary">Agregar</button>
                    </form>




                    
                    <h2>Buscar Ingrediente</h2>
                    <form method="GET" class="mb-4">
                        <input type="text" name="buscar" class="form-control" placeholder="Buscar ingrediente por nombre" value="<?php echo isset($_GET['buscar']) ? htmlspecialchars($_GET['buscar']) : ''; ?>">
                        <button type="submit" class="btn btn-primary mt-2">Buscar</button>
                    </form>

                    <h2>Lista de Ingredientes</h2>
                    <div class="row">
                        <?php
                        $busqueda = "";
                        if (isset($_GET['buscar']) && !empty(trim($_GET['buscar']))) {
                            $busqueda = $conn->real_escape_string($_GET['buscar']);
                            $sql = "SELECT * FROM ingredientes WHERE nombre LIKE '%$busqueda%' ORDER BY id DESC";
                        } else {
                            $sql = "SELECT * FROM ingredientes ORDER BY id DESC";
                        }

                        $ingredientes = $conn->query($sql);
                        while ($ingrediente = $ingredientes->fetch_assoc()) {
                        ?>
                            <div class="col-md-3 mb-4">
                                <div class="card h-100">
                                    <img src="uploads/<?php echo $ingrediente['imagen']; ?>" class="card-img-top" alt="Ingrediente">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $ingrediente['nombre']; ?></h5>
                                    </div>
                                    <div class="card-footer text-center bg-black">
                                        <a href="editar.php?id=<?php echo $ingrediente['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
                                        <a href="eliminar.php?id=<?php echo $ingrediente['id']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include("../includes/footer.php"); ?>
