<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión MySQL</title>
    <style>
        th, td{
            border: solid 1px;
        }
    </style>
</head>
<body>
    <?php
        // PASO 1: Creamos un objeto de conexión con las credenciales hacia la base de datos remota
        $mysqli = new mysqli("localhost", "hipering_admon_empresarial", "Data.2023", "hipering_admon_empresarial");

        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            exit();
        }
        echo $mysqli->host_info . "<hr>";

        $id_entidad = 2; // Asegúrate de que este valor sea válido en 'logistica'

        // Verificamos si el valor de 'id_entidad' existe en la tabla 'logistica' antes de la inserción
        $check_query = "SELECT id_entidad FROM logistica WHERE id_entidad = $id_entidad";
        $check_result = $mysqli->query($check_query);
       
        $rol = 1;

        if ($check_result->num_rows > 0) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $user = $_POST['user'];
            $password = $_POST['password'];
            $telefono = $_POST['telefono'];
        
             
             // Obtener el nombre del formulario
            
            // Insertamos el nombre recibido desde el formulario en la base de datos
            $sql = "INSERT INTO usuario_cuenta (id_entidad, rol, nombre, apellidos, user, password, telefono) VALUES ($id_entidad, $rol, '$nombre', '$apellidos', '$user', '$password', '$telefono')";

            if ($mysqli->query($sql)) {
                echo 'Inserción realizada';
            } else {
                echo "Falló la inserción de datos: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        } else {
            echo "El valor de 'id_entidad' no existe en la tabla 'logistica'.";
        }

        $mysqli->close();
    ?>
</body>
</html>
