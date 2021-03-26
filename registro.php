<?php

if (isset($_POST)) {
    require_once './includes/conexion.php';
    if (!isset($_SESSION)) {
        session_start();
    }
    //RECOGER DATOS DEL FORM REGISTRO
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, trim($_POST['nombre'])) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, trim($_POST['apellidos'])) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, trim($_POST['password'])) : false;

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
    //VALIDAR PASSWORD
    if (!empty($password)) {
        $password_validate = true;
    } else {
        $password_validate = false;
        $error['password'] = 'Debes ingresar una contraseña';
    }

    $insert_user = false;
    if (count($error) == 0) {
        $insert_user = true;

        //CIFRAR LA PASSWORD 4 VECES
        $password_secure = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        //INSERTA USUARIO EN BASE DE DATOS
        $sql = "INSERT INTO USUARIOS VALUES(null,'$nombre','$apellidos','$email','$password_secure',CURDATE())";
        $query = mysqli_query($db, $sql);
        if ($query) {
            $_SESSION['registro_completado'] = "El registro se ha completado con exito";
        } else {
            $_SESSION['error']['general'] = "Fallo al guardar el usuario. " . mysqli_error($db);
        }
    } else {
        //CREA UNA SESION
        $_SESSION['error'] = $error;
    }
    header('Location: index.php');
    //var_dump($error);
}
