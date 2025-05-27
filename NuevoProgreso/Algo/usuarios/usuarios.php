<?php
$activo = 'usuarios';
include('../includes/header.php');
?>
<?php	include("../includes/session_cd.php")?>
        <div class="col py-3 custom-bd">

            <div class="container p-4 ">
    <head>
        <title>hola</title>
    </head>




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



      <?php include('../includes/footer.php'); ?>





