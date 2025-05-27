<?php
$activo = 'configuracion';
include('../includes/header.php');
?>
<?php include("../includes/session_cd.php"); ?>


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

