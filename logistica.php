<?php

require_once 'conexion.php';

$resultado = $mysqli->query("SELECT * FROM logistica");

if (!$resultado) {
    echo "Error en la consulta: " . $mysqli->error;
    exit;
}

echo '<hr>';
echo "Número de filas: " . $resultado->num_rows;
echo '<hr>';

echo '<hr>';
echo "Estados a repartir...\n";
echo '<table border="1">
        <tr>
            <th>Id_identidad</th>
            <th>ciudad_inicio</th>
            <th>ciudad_final</th>
            <th>dias</th>
            <th>kilometros</th>
            
        </tr>';

while ($fila = $resultado->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $fila['id_identidad'] . '</td>';
    echo '<td>' . $fila['ciudad-inicio'] . '</td>';
    echo '<td>' . $fila['ciudad-final'] . '</td>';
    echo '<td>' . $fila['dias'] . '</td>';
    echo '<td>' . $fila['kilometros'] . '</td>';
    echo '</tr>';
}

echo '</table>';


// Cerrar la conexión a la base de datos
$mysqli->close();

?>
