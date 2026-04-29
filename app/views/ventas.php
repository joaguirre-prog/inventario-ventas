
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas</title>
</head>
<body>

<h2>Realizar Venta</h2>

<a href="index.php">⬅ Volver al inventario</a>

<table border="1">
    <tr>
        <th>Producto</th>
        <th>Stock</th>
        <th>Vender</th>
    </tr>

    <?php foreach ($productos as $index => $p): ?>
        <?php if (!is_array($p)) continue; ?>
        <tr>
            <td><?= htmlspecialchars($p['nombre']) ?></td>
            <td><?= htmlspecialchars($p['stock']) ?></td>
            <td>
                <form method="POST" action="index.php?accion=procesarVenta">
                    <input type="hidden" name="id" value="<?= $index ?>">
                    <input type="number" name="cantidad" min="1" max="<?= $p['stock'] ?>" required>
                    <button type="submit">Vender</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>

