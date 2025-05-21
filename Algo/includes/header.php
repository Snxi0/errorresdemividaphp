<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRASAS DE ORO</title>
    

    <!--- BOOTSTRAP 5 --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/aside.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/home.css">
    <!--- FONT AWESOME  --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<body>

<nav class="navbar navbar-dark bg-black custom-naver fixed-top">
    <div class="imagen">
        <a href="../crud/inicio.php" class="navbar-brand"><img class="nav-imagen" src="../img/Brasas.png" alt=""></a>
    </div>
    
</nav>
<div class="underline"></div>







<?php
function esActivo($nombre) {
    global $activo;
    return ($activo == $nombre) ? 'active' : '';
}
?>
