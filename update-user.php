<?php

if (isset($_POST)) {
    require_once './includes/conexion.php';
}

//RECOGER DATOS DEL FORM 
$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, trim($_POST['nombre'])) : false;
$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, trim($_POST['apellidos'])) : false;
$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

//ARRAY DE ERRORES
$error = array();
//VALIDAR LOS DATOS DEL FORM
//VAIDAR NOMBRE
if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
    $nombre_validate = true;
} else {
    $nombre_validate = false;
    $error['nombre'] = 'el nombre no es valido';
}
//VALIDAR APELLIDOS
if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
    $apellidos_validate = true;
} else {
    $apellidos_validate = false;
    $error['apellidos'] = 'los apellidos no son validos';
}
//VALIDAR EMAIL
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_validate = true;
} else {
    $email_validate = false;
    $error['email'] = 'el email no es valido';
}

$insert_user = false;
if (count($error) == 0) {
    $usuario = $_SESSION['usuario'];
    $insert_user = true;
    $sql = "SELECT ID, EMAIL FROM USUARIOS WHERE EMAIL='$email';";
    $isset_email = mysqli_query($db, $sql);
    $isset_user = mysqli_fetch_assoc($isset_email);
    if ($isset_user['ID'] == $usuario['ID'] || empty($isset_user)) {

        //UPDATE USUARIO EN BASE DE DATOS
        $sql = "UPDATE USUARIOS SET "
                . "NOMBRE='$nombre', "
                . "APELLIDOS='$apellidos', "
                . "EMAIL='$email' "
                . "WHERE ID=" . $usuario['ID'] . ";";
        $query = mysqli_query($db, $sql);
        if ($query) {
            $_SESSION['usuario']['NOMBRE'] = $nombre;
            $_SESSION['usuario']['APELLIDOS'] = $apellidos;
            $_SESSION['usuario']['EMAIL'] = $email;
            $_SESSION['update_usuario_completado'] = "La actualización de sus datos se ha completado con exito";
        } else {
            $_SESSION['error']['update_usuario'] = "Fallo al actualizar datos del usuario. " . mysqli_error($db);
        }
    } else {
        $_SESSION['error']['update_usuario'] = "El email que intentas actualizar ya existe. ";
    }
} else {
//CREA UNA SESION
    $_SESSION['error'] = $error;
}

header('Location: datauser.php');
//var_dump($error);



