

<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Eliminar Producto</title>
</head>
<body>
 <h1>Eliminar Producto</h1>
 <form method="POST" action="/public/index.php?controller=producto&action=eliminar">
   <!-- Campo oculto para simular el método DELETE -->
   <input type="hidden" name="_method" value="DELETE">
   
   <p>¿Estás seguro de que quieres eliminar el producto "<strong>{{producto.nombre}}</strong>"?</p>
   
   <!-- Campo de texto para confirmar el nombre -->
   <label for="nombre_confirmacion">Escribe el nombre del producto para confirmar:</label>
   <input type="text" name="nombre_confirmacion" id="nombre_confirmacion" required>
   
   <!-- Este campo oculto pasa el ID del producto para identificarlo -->
   <input type="hidden" name="id" value="{{producto.id}}">
   
   <button type="submit">Eliminar</button>
   <a href="/productos">Cancelar</a>
 </form>
</body>
</html>
