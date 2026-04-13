<?php
include("conexion.php");

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";

if ($conexion->query($sql) === TRUE) {
    header("Location: index.html");
} else {
    echo "Error al registrar";
}
?>