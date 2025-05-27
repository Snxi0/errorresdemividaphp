<?php 


include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM tarea WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $title = $row['titulo'];
        $description = $row['descripcion'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $title = $_POST['titulo'];
    $description = $_POST['description'];

    $query = "UPDATE tarea set titulo = '$title', descripcion= '$description' WHERE id = $id";
    mysqli_query($conn, $query);
    $_SESSION['message']= 'Tarea actualizada correctamente';
    $_SESSION['message_type'] = 'info';

    header("Location: ../registro/table.php");

}


?>


<?php include("../includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col md-4 mx-auto">
            <div class="card card-body bg-black">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <label>Actualiza el titulo</label>
                        <input type="text" name="titulo" value="<?php echo $title; ?>" class="form-control mt-1"  >
                    </div>
                    <div class="form-group">
                        <label>Actualizar descripcion</label>
                        <textarea name="description" rows="2" class="form-control mt-1"><?php $description; ?></textarea>
                    </div>
                    <button class="btn btn-custom w-100 mt-3" name="update">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../includes/footer.php")?>