<?php
require 'conexion.php'; 

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="formulario.css">
</head>

<body class="cover" style="background: linear-gradient(to right,#FFFFFF, #FFFFFF);">

<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">


<div class="input-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="input-container">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']; ?>" required>
        <i class="fa-solid fa-user"></i>
    </div>
</div>

<div class="input-group">
    <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
    <div class="input-container">
    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']; ?>" required>
        <i class="fa-solid fa-user"></i>
    </div>
</div>

<div class="input-group">
    <label for="user" class="col-sm-2 control-label">Correo</label>
    <div class="input-container">
    <input type="email" class="form-control" id="user" name="user" placeholder="user" value="<?php echo $row['user']; ?>" required>
    <i class="fa-solid fa-envelope"></i>
    </div>
</div>

<div class="input-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="input-container">
    <input type="password" class="form-control" id="password" name="password" placeholder="password" value="<?php echo $row['password']; ?>" required>
    <i class="fa-solid fa-lock"></i>
    </div>
</div>

<div class="input-group">
    <label for="telefono" class="col-sm-2 control-label">Telefono</label>
    <div class="input-container">
    <input type="telefono" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']; ?>" required>
        <i class="fa-solid fa-user"></i>
    </div>
</div>




    <center><div class="form-group">

    <div class="col-sm-offset-2 col-sm-10">

        <a href="login.html" class="btn btn-default">Regresar</a>

        <button type="submit" class="btn btn-default">Guardar</button>

    </div></center>




</div>

</form>

</div>



			


	</body>

</html>