<?php
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('validar.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="vid-container">
        <video class="video" muted autoplay loop>
            <source src="../videos/carne4k.mp4">
        </video>
    </div>
    <div class="container" id="login">
        <div class="inicio">
            <h1>LOGIN</h1>
        </div>
        <div class="casillas">
            <form action="" method="post"> <!-- Se envía a sí misma -->
                <div class="input-group">
                    <input type="text" name="usuario" required>
                    <label>Cédula</label>
                </div>
                <div class="input-group">   
                    <input type="password" name="contraseña" required>
                    <label>Contraseña</label>
                </div>
                <button type="submit">Entrar</button>
            </form>
            <?php if (!empty($error)): ?>
                <p id="mensaje-error" style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>
</html>
