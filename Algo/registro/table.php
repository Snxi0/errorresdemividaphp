<?php
$activo = 'platos';
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
                    <form action="../crud/save_task.php" method="POST">
                        <div class="form-group mt-3 ">
                            <label>Titulo de registro</label>
                            <input type="text" name="title" class="form-control" autofocus>
                        </div>
                        <div class="form-group mt-3">
                            <label>Descripcion de registro</label>
                            <textarea name="description" rows="2" class="form-control"></textarea>
                        </div>
                        <input type="submit" class="btn btn-custom w-100 mt-3" name="save_task" value="Enviar">
                    </form>
                </div>
            </div>

            <div class="col md-8 ">
                <table class="table table-hover table-striped  custom-table">
                    <thead>
                        <tr>
                            <th>TITULO</th>
                            <th>DESCRIPCION</th>
                            <th>FECHA DE CREACION</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM tarea";
                        $resultas = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($resultas)) { ?>
                            <tr>
                                <td> <?php echo $row['titulo'] ?></td>
                                <td> <?php echo $row['descripcion'] ?></td>
                                <td> <?php echo $row['crearted_at'] ?></td>
                                <td>
                                    <a href="../crud/edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-marker "></i>
                                    </a>
                                    <a href="../crud/delete_task.php?id=<?php echo $row['id'] ?>"
                                        class="btn btn-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>








        <?php include('../includes/footer.php'); ?>