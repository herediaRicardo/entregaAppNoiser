<?php

session_start();

$comentario = $_POST['comentario'];
$usernameid = $_SESSION['username_id'];
$usernameint = (int)$usernameid;

if (isset($_POST['proyecto1'])) {
    $proyecto = 1;
    (int)$proyecto;
}

if (isset($_POST['proyecto2'])) {
    $proyecto = 2;
    (int)$proyecto;
}

if (isset($_POST['proyecto3'])) {
    $proyecto = 3;
    (int)$proyecto;
}

if (isset($_POST['proyecto4'])) {
    $proyecto = 4;
    (int)$proyecto;
}
if (isset($_POST['proyecto5'])) {
    $proyecto = 5;
    (int)$proyecto;
}

if (isset($_POST['proyecto6'])) {
    $proyecto = 6;
    (int)$proyecto;
}

$conexion = mysqli_connect("localhost", "root", "", "parcial-pt3");

$comentario = mysqli_real_escape_string($conexion, $comentario);
$res = mysqli_query($conexion, 'INSERT INTO comentarios(TEXTO, FECHA, FK_USUARIO, FK_PRODUCCION) VALUES("'.$comentario.'", NOW(), "'.$usernameint.'", "'.$proyecto.'")');
if($res){
    switch($proyecto){
        case 1:
        header("Location: proyecto-1.php");
        break;

        case 2:
        header("Location: proyecto-2.php");
        break;
    
        case 3:
        header("Location: proyecto-3.php");
        break;

        case 4:
        header("Location: proyecto-4.php");
        break;

        case 5:
        header("Location: proyecto-5.php");
        break;
        
        case 6:
        header("Location: proyecto-6.php");
        break;
    }
}

mysqli_close($conexion);

?>