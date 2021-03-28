<?php
require_once './includes/conexion.php';
//session_start();
if (isset($_SESSION['usuario']) && isset($_GET['id'])) {
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['ID'];
    $sql = "DELETE FROM ENTRADAS WHERE USUARIO_ID=$usuario_id AND ID=$entrada_id";
    $query = mysqli_query($db, $sql);
    //var_dump(mysqli_error($query));die();
}
header("Location: index.php");
