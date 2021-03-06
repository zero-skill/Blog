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
    if (isset($_SESSION['update_usuario_completado'])) {
        $_SESSION['update_usuario_completado'] = null;
        unset($_SESSION['update_usuario_completado']);
        $deleted = true;
    }
    if (isset($_SESSION['error'])) {
        $_SESSION['error'] = null;
        unset($_SESSION['error']);
        $deleted = true;
    }
    if (isset($_SESSION['error-entrada'])) {
        $_SESSION['error-entrada'] = null;
        unset($_SESSION['error-entrada']);
        $deleted = true;
    }
    if (isset($_SESSION['error-categoria'])) {
        $_SESSION['error-categoria'] = null;
        unset($_SESSION['error-categoria']);
        $deleted = true;
    }
    return $deleted;
}

function obtenerCategorias($db) {
    $sql = "SELECT * FROM CATEGORIAS ORDER BY NOMBRE ASC";
    $categorias = mysqli_query($db, $sql);
    $result = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = $categorias;
    }
    return $result;
}

function obtenerCategoria($db, $id) {
    $sql = "SELECT * FROM CATEGORIAS WHERE ID=$id";
    $categorias = mysqli_query($db, $sql);
    $result = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = mysqli_fetch_assoc($categorias);
    }
    return $result;
}

function obtenerUltimasEntradas($db) {
    $sql = "SELECT E.*, C.NOMBRE AS CATEGORIA FROM ENTRADAS E "
            . "INNER JOIN CATEGORIAS C ON E.CATEGORIA_ID = C.ID "
            . "ORDER BY E.ID DESC LIMIT 4";
    $entradas = mysqli_query($db, $sql);
    $result = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $result = $entradas;
    }
    return $result;
}

function obtenerEntradas($db, $limit = null, $categoria = null,$busqueda=null) {
    $sql = "SELECT E.*, C.NOMBRE AS CATEGORIA FROM ENTRADAS E "
            . "INNER JOIN CATEGORIAS C ON E.CATEGORIA_ID = C.ID";
    if (!empty($busqueda)) {
        $sql .= " WHERE E.TITULO LIKE '%$busqueda%' OR E.DESCRIPCION LIKE '%$busqueda%'";
    }
    if (!empty($categoria)) {
        $sql .= " WHERE E.CATEGORIA_ID=$categoria";
    }
    $sql .= " ORDER BY E.ID DESC";
    if (!$limit) {
        $sql .= " LIMIT 4;";
    }
    //var_dump($sql);die();
    $entradas = mysqli_query($db, $sql);
    $result = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $result = $entradas;
    }
    return $result;
}

function obtenerEntrada($db, $id) {
    $sql = "SELECT E.*, C.NOMBRE AS CATEGORIA, CONCAT(U.NOMBRE,' ',U.APELLIDOS) AS 'USUARIO' FROM ENTRADAS E"
            . " INNER JOIN CATEGORIAS C ON E.CATEGORIA_ID = C.ID"
            . " INNER JOIN USUARIOS U ON E.USUARIO_ID = U.ID"
            . " WHERE E.ID = $id";
    $entrada = mysqli_query($db, $sql);
    $result = array();
    if ($entrada && mysqli_num_rows($entrada) >= 1) {
        $result = mysqli_fetch_assoc($entrada);
    }
    return $result;
}
