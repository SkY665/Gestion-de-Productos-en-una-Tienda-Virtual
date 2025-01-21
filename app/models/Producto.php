<?php
class Producto {
    private $pdo;

    // Constructor que inicializa el objeto con una instancia de PDO para la conexión a la base de datos
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Método para crear un nuevo producto en la base de datos
    public function crear($nombre, $descripcion, $precio, $stock) {
        $sql = "INSERT INTO productos (nombre, descripcion, precio, stock) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nombre, $descripcion, $precio, $stock]);
    }

    // Método para listar todos los productos de la base de datos
    public function listar() {
        $sql = "SELECT * FROM productos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un producto por su ID
    public function obtenerPorId($id) {
        $sql = "SELECT * FROM productos WHERE id_producto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para actualizar un producto existente en la base de datos
    public function actualizar($id, $nombre, $descripcion, $precio, $stock) {
        $sql = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, stock = ? WHERE id_producto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nombre, $descripcion, $precio, $stock, $id]);
    }

    // Método para eliminar un producto de la base de datos por su ID
    public function eliminar($id) {
        $sql = "DELETE FROM productos WHERE id_producto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
?>

