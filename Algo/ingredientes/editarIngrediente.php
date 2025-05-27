<?php


include("../crud/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM ingredientes WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $description = $row['descripcion'];
        $cantidad_disponible = $row['cantidad_disponible'];
    }
}

if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $description = $_POST['descripcion'];
    $cantidad_disponible = $_POST['cantidad_disponible'];

    $query = "UPDATE ingredientes SET nombre = '$nombre', descripcion = '$description', cantidad_disponible = '$cantidad_disponible' WHERE id = $id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Ingrediente actualizada correctamente';
    $_SESSION['message_type'] = 'info';

    header("Location: ingredientes.php");
    exit;
}

?>




<?php
$activo = 'registro-platos';
include('../includes/header.php');
?>
<div class="container p-4">
    <div class="col py-3 custom-bd">
        <div class="row">
            <div class="col md-4 mx-auto">
                <div class="card card-body bg-black">
                    <form action="?id=<?php echo $_GET['id']; ?>" method="POST">

                        <div class="form-group">
                            <label>Actualiza el nombre</label>
                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control mt-1">
                        </div>
                        <div class="form-group">
                            <label>Actualizar descripcion</label>
                            <textarea name="descripcion" rows="2"
                                class="form-control mt-1"><?php echo $description; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Actualiza cantidad</label>
                            <input type="number" name="cantidad_disponible" value="<?php echo $cantidad_disponible; ?>"
                                class="form-control mt-1">
                        </div>
                        <button class="btn btn-custom w-100 mt-3" name="actualizar">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.php") ?>