<?php

function mostrarError($error, $campo) {
    $alert = '';
    if (isset($error[$campo]) && !empty($campo)) {
        $alert = "<div class='alerta alerta-error'>" . $error[$campo] . '</div>';
    }
    return $alert;
}

function borrarError() {
    $deleted = false;
    if (isset($_SESSION['registro_completado'])) {
        $_SESSION['registro_completado'] = null;
        unset($_SESSION['registro_completado']);
        $deleted = true;
    }
    if (isset($_SESSION['error'])) {
        $_SESSION['error'] = null;
        unset($_SESSION['error']);
        $deleted = true;
    }
    
    return $deleted;
}