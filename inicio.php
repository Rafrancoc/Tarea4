<?php


// confirmar sesion

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="loggedin">
<style>
        *{
            box-sizing: border-box;
        }
        section{
            max-width: 600px;
            margin: auto;
            text-align: center;
            border: 1px solid #000;
            border-radius: 5px;
            padding: 10px;
            background-color: #ffc107;
        }
        input{
            width: 70%;
            padding: 10px;
        }
        button{
            width: 20%;
            margin: 15px 0;
            padding: 15px;
            border-radius: none;
            cursor: pointer;
            background-color: #000;
            color: aliceblue;
        }
        ul{
            text-align: left;
        }
        ul li{
            border-bottom: 1px dashed #333;
        }
        span{
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: firebrick;
            text-align: center;
            color: #fff;
            margin: 0 10px;
            cursor: pointer;
        }
        span:hover{
            background-color: darkred;
        }
    </style>
    <nav class="navtop">
        <h1 style="color:white;">Sistema</h1>
        <a href="Tareas.php" style="color:white;"><i class="fas fa-user-circle"></i>Listado de tareas</a>
        <a href="perfil.php" style="color:white;"><i class="fas fa-user-circle"></i>Información de Usuario</a>
        <a href="cerrar-sesion.php" style="color:white;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
    </nav>
    
    <div class="content">
        <h2>Página de Inicio</h2>
        <p>Hola de nuevo, <?= $_SESSION['name'] ?> !!!</p>
    </div>
    <form action="php/registrar.php" method="post" class="form-register">
        <section>
            <h1>Registro de tareas</h1>
            <p>Descripcion: </p>
            <input type="text" id="descripcion" name="descripcion" placeholder="Tarea" class="input-48" required>
            <p>Usuario: </p>
            <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input-48">
            <p>Estado: </p>
            <input type="text" id="estado" name="estado" placeholder="Estado" class="input-48">
            <br>
            <button id="agregar">Agregar</button>
            <ul id="listado">

            </ul>
            <a href="index.html">
                <button class="boton">Regresar</button>
            </a>
            
        </section>
    </form>
    <script src="js/script.js"></script>
</body>

</html>