<?php

// Corregir la sintaxis del DSN eliminando espacios no válidos
$dsn = 'mysql:host=localhost;port=3306;dbname=hulk';
$username = "root";
$password = ""; // Elimina el espacio dentro de las comillas

try {

    $conexion = new PDO($dsn, $username, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexio exitosa";

} catch (PDOException $e) {
    echo "error de conexion a la 8D".$e->getMessage();
    die();
}



?>;
