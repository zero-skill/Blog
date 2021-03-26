<?php

//INICIAR SESION Y CONEXION A LA DATABASE
require_once './includes/conexion.php';
//RECOGER DATOS DE FORMULARIO 
if (isset($_POST)) {
    //BORRAR ERROR ANTIGUO
    if ($_SESSION['error_login']) {
        unset($_SESSION['error_login']);
    }
    //RECOJO DATOS DEL FORMULARIO
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    //CONSULTA PARA COMPROBAR LAS CREDENCIALES DEL USUARIO
    $sql = "SELECT * FROM USUARIOS WHERE EMAIL='$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        //COMPROBAMOS LA CONTRASEÑA
        $verify = password_verify($password, $usuario['PASSWORD']);
        if ($verify) {
            //UTILIZAR SESION PARA GUARDAR LOS DATOS DEL USUARIO LOGUEADO
            $_SESSION['usuario'] = $usuario;
        } else {
            //SI ALGO FALLA, ENVIA SESION CON EL FALLO
            $_SESSION['error_login'] = 'Login incorrecto';
        }
    } else {
        //MENSAJE DE ERROR
        $_SESSION['error_login'] = 'Login incorrecto!';
    }
}

//REDIRECT
header('Location: index.php');






