<?php

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bd_tareas';

// conexion a la base de datos

$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de tareas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="loggedin">
    <nav class="navtop">
        <h1 style="color:white;">Sistema de registro de tareas</h1>
        <a href="inicio.php" style="color:white;">Inicio</a>
        <a href="Tareas.php" style="color:white;"><i class="fas fa-user-circle"></i>Listado de tareas</a>
        <a href="perfil.php" style="color:white;"><i class="fas fa-user-circle"></i>Información de Usuario</a>
        <a href="cerrar-sesion.php" style="color:white;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
    </nav>
    <div class="content">

        <h2>Listado de tareas</h2>
        <div>
            <p>
                La siguiente es la información de tareas registradas
            </p>
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <th>Descripcion de la tarea    </th>
                    <th>Estado</th>
                </tr>
            <?php
                $sql=('SELECT descripcion, estado FROM tb_tareas');
                $result=mysqli_query($conexion,$sql);

                while ($mostrar=mysqli_fetch_array($result)){
                    
                ?>
                <tr>
                    <td><?php echo $mostrar['descripcion']?></td>
                    <td><?php echo $mostrar['estado']?></td>
                </tr>
            <?php
                }
                
            ?>
            </table>
        </div>
    </div>