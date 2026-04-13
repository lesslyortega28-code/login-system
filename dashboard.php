<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
}

$resultado = $conexion->query("SELECT * FROM tareas");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
  <h2>Bienvenida</h2>
  <p><?php echo $_SESSION['usuario']; ?></p>

  <h3>Agregar tarea</h3>
  <form action="agregar.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre tarea" required>
    <input type="text" name="descripcion" placeholder="Descripción" required>
    <button type="submit">Agregar</button>
  </form>

  <h3>Lista de tareas</h3>

  <?php while($fila = $resultado->fetch_assoc()): ?>
    <div class="task">
      <strong><?php echo $fila['nombre']; ?></strong>
      <p><?php echo $fila['descripcion']; ?></p>

      <a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
    </div>
  <?php endwhile; ?>

  <br>
  <a href="logout.php"><button>Cerrar sesión</button></a>
</div>

</body>
</html>