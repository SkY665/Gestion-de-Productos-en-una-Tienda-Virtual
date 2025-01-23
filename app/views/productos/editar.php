
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="POST" action="/tienda_virtual/public/index.php?controller=producto&action=editar">
        <input type="hidden" name="_method" value="PUT">
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($producto['nombre']); ?>" required>
        
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required><?php echo htmlspecialchars($producto['descripcion']); ?></textarea>
        
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="<?php echo $producto['precio']; ?>" step="0.01" required>
        
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="<?php echo $producto['stock']; ?>" required>
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

