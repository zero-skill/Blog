<?php

if (isset($_POST)) {
    require_once './includes/conexion.php';
    //RECOGER DATOS DEL FORM
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, trim($_POST['nombre'])) : false;
}
//ARRAY DE ERRORES
$error = array();
//VALIDAR LOS DATOS DEL FORM
//VALIDAR NOMBRE
if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
    $nombre_validate = true;
} else {
    $nombre_validate = false;
    $error['nombre'] = 'el nombre no es valido';
}

$insert_categoria = false;
if (count($error) == 0) {
    $insert_categoria = true;
    $sql = "INSERT INTO CATEGORIAS VALUES(NULL,'$nombre');";
    $query= mysqli_query($db, $sql);
}else{
    $_SESSION['error-categoria']=$error;
}
header("Location: index.php");
