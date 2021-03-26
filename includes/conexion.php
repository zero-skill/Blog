<?php

//CONEXION 
$server = "localhost";
$user = 'root';
$pass = '';
$database = 'blog_master';
$db = mysqli_connect($server, $user, $pass, $database);

mysqli_query($db, "SET NAMES 'utf8'");

//INICIAR LA SESION
session_start();