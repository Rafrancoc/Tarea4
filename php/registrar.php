<?php
include 'conexion.php';
//Recibir los datos y almacenarlos en variables
$descripcion = $_POST["descripcion"];
$usuario = $_POST["usuario"];
$estado = $_POST["estado"];
//Consulta para insertar
$insertar = "INSERT INTO tb_tareas(descripcion, usuario, estado) VALUES ('$descripcion','$usuario', '$estado')";
//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error en el registro';
}else{
	echo 'Tarea registrada exitosamente';
}
//Cerrar conexion
mysqli_close($conexion);
?>