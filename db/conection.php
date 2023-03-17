<?php

// Declaramos las credenciales de conexión
$host = "localhost"; /* Nombre de host */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "datatables"; /* Nombre de la base de datos */

// Creamos la conexión MySQL
$db = new mysqli($host, $user, $password,$dbname);
// Verificamos la conexión
if (!$db)
    die("Conexion fallida: " . mysqli_connect_error());