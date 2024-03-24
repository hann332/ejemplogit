<?php
// Establecer la conexión a la base de datos
$mysqli = new mysqli("localhost", "hipering_admon_empresarial", "Data.2023", "hipering_admon_empresarial");

// Verificar si la conexión tuvo éxito
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit; // Salir del script si la conexión falla
}

echo $mysqli->host_info . "\n";

?>
