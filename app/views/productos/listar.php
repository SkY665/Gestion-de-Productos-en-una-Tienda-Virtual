<h1>Listado de Productos</h1>
<a href="index.php?action=crear">Crear Producto</a>
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?php echo $producto['nombre']; ?></td>
            <td><?php echo $producto['descripcion']; ?></td>
            <td><?php echo $producto['precio']; ?></td>
            <td><?php echo $producto['stock']; ?></td>
            <td>
                <a href="index.php?action=editar&id=<?php echo $producto['id_producto']; ?>">Editar</a>
                <a href="index.php?action=eliminar&id=<?php echo $producto['id_producto']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
