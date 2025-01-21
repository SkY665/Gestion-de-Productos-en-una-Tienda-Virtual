<?php
require_once __DIR__ . '/../models/Producto.php';

// Definición de la clase ProductoController
class ProductoController {
    private $producto;

    // Constructor de la clase que inicializa el objeto Producto
    public function __construct($pdo) {
        $this->producto = new Producto($pdo);
    }

    // Método para listar los productos
    public function listar() {
        $productos = $this->producto->listar();
        // Incluye la vista para listar los productos
        require_once dirname(__FILE__) . '/../views/productos/listar.php';
    }

    // Método para crear un nuevo producto
    public function crear() {
        // Verifica si el método de la solicitud es POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recoge los datos del formulario
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            // Crea el nuevo producto
            $this->producto->crear($nombre, $descripcion, $precio, $stock);
            // Redirige a la página principal
            header("Location: /");
        } else {
            // Incluye la vista para crear un nuevo producto
            require_once __DIR__ . "/../views/productos/crear.php";
        }
    }

    // Método para editar un producto existente
    public function editar($id) {
        // Obtiene el producto por su ID
        $producto = $this->producto->obtenerPorId($id);
        // Verifica si el método de la solicitud es POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recoge los datos del formulario
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            // Actualiza el producto existente
            $this->producto->actualizar($id, $nombre, $descripcion, $precio, $stock);
            // Redirige a la página principal
            header("Location: /");
        } else {
            // Incluye la vista para editar el producto
            require_once 'app/views/productos/editar.php';
        }
    }

    // Método para eliminar un producto
    public function eliminar($id) {
        // Elimina el producto por su ID
        $this->producto->eliminar($id);
        // Redirige a la página principal
        header("Location: /");
    }
}
