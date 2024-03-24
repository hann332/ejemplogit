<?php

require_once 'conexion.php';

$resultado = $mysqli->query("SELECT * FROM productos");

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
            <th>ID Productos</th>
            <th>Nombre</th>
            <th>Existencia en almacen</th>
            <th>Precio</th>
            <th>Genero</th>
            <th>URL</th>
        </tr>';

while ($fila = $resultado->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $fila['id_productos'] . '</td>';
    echo '<td>' . $fila['nombre'] . '</td>';
    echo '<td>' . $fila['existencia_almacen'] . '</td>';
    echo '<td>' . $fila['precio'] . '</td>';
    echo '<td>' . $fila['genero'] . '</td>';
    echo '<td>' . $fila['url'] . '</td>';
    echo '</tr>';
}

echo '</table>';


// Cerrar la conexión a la base de datos
$mysqli->close();

?>