<?php

if (isset($_POST)) {
    require_once './includes/conexion.php';
    //RECOGER DATOS DEL FORM
    $titulo = isset($_POST['titulo'])? mysqli_real_escape_string($db,$_POST['titulo']):false;
    $descripcion = isset($_POST['descripcion'])? mysqli_real_escape_string($db,$_POST['descripcion']):false;
    $categoria=isset($_POST['categoria'])? (int) $_POST['categoria']:false;
    $usuario = $_SESSION['usuario']['ID'];
}
//ARRAY DE ERRORES
$error= array();
//VALIDAR DATOS DEL FORM
if (empty($titulo)){
    $error['titulo']= 'El titulo no es valido.';
}
if (empty($descripcion)){
    $error['descripcion']= 'La descripcion no es valida.';
}
if (empty($categoria)&&!is_numeric($categoria)){
    $error['categoria']= 'La categoria no es valida.';
}

$insert_entrada=false;
if (count($error)==0){
    $insert_entrada=true;
    $sql="INSERT INTO ENTRADAS VALUES(NULL,$usuario,$categoria,'$titulo','$descripcion',CURDATE());";
    $query= mysqli_query($db, $sql);
    header("Location: index.php");
}else{
    $_SESSION['error-entrada']=$error;
    header("Location: crear-entrada.php");
}
