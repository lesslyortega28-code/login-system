<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO tareas (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
$conexion->query($sql);

header("Location: dashboard.php");
?>