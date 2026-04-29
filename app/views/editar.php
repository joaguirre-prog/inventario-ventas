
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>

<h2>Editar Producto</h2>

<form method="POST" action="index.php?accion=actualizar">
    <input type="hidden" name="id" value="<?= $id ?>">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required><br><br>

    <label>Precio:</label><br>
    <input type="number" name="precio" value="<?= htmlspecialchars($producto['precio']) ?>" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" value="<?= htmlspecialchars($producto['stock']) ?>" required><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="index.php">⬅ Volver</a>

</body>
</html>

