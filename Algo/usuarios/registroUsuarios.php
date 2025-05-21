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
                            <i class="fs-4 bi-house"> Inicio</i> 
                            <span class="ms-1 d-none d-sm-inline text-white "></span>
                        </a>
                    </li>
                    <li>
                        <a href="../registro/table.php"  class="nav-link px-0 align-middle custom-icon <?= esActivo('platos') ?>">
                            <i class="icon fs-4 bi-fork-knife veo"> Platos</i> <span class="ms-1 d-none d-sm-inline text-white"></span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"> 
                        </ul>
                    </li>
                    <li>
                        <a href="../ingredientes/ingredientes.php" class="nav-link px-0 align-middle custom-icon <?= esActivo('ingredientes') ?>">
                            <i class="fs-4 bi bi-basket"> Ingredientes</i> <span class="ms-1 d-none d-sm-inline text-white"> </span></a>
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
                        <a href="#" class="nav-link px-0 align-middle custom-icon <?= esActivo('usuarios') ?>">
                            <i class="fs-4 bi-people"> Usuarios</i> <span class="ms-1 d-none d-sm-inline text-white"></span> </a>
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


        <!----------------------------------------- REGISTRO DE USUARIOS--------------------------------------->


        <div class="col py-3 custom-bd">

            <div class="container p-4 "> 

             <form action="crudUsuario/guardarUsuarios.php" method="POST">
        <div class="m-5">
            <div class="input-group">
                <span class="input-group-text">Nombre y Apellido </span> 
                        <input 
                            type="text" 
                            aria-label="First name" 
                            class="form-control" 
                            name="nombre">

                        <input 
                            type="text" 
                            aria-label="Last name" 
                            class="form-control" 
                            name="apellido">
                            <div class="invalid-feedback d-block" id="nombre-error">
                            </div>
                            <div class="invalid-feedback d-block" id="apellido-error">
                            </div>



            </div>
    

        </div>
        
        <div class="m-5">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Numero Cedula</span>

                <input  
                type="text"  
                class="form-control" 
                name="cedula">

            </div>
            <div class="invalid-feedback d-block" id="cedula-error"></div>
        </div>

        <div class="m-5">
            <div class="input-group">
                <span class="input-group-text">Contraseña</span>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="invalid-feedback d-block" id="password-error"></div>

        </div>

        <div class="m-5">
            <div class="input-group">
                <span class="input-group-text">Numero de telefono</span>
                <input type="number" class="form-control" name="telefono">
            </div>
            <div class="invalid-feedback d-block" id="telefono-error"></div>

        </div>

        <div class="m-5">
            <div class="input-group">
                <span class="input-group-text">Fecha de Nacimiento</span>
                <input type="date" aria-label="First name" class="form-control" name="fechaNacimiento">
            </div>
            <div class="invalid-feedback d-block" id="fecha-error"></div>
        </div>

        <div class="m-5">
        <div class="input-group">
        <label class="input-group-text">Genero</label>
        <select class="form-select" id="inputGroupSelect01" name="genero">
            <option selected>Elige</option>
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
        </select>
        </div>
        </div>

        <div class="form-group m-5">
            <label for="inputGroupSelect01">Selecciona un rol:</label>
            <select class="form-select" id="inputGroupSelect01" name="rol">
              <option selected>Elige</option>
                <option value="1">Administrador</option>
                <option value="2">Cajero</option>
            </select>
          </div>

  <div class="m-5">
    <button type="submit" name="guardarUsuario"class="btn btn-primary">Enviar</button>
  </div>
</form>








<?php	include("../includes/footer.php")?>




