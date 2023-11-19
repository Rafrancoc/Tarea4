<?php
$conexion = mysqli_connect("localhost", "root", "","bd_tareas");
if (!$conexion){
	echo 'Error al conectar en la base de datos';
}
else{
	echo 'Conectado exitosamente, ';
}
?>