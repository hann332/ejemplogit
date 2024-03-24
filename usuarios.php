<?php

require_once 'conexion.php';

$resultado = $mysqli->query("SELECT * FROM usuarios");

if (!$resultado) {
    echo "Error en la consulta: " . $mysqli->error;
    exit;
}

echo '<hr>';
echo "Número de filas: " . $resultado->num_rows;
echo '<hr>';

echo '<hr>';
echo "Mostrando productos...\n";
echo '<table border="1">
        <tr>
            <th>Id usuario</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>dinero digital</th>
            
        </tr>';

while ($fila = $resultado->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $fila['id_usuario'] . '</td>';
    echo '<td>' . $fila['usuario'] . '</td>';
    echo '<td>' . $fila['password'] . '</td>';
    echo '<td>' . $fila['dinero_digital'] . '</td>';
    echo '</tr>';
}

echo '</table>';


// Cerrar la conexión a la base de datos
$mysqli->close();

?>
