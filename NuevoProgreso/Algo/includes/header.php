    <?php include("../crud/db.php") ?><!--apenas inicie la apliacion empice a conectar la base de datos-->
    <?php	include("session_cd.php")?>

  
     

    <!--- funciones globales--->

<?php

$titulos = [
    'inicio' => 'Inicio',
    'platos' => 'Platos',
    'ingredientes' => 'Ingredientes',
    'usuarios' => 'Usuarios',
    'agregar_usuario' => 'Agregar Usuario',
    'perfil' => 'Perfil',
    'configuracion' => 'Configuracion',
];

$titulo_seccion = isset($titulos[$activo]) ? $titulos[$activo] : '';

$titulo_base = "BRASAS DE ORO";

// Si existe título de sección, lo concatenamos
if ($titulo_seccion != '') {
    $titulo_completo = $titulo_base . " | " . $titulo_seccion;
} else {
    $titulo_completo = $titulo_base;
}
?>


    <?php
    function esActivo($nombre) {
        global $activo;
        return ($activo == $nombre) ? 'active' : '';
    }
    ?>

    <?php
    $id = $_SESSION['id_user'];
        $sql = "SELECT * FROM usuarios WHERE id_user = $id";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
    ?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titulo_completo; ?></title>

        <link rel="icon" href="../img/icon.png" type="image/jpeg">
        

        <!--- BOOTSTRAP 5 --->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="../css/profile.css">
        <link rel="stylesheet" href="../css/table.css">
        <link rel="stylesheet" href="../css/aside.css">
        <link rel="stylesheet" href="../css/nav.css">
        <link rel="stylesheet" href="../css/home.css">
        <!--- FONT AWESOME  --->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

    <nav class="navbar navbar-dark bg-black custom-naver fixed-top">
        <div class="imagen">
            <a href="../crud/inicio.php" class="navbar-brand"><img class="nav-imagen" src="../img/Brasas.png" alt=""></a>
        </div>
        
    </nav>
    <div class="underline"></div>
    



    <div class="container-fluid ">
        <div class="row flex-nowrap w-100">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 custom-aside">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 custom-bar">
            
                    <ul class="nav nav-pills flex-column  align-items-center align-items-sm-start custom-ul" id="menu">
                        <li class="nav-item">
                            <a href="../crud/inicio.php" class="nav-link align-middle px-0 custom-icon <?= esActivo('inicio') ?>">
                                <i class="fs-4 bi-house"> </i> 
                                <span class="ms-1 d-none d-sm-inline">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="../registro/table.php"  class="nav-link px-0 align-middle custom-icon <?= esActivo('platos') ?>">
                                <i class="icon fs-4 bi-fork-knife"> </i> <span class="ms-1 d-none d-sm-inline">Platos</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"> 
                            </ul>
                        </li>
                        <li>
                            <a href="../ingredientes/ingredientes.php" class="nav-link px-0 align-middle custom-icon <?= esActivo('ingredientes') ?>">
                                <i class="fs-4 bi bi-basket"> </i> <span class="ms-1 d-none d-sm-inline "> Ingredientes</span></a>
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
                                <i class="fs-4 bi-people"> </i> <span class="ms-1 d-none d-sm-inline">Usuarios</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4 ">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../confi-perfil/uploads/<?php echo $user['imagen']; ?>" alt="hugenerd" class="rounded-circle perfil-img">
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


    </div>

</div>





