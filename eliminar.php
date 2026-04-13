<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM tareas WHERE id=$id";
$conexion->query($sql);

header("Location: dashboard.php");
?>