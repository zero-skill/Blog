<?php
session_start();
if (isset($_POST)) {
    //RECOGER DATOS DEL FORM REGISTRO
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

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
    if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_validate = true;
    } else {
        $email_validate = false;
        $error['email'] = 'el email no es valido';
    }
    //VALIDAR PASSWORD
    if (!empty($password)) {
        $password_validate=true;
    } else {
        $password_validate=false;
       $error['password']= 'Debes ingresar una contraseña';
    }
    
    $insert_user=false;
    if (count($error)==0){
        $insert_user=true;
        //INSERTA USUARIO EN BASE DE DATOS
        
    }else{
        //CREA UNA SESION
        $_SESSION['error']=$error;
        header('Location: index.php');
    }
    //var_dump($error);
}
