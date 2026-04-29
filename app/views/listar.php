
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
</head>
<body>

<h2>Inventario</h2>

<!-- 🔥 BOTÓN DE VENTAS -->
<a href="index.php?accion=ventas">🧾 Ir a Ventas</a>

<h3>Agregar Producto</h3>

<form method="POST" action="index.php?accion=crear">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" name="precio" placeholder="Precio" min="0" required>
    <input type="number" name="stock" placeholder="Stock" min="0" required>
    <button type="submit">Guardar</button>
</form>

<h3>Lista de Productos</h3>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acción</th>
    </tr>

    <?php if (!empty($productos) && is_array($productos)): ?>
        <?php foreach ($productos as $index => $p): ?>
            <?php if (!is_array($p)) continue; ?>
            <tr>
                <td><?= htmlspecialchars($p['nombre']) ?></td>
                <td><?= htmlspecialchars($p['precio']) ?></td>
                <td><?= htmlspecialchars($p['stock']) ?></td>
                <td>
                    <a href="index.php?accion=editar&id=<?= $index ?>">Editar</a> |
                    <a href="index.php?accion=eliminar&id=<?= $index ?>"
                       onclick="return confirm('¿Eliminar este producto?')">
                       Eliminar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">No hay productos registrados</td>
        </tr>
    <?php endif; ?>

</table>

</body>
</html>







