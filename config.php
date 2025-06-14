<?php

/**
 * Conexión a base de datos de MySQL con PHP
 *
 * @author mroblesdev
 * @link https://github.com/mroblesdev/server-side-php
 * @license: MIT
 */


// Creando una nueva conexión a la base de datos.
$conn = new mysqli("localhost","root", "password", "asistencia_proyecto");

// Comprobando si hay un error de conexión.
if ($conn->connect_error) {
    echo 'Error de conexion ' . $conn->connect_error;
    exit;
}
