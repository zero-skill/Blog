<?php

function mostrarError($error, $campo) {
    $alert = '';
    if (isset($error[$campo]) && !empty($campo)) {
        $alert = "<div class='alerta alerta-error'>" . $error[$campo] . '</div>';
    }
    return $alert;
}

function borrarError() {
    $_SESSION['error'] = null;
    $deleted = session_unset();
    return $deleted;
}
