
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>
    <form method="POST" action="/tienda_virtual/public/index.php?controller=producto&action=crear">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea><br>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required><br>
        <label>Stock:</label>
        <input type="number" name="stock" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

