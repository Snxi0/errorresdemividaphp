<?php
$activo = 'ingredientes';
include('../includes/header.php');
?>
<?php include("../includes/session_cd.php") ?>




<div class="col py-3 custom-bd">

    <div class="container p-4 ">

        <div class="row">

            <div class="col-md-4">

                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert" id="show">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                    unset($_SESSION['message_type']);
                //limpia los datos que tengo en secion
            } ?> <!-- verificar que existen los datos guardados y mostrar mensaj-->

                <div class="card card-body bg-black">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-custom w-50 mt-3 custom-button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Agregar Ingredientes</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Ingredientes</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form action="crudIngredientes/guardarIngredientes.php" method="POST">

                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre del Ingrediente</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Descripcion del Ingrediente</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                name="descripcion" rows="3"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="cantidad" class="form-label">Cantidad</label>
                                            <input type="number" class="form-control" id="cantidad" name="cantidad"
                                                required>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="guardarIngrediente" class="btn btn-custom">Save
                                        changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

           <div class="col-md-8">
    <div class="table-responsive"> <!-- ✅ Contenedor que hace la tabla responsive -->
        <table class="table table-hover table-striped custom-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>CANTIDAD DISPONIBLE</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM ingredientes";
                $resultas = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($resultas)) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['descripcion'] ?></td>
                        <td><?php echo $row['cantidad_disponible'] ?></td>
                        <td>
                            <a href="crudIngredientes/deleteingredientes.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </a>
                            <a href="editarIngrediente.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm">
                                <i class="fas fa-marker"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
















        <?php include('../includes/footer.php'); ?>