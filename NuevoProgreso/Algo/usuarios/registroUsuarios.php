<?php
$activo = 'agregar_usuario';
include('../includes/header.php');
include("../includes/session_cd.php");
$activo = 'usuarios';
?>


<div class="col py-3 custom-bd">
    <div class="container p-4">
        <form action="crudUsuario/guardarUsuarios.php" method="POST">
        
            <!-- Datos Personales -->
            <div class="form-section mb-0">
                <h5 class="mb-4">🧑 Datos personales</h5>

                <div class="row mb-3">
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control custom-back" name="nombre" id="nombre" placeholder="Nombre">
                        <label for="nombre"><i class="bi bi-person-fill"></i> Nombre</label>
                        <div class="invalid-feedback d-block" id="nombre-error"></div>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control custom-back" name="apellido" id="apellido" placeholder="Apellido">
                        <label for="apellido"><i class="bi bi-person-fill"></i> Apellido</label>
                        <div class="invalid-feedback d-block" id="apellido-error"></div>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control custom-back" name="cedula" id="cedula" placeholder="Número de cédula">
                    <label for="cedula"><i class="bi bi-credit-card-2-front-fill"></i> Número de cédula</label>
                    <div class="invalid-feedback d-block" id="cedula-error"></div>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control custom-back" name="telefono" id="telefono" placeholder="Teléfono">
                    <label for="telefono"><i class="bi bi-telephone-fill"></i> Teléfono</label>
                    <div class="invalid-feedback d-block" id="telefono-error"></div>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control custom-back" name="fechaNacimiento" id="fechaNacimiento" placeholder="Fecha de nacimiento">
                    <label for="fechaNacimiento"><i class="bi bi-calendar-fill"></i> Fecha de nacimiento</label>
                    <div class="invalid-feedback d-block" id="fecha-error"></div>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select custom-back" name="genero" id="inputGroupSelect01">
                        <option value="" selected>Elige</option>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                    </select>
                    <label for="inputGroupSelect01"><i class="bi bi-gender-ambiguous"></i> Género</label>
                </div>
            </div>

            <div class="form-section pt-0 mb-0 pb-3">
                <h5 class="mb-4">🔐 Credenciales</h5>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control custom-back" name="password" id="password" placeholder="Contraseña">
                    <label for="password"><i class="bi bi-lock-fill"></i> Contraseña</label>
                    <div class="invalid-feedback d-block" id="password-error"></div>
                </div>

                <div class="form-floating mb-0">
                    <select class="form-select" name="rol" id="inputGroupSelect01">
                        <option value="" selected>Elige</option>
                        <option value="1">Administrador</option>
                        <option value="2">Cajero</option>
                    </select>
                    <label for="inputGroupSelect01"><i class="bi bi-person-gear"></i> Rol</label>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" name="guardarUsuario" class="btn btn-warning text-dark fw-bold custom-bt">
                    <i class="bi bi-check-circle-fill"></i> Enviar
                </button>
            </div>
        </form>
    </div>
</div>



      <?php include('../includes/footer.php'); ?>
