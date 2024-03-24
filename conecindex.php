<?php

// Conectarse a la base de datos

$host = "localhost";
$user = "hipering_admon_empresarial";
$password = "Data.2023";
$dbname = "hipering_admon_empresarial";
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar si la petición viene del formulario de inicio de sesión

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}


if ($conn->connect_error) {

    die("Error al conectar a la base de datos: " . $conn->connect_error);

}


$user = $conn->real_escape_string($_POST["user"]);
$password = $conn->real_escape_string($_POST["password"]);


$sql = "SELECT * FROM usuario_cuenta WHERE user='$user' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {

    // Si el usuario y la contraseña son válidos, obtener los datos del usuario
    $row = $result->fetch_assoc();

    $id = $row['id_usuario'];
    $nombre = $row['user'];
    $dinero_digital = $row['dinero_digital'];


    // Crear una sesión para el usuario y guardar los datos en variables de sesión
    session_start();
    $id = $row['id_usuario'];
    $nombre = $row['user'];
    $dinero_digital = $row['dinero_digital'];

    // Redirigir al usuario a eventos.php
    header("Location: index.html");

    exit();

} else {

    // Si el usuario y la contraseña no son válidos, mostrar un mensaje de error

    echo '<script language="javascript">alert("DATOS INCORRECTOS VERIFICALOS ");window.location.href="login.html"</script>';

    exit();

}

$conn->close();

?>

