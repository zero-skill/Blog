<?php

if (isset($_POST)) {
    require_once './includes/conexion.php';
    //RECOGER DATOS DEL FORM
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int) $_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['ID'];
}
//ARRAY DE ERRORES
$error = array();
//VALIDAR DATOS DEL FORM
if (empty($titulo)) {
    $error['titulo'] = 'El titulo no es valido.';
}
if (empty($descripcion)) {
    $error['descripcion'] = 'La descripcion no es valida.';
}
if (empty($categoria) && !is_numeric($categoria)) {
    $error['categoria'] = 'La categoria no es valida.';
}

$insert_entrada = false;
if (count($error) == 0) {
    if (isset($_GET['update'])) {
        $entrada_id= $_GET['update'];
        $usuario_id=$_SESSION['usuario']['ID'];
        $sql = "UPDATE ENTRADAS SET TITULO='$titulo', DESCRIPCION='$descripcion', CATEGORIA_ID=$categoria "
                . "WHERE ID= $entrada_id AND USUARIO_ID=$usuario_id";
    } else {
        $sql = "INSERT INTO ENTRADAS VALUES(NULL,$usuario,$categoria,'$titulo','$descripcion',CURDATE());";
    }
    $insert_entrada = true;
    $query = mysqli_query($db, $sql);
    header("Location:index.php");
} else {
    $_SESSION['error-entrada'] = $error;
    if (isset($_GET['update'])){
       header("Location: update-entrada.php?id=".$_GET['update']); 
    }else{
        header("Location: crear-entrada.php");
    }
    
}
